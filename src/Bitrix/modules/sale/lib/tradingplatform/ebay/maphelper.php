<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class MapHelper
 * Useful mapping methods
 * @package Bitrix\Sale\TradingPlatform\Ebay
 */
class MapHelper
{
    /**
     * @param int $iblockId Iblock id.
     * @return string Category map entity code.
     */
    public static function getCategoryEntityCode($iblockId)
    {
    }
    /**
     * @param int $iblockId Iblock id.
     * @param int $ebayCategoryId Category id.
     * @return string Category variation entity code.
     */
    public static function getCategoryVariationEntityCode($iblockId, $ebayCategoryId)
    {
    }
    /**
     * @param string  $siteId Site id.
     * @return string Delivery entity code.
     */
    public static function getDeliveryEntityCode($siteId)
    {
    }
    /**
     * @param string $siteId Site id.
     * @return int Delivery entity id.
     */
    public static function getDeliveryEntityId($siteId)
    {
    }
    /**
     * @param int $iblockId Iblock id.
     * @return int Category entity id.
     */
    public static function getCategoryEntityId($iblockId)
    {
    }
    /**
     * @param int $iblockId Iblock id.
     * @param int $ebayCategoryId Category id.
     * @return int Category variation entity id.
     */
    public static function getCategoryVariationEntityId($iblockId, $ebayCategoryId)
    {
    }
    /**
     * @param string $mapEntityCode Map entity code
     * @return int Map entity id.
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getMapEntityId($mapEntityCode)
    {
    }
    /**
     * @param array $ebayDelivery Ebay deliveries ids.
     * @param string $siteId Site id.
     * @return array Bitrix delivery ids.
     */
    public function getBitrixDeliveryIds(array $ebayDelivery, $siteId)
    {
    }
}