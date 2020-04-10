<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\Text;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TextNormalizer implements NormalizerInterface, DenormalizerInterface
{

    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {

    }

    /**
     * {@inheritDoc}
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {

        $textFormat = isset($data['@textformat']) ? $data['@textformat'] : Text::TYPE_DEFAULT;
        $language = isset($data['@language']) ? $data['@language'] : null;
        $content = is_array($data) ? $data['#'] : $data;

        if ($content == null) {
            dump($data);
        }

        return new Text($content, $textFormat, $language);

    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {

    }

    /**
     * {@inheritDoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Text::class;
    }

}
