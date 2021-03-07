<?php

namespace Bitrix\Sale\Location\Normalizer;

/**
 * Normalize Locations names for search and mapping purposes.
 * Class Normalizer
 * @package Bitrix\Sale\Location\Normalizer
 */
class Normalizer implements \Bitrix\Sale\Location\Normalizer\INormalizer
{
    /** @var INormalizer [] */
    protected $normalizers = [];
    /**
     * Normalizer constructor.
     * @param INormalizer[] $normalizers
     */
    public function __construct(array $normalizers)
    {
    }
    /**
     * @param INormalizer $normalizer
     * @throws ArgumentOutOfRangeException
     */
    protected function addNormalizer($normalizer)
    {
    }
    /**
     * @param string $string
     * @return string
     */
    public function normalize($string)
    {
    }
}