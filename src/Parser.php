<?php

namespace Ribal\Onix;

use Ribal\Onix\Message\Message;
use Ribal\Onix\Normalizer\BooleanNormalizer;
use Ribal\Onix\Normalizer\CodeListNormalizer;
use Ribal\Onix\Normalizer\DateNormalizer;
use Ribal\Onix\Normalizer\EmptyArrayNormalizer;
use Ribal\Onix\Normalizer\ShortTagNameConverter;
use Ribal\Onix\Normalizer\TextNormalizer;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Parser
{

    /**
     * XML Encoder
     *
     * @var XmlEncoder
     */
    private ONIXEncoder $encoder;

    /**
     * Array of normalizers to use
     *
     * @var array
     */
    private array $normalizers = [];

    /**
     * Serializer service
     *
     * @var Serializer;
     */
    private Serializer $serializer;

    /**
     * Constructor function
     * 
     * Initializes the needed libraries and classes to work with
     * 
     * @param string $language
     * @return Parser
     */
    public function __construct(string $language = 'en')
    {

		$supportedLanguages = ['en', 'es', 'de', 'fr', 'it', 'nb', 'tr'];
		
    	if (!in_array($language, $supportedLanguages)) {
    		throw new \InvalidArgumentException('Language must be one of ' . join(', ', $supportedLanguages));
    	}
    
        $this->encoder = new ONIXEncoder();
        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader());

        $this->normalizers = [
            new ArrayDenormalizer(),
            new CodeListNormalizer($language),
            new DateNormalizer(),
            new TextNormalizer(),
            new ObjectNormalizer(
                $classMetadataFactory,
                new ShortTagNameConverter(),
                null,
                new ReflectionExtractor()
            )
        ];

        $this->serializer = new Serializer(
            $this->normalizers,
            [ $this->encoder ]
        );
    }

    /**
     * Parse an XML string
     *
     * @param string $xml
     * @return Message
     */
    public function parseString(string $xml)
    {
        $message = $this->serializer->deserialize($xml, Message::class, 'xml', [
            // XmlEncoder::DECODER_IGNORED_NODE_TYPES => [XML_TEXT_NODE],
        ]);

// dd($this->serializer->serialize($message, 'xml', [
//     XmlEncoder::ROOT_NODE_NAME => 'ONIXmessage',
//     XmlEncoder::REMOVE_EMPTY_TAGS => true,
//     XmlEncoder::FORMAT_OUTPUT => true
// ]));

        return $message;
    }

    /**
     * Generate an XML string from a Message object
     *
     * @param Message $message
     * @param string $format
     * @param string $release ONIX release, either 3.0 or 3.1
     * @return string
     */
    public function generate(Message $message, string $format = 'reference', string $release = '3.0') : string
    {
        if ($format != 'reference' && $format != 'short') {
            throw new \InvalidArgumentException('Format must be either reference or short');
        }

        if ($release != '3.0' && $release != '3.1') {
            throw new \InvalidArgumentException('Release must be either 3.0 or 3.1');
        }

        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader());

        $this->normalizers = [
            new ArrayDenormalizer(),
            new EmptyArrayNormalizer(),
            new CodeListNormalizer('de'),
            new DateNormalizer(),
            new TextNormalizer(),
            new ObjectNormalizer(
                $classMetadataFactory,
                $format == 'short' ? new ShortTagNameConverter() : null,
                null,
                new ReflectionExtractor()
            ),
        ];

        $this->serializer = new Serializer(
            $this->normalizers,
            [ $this->encoder ]
        );

        $xmlString = $this->serializer->serialize($message, 'xml', [
            XmlEncoder::ROOT_NODE_NAME => $format == 'reference' ? 'ONIXMessage' : 'ONIXmessage',
            XmlEncoder::REMOVE_EMPTY_TAGS => true,
            XmlEncoder::FORMAT_OUTPUT => true
        ]);

        $dom = new \DOMDocument();
        $dom->loadXML($xmlString);

        $root = $dom->documentElement;
        $root->setAttribute('xmlns', 'http://ns.editeur.org/onix/' . $release . '/' . $format);
        $root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $root->setAttribute('xsi:schemaLocation', 'http://ns.editeur.org/onix/' . $release . '/' . $format . ' xsd/onix-' . $format . '.xsd');
        $root->setAttribute('release', $release);

        return $dom->saveXML();
    }

}
