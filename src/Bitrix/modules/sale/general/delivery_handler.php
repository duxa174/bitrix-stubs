<?php

/** @deprecated */
class CAllSaleDeliveryHandler
{
    public static $actions = array(
        "REQUEST_SELF" => 0,
        // Request to delivery company to wait a cargo
        "REQUEST_TAKE" => 1,
    );
    /** public: Initialize
     * includes all delivery_*.php files in /php_interface/include/sale_delivery/ and /modules/sale/delivery/
     * double files with the same name are ignored
     * @deprecated
     */
    public static function Initialize()
    {
    }
    /**
     * private: get all handlers
     * @deprecated
     */
    protected static function __getRegisteredHandlers()
    {
    }
    /**
     * get full list based on FS
     * @deprecated
     */
    public static function GetAdminList($arSort = array("SORT" => "ASC"))
    {
    }
    protected static function isFieldInFilter($fieldName, $filter)
    {
    }
    protected static function getFilterValue($fieldName, $filter)
    {
    }
    public static function isSidNew($sid)
    {
    }
    public static function getIdFromNewSid($sid)
    {
    }
    protected static function convertFilterOldToNew(array $oldFilter)
    {
    }
    protected static function isFieldInFilter2($fieldName, $filter)
    {
    }
    protected static function checkRestrictionFilter(array $restriction, array $filter)
    {
    }
    /**
     * get handlers list based on DB data
     * @deprecated
     */
    public static function GetList($arSort = array("SORT" => "ASC"), $arFilter = array())
    {
    }
    /**
     * get services compability. result - list of delivery profiles;
     * @deprecated
     */
    public static function GetHandlerCompability($arOrder, $arHandler, $SITE_ID = \SITE_ID)
    {
    }
    /**
     * @param $SID
     * @param $profileId
     * @param $arOrder
     * @param bool $siteId
     * @return array|mixed
     * @deprecated
     */
    public static function GetHandlerExtraParams($SID, $profileId, $arOrder, $siteId = \false)
    {
    }
    /**
     * @param $deliveryId
     * @return array|mixed
     * @deprecated
     */
    public static function getActionsList($deliveryId)
    {
    }
    /**
     * @param $deliveryId
     * @param $actionId
     * @param $arOrder
     * @return array|mixed
     * @deprecated
     */
    public static function executeAction($deliveryId, $actionId, $arOrder)
    {
    }
    /**
     * get services data by DB sID
     * @deprecated
     */
    public static function GetBySID($SID, $SITE_ID = \false)
    {
    }
    /** @deprecated */
    public static function CheckFields($arData)
    {
    }
    /**
     * @param $sid
     * @return array|bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    public static function getServiceParams($sid, $siteId = \false)
    {
    }
    /**
     * @param $deliveryId
     * @param $siteId
     * @param $update
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    protected static function saveRestrictionBySiteId($deliveryId, $siteId, $update)
    {
    }
    /**
     * @param $deliveryId
     * @param array $weightParams
     * @param $update
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    protected static function saveRestrictionByWeight($deliveryId, array $weightParams, $update)
    {
    }
    protected static function saveRestrictionByPublicShow($deliveryId, $publicShow, $update)
    {
    }
    /**
     * @param $deliveryId
     * @param array $priceParams
     * @param $currency
     * @param $update
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    protected static function saveRestrictionByPrice($deliveryId, array $priceParams, $currency, $update)
    {
    }
    /**
     * @param $deliveryId
     * @param array $params
     * @param $update
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    protected static function saveRestrictionByDimensions($deliveryId, array $params, $update)
    {
    }
    /**
     * @param $deliveryId
     * @param array $params
     * @param $update
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    protected static function saveRestrictionByMaxSize($deliveryId, $maxSize, $update)
    {
    }
    /** @deprecated */
    public static function Set($code, $arData, $siteId = \false)
    {
    }
    /** @deprecated */
    public static function Reset($sid)
    {
    }
    /** @deprecated */
    public static function ResetAll()
    {
    }
    /** @deprecated */
    protected static function __executeCalculateEvents($SID, $profile, $arOrder, $arReturn)
    {
    }
    public static function execOldEventWithNewParams(\Bitrix\Main\Event $params)
    {
    }
    /** deprecated */
    public static function CalculateFull($SID, $profile, $arOrder, $currency, $SITE_ID = \false)
    {
    }
    /**
     * @param $STEP
     * @param $SID
     * @param $profile
     * @param $arOrder
     * @param $currency
     * @param bool $TMP
     * @param bool $SITE_ID
     * @return array
     * @deprecated
     */
    public static function Calculate($STEP, $SID, $profile, $arOrder, $currency, $TMP = \false, $SITE_ID = \false)
    {
    }
    /**
     * @param $arOrderDimensions
     * @param $arRestrictDimensions
     * @return bool
     * @deprecated
     */
    public static function checkDimensions($arOrderDimensions, $arRestrictDimensions)
    {
    }
    /**
     * @param $arItems
     * @param $maxDimensionSum
     * @return bool
     * @deprecated
     */
    public static function checkDimensionsSum($arItems, $maxDimensionSum)
    {
    }
    /**
     * @param $arItems
     * @param $maxSize
     * @return bool
     * @deprecated
     */
    public static function checkMaxSize($arItems, $maxSize)
    {
    }
    /**
     * @param $arItem
     * @return bool
     * @deprecated
     */
    private static function isDimensionsExist($arItem)
    {
    }
    /**
     * @return array
     * @deprecated
     */
    public static function getActionsNames()
    {
    }
    /**
     * @return \Bitrix\Sale\Result
     * @throws Exception
     * @throws \Bitrix\Main\SystemException
     */
    public static function convertToNew($renameTable = \false)
    {
    }
    public static function convertToNewAgent($renameTable = \false)
    {
    }
    public static function convertConfigHandlerToSidAgent()
    {
    }
}