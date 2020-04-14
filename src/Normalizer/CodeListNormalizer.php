<?php

namespace Ribal\Onix\Normalizer;

use Ribal\Onix\CodeList\CodeList;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CodeListNormalizer implements NormalizerInterface, DenormalizerInterface
{

	/**
	 * Language to get code files for
	 *
	 * @var string
	 */
	private $language = 'en';

	/**
	 * Constructor function
	 *
	 * @param string
	 * @return void
	 */
	public function __construct(string $language = 'en')
	{
		$this->language = $language;
	}

    /**
     * Check if the current object is a CodeList to be normalized
     *
     * @param mixed $data
     * @param string $format
     * @param array $context
     * @return boolean
     */
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof CodeList;
    }

    /**
     * Returns the original code of the CodeList
     *
     * @param CodeList $data
     * @param string $format
     * @param array $context
     * @return void
     */
    public function normalize($data, $format = null, array $context = [])
    {
        return $data->getCode();
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
    public function supportsDenormalization($data, $type, $format = null, array $context = [])
    {
        return is_subclass_of($type, CodeList::class);
    }

    /**
     * Denormalize a given CodeList
     * $data represents a Code
     *
     * @param string $data
     * @param CodeList $type
     * @param string $format
     * @param array $context
     * @return CodeListList
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        return $type::resolve($data, $this->language);
    }

}
