<?php

namespace Bitrix\Iblock\Component;

/**
 * Class Filters
 * Provides various useful methods for sorted offers.
 *
 * @package Bitrix\Iblock\Component
 */
class Filters
{
    /**
     * Return offers id by filter.
     *
     * @param array $filter				CIBlockElement::getList filter.
     * @return array
     */
    public static function getFilteredOffersId(array $filter)
    {
    }
    /**
     * Return offer id by filter group by product id.
     *
     * @param int $iblockId				Offers iblock id.
     * @param int $propertyId			Sku property id.
     * @param array $filter				CIBlockElement::getList filter.
     * @return array
     */
    public static function getFilteredOffersByProduct($iblockId, $propertyId, array $filter)
    {
    }
}