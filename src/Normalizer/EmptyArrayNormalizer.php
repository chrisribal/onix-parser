<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\CodeList\CodeList;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EmptyArrayNormalizer implements NormalizerInterface
{
    /**
     * Check if the current object is an empty to be normalized
     *
     * @param mixed $data
     * @param string $format
     * @param array $context
     * @return boolean
     */
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_array($data) && empty($data);
    }

    /**
     * Returns the original code of the CodeList
     *
     * @param CodeList $data
     * @param string $format
     * @param array $context
     * @return void
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return null;
    }

    /**
     * Checks if the current element is a CodeList that needs to be deserialized
     *
     * @param mixed $data
     * @param mixed $type
     * @param string $format
     * @param array $context
     * @return boolean
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return false;
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['*' => true];
    }

}
