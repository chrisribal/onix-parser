<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\CodeList\CodeList55;
use Ribal\Onix\Date;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DateNormalizer implements NormalizerInterface, DenormalizerInterface
{

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return $object->formatOnix();
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $date = Date::parse(
            is_array($data) ? $data['#'] : $data,
            is_array($data) ? $data['@dateformat'] : '00'
        );

        return $date;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Date;
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type == Date::class;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Date::class => true
        ];
    }
}