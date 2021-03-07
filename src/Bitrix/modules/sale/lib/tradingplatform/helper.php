<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class Helper
 * Collections of different useful static methods.
 * @package Bitrix\Sale\TradingPlatform
 */
class Helper
{
    /**
     * Wraps  Product Provider Class::GetProductData from module catalog.
     * @param int $productId Product Id.
     * @param int $quantity Product quantity.
     * @param string $siteId Site id.
     * @return array.
     * @throws \Bitrix\Main\SystemException
     */
    static $arIBlockIDs;
    public static function getProductById($productId, $quantity, $siteId)
    {
    }
    /**
     * @param string $siteId Site id.
     * @return array List of person types for given site.
     */
    public static function getPersonTypesList($siteId)
    {
    }
    /**
     * @param string $siteId Site id.
     * @return array List of diliveries for given site.
     */
    public static function getDeliveryList($siteId)
    {
    }
    /**
     * @param int $personTypeId Person type Id.
     * @return array Orders properties.
     */
    public static function getOrderPropsList($personTypeId)
    {
    }
    /**
     * @return array List of properties wich required for order creation.
     */
    public static function getRequiredOrderProps()
    {
    }
    /**
     * @param string $selectName Name of input element.
     * @param string $psIdValue Selected value.
     * @param int $personTypeId Person type Id.
     * @return string html element <select>...</select>
     */
    public static function makeSelectorFromPaySystems($selectName, $psIdValue, $personTypeId)
    {
    }
    /**
     * @param string $name Name of select.
     * @param array $data to use in select,
     * @param string $selected Selected value.
     * @param bool $bShowNotUse Show or not empty value.
     * @return string Html select element <select>....</select>
     */
    public static function getSelectHtml($name, array $data, $selected = "", $bShowNotUse = true)
    {
    }
    /**
     * @param array $params
     * @return array Additional order properties.
     */
    public static function makeAdditionalOrderProps(array $params)
    {
    }
    /**
     * @return array Order's statuses & flags.
     */
    public static function getBitrixStatuses($siteId)
    {
    }
    /**
     * @param string $selectName Name of select.
     * @param int $iblockId Iblock Id.
     * @param int $bitrixCategoryId Iblock section Id.
     * @param string $value Selected value.
     * @return string Html element <select>....
     */
    public static function getBitrixCategoryPropsHtml($selectName, $iblockId, $bitrixCategoryId = 0, $value = '')
    {
    }
    /**
     * @param int $iblockId Iblock Id.
     * @param int $sectionId Section Id.
     * @return array Iblock properties list.
     */
    public static function getPropertiesList($iblockId, $sectionId = 0)
    {
    }
    public function notifyNewOrder($newOrderId, $siteId, $buyerEmail = "", $buyerFio = "")
    {
    }
    public static function onAfterUpdateShipment(\Bitrix\Main\Event $event)
    {
    }
    public static function getIblocksIds($withSku = false)
    {
    }
    public static function getDefaultFeedIntervals()
    {
    }
}