<?php

namespace Ribal\Onix;

use DOMCdataSection;
use DOMNode;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class ONIXEncoder extends XmlEncoder
{

    /**
     * ONIX attributes which are allowed on (almost) any element but are not
     * part of the object model. They are removed before decoding, otherwise
     * the element would be decoded as an array instead of its plain value.
     */
    private const IGNORED_ATTRIBUTES = ['datestamp', 'sourcename', 'sourcetype', 'collationkey', 'textcase', 'textscript'];

    /**
     * Elements whose language attribute is kept, as they are mapped to
     * Ribal\Onix\Text (reference and short tag names)
     */
    private const LANGUAGE_ELEMENTS = ['Text', 'd104', 'BiographicalNote', 'b044'];

    /**
     * {@inheritdoc}
     */
    public function decode(string $data, string $format, array $context = []): mixed
    {
        
        if ('' === trim($data)) {
            throw new NotEncodableValueException('Invalid XML data, it can not be empty.');
        }

        $dom = new \DOMDocument();
        $dom->loadXML($data);
        $xpath = new \DOMXPath($dom);

        foreach ($xpath->query("//*[@textformat='02' or @textformat='03' or @textformat='05']") as $textElement) {
            $this->wrapText($textElement);
        }

        foreach (self::IGNORED_ATTRIBUTES as $attribute) {
            foreach ($xpath->query("//@" . $attribute) as $node) {
                $node->ownerElement->removeAttributeNode($node);
            }
        }

        foreach ($xpath->query("//@language") as $node) {
            if (!in_array($node->ownerElement->localName, self::LANGUAGE_ELEMENTS)) {
                $node->ownerElement->removeAttributeNode($node);
            }
        }

        $data = $dom->saveXML();

        return parent::decode($data, $format, $context);
        
    }

    /**
     * Wrap XML/HTML/XHTML nodes into CDATA group, so it's contents will not
     * be processed by any normalizer or serializer.
     * 
     * @param DOMNode $node
     * @return void
     */
    private function wrapText(DOMNode $node)
    {

        $innerHtml = "";

        foreach ($node->childNodes as $child) {
            $innerHtml .= $node->ownerDocument->saveXML($child);
        }

        while ($node->hasChildNodes()) {
            $node->removeChild($node->firstChild);
        }

        $cdata = new DOMCdataSection($innerHtml);

        $node->appendChild($cdata);

    }


}