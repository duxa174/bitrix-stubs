<?php

namespace Bitrix\Sale\Location\Normalizer;

/**
 * Class CommonNormalizer
 * @package Bitrix\Sale\Location\Normalizer
 * Delete all except letters and spaces, trim and converts to uppercase.
 */
class CommonNormalizer implements \Bitrix\Sale\Location\Normalizer\INormalizer
{
    /**
     * @inheritdoc
     */
    public function normalize($string)
    {
    }
}