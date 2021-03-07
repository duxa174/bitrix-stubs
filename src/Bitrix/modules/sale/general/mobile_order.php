<?php

class CSaleMobileOrderUtils
{
    public static function GetFormatedUserName($userId)
    {
    }
    function getMobileReports()
    {
    }
    //	RegisterModuleDependences("mobileapp", "OnBeforeAdminMobileMenuBuild",
    //								"sale", "CSaleMobileOrderUtils", "buildSaleAdminMobileMenu");
    function buildSaleAdminMobileMenu()
    {
    }
    function makeDetailClassFromOrder($arOrder)
    {
    }
    function getOrderInfoDetail($orderId)
    {
    }
    private function getOrderProps($arOrder)
    {
    }
    public static function getCurrenciesNames($arCurIds = array())
    {
    }
    public static function getDeliveriesInfo($deliveryCodes)
    {
    }
    public static function getSitesNames($arSitesIds = array())
    {
    }
    public static function getPaySystemsNames($arPaySystemsIds)
    {
    }
    public static function getPersonTypesNames($arPersonTypeIds)
    {
    }
    public static function getStatusesNames($arStatusIds = \false)
    {
    }
    function getDateTime($strDate)
    {
    }
    /**
     * @param string $strDate
     * @return string
     */
    static function getDate($strDate)
    {
    }
    function getPreparedTemplate($template, $arFields)
    {
    }
}
class CSaleMobileOrderPull
{
    public static function InitEventHandlers()
    {
    }
    public static function onOrderDelete($orderId, $bSuccess)
    {
    }
    public static function onOrderAdd($orderId, $arFields)
    {
    }
    public static function onOrderUpdate($orderId, $arFields)
    {
    }
}
class CSaleMobileOrderFilter
{
    public function adaptFields($arFields)
    {
    }
    private function parseOrderId($strOrderId)
    {
    }
    public function addLastTimeToDate($strDate)
    {
    }
    public function setFieldsValues($arFields, $customFilter)
    {
    }
    public function buildFieldsParams()
    {
    }
}
class CSaleMobileOrderPush
{
    private static $arEvents = array("ORDER_STATUS_CHANGED", "ORDER_DELIVERY_ALLOWED", "ORDER_PAYED", "ORDER_COMPLETED", "ORDER_DEDUCTED", "ORDER_CANCELED", "ORDER_CREATED", "ORDER_MARKED", "ORDER_CHECK_ERROR");
    private static $arSubscriptions = array();
    public static function getEvents()
    {
    }
    private static function &getData()
    {
    }
    private static function saveData()
    {
    }
    public static function getSubscribers($eventId, $arParams)
    {
    }
    public static function updateSubscriptions($userId, $arSubs)
    {
    }
    public static function addSubscription($userId, $eventId, $value)
    {
    }
    private static function checkRights($userId, $eventId, $arParams)
    {
    }
    public static function getSubscriptions($userId)
    {
    }
    private static function makeMessage($eventId, $arParams)
    {
    }
    private static function makeTitle($eventId, $arParams)
    {
    }
    public static function send($eventId, $arParams)
    {
    }
}