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
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {

    }

    /**
     * {@inheritDoc}
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type == Text::class;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Text::class => true
        ];
    }
}
