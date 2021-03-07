<?php

class CDeliveryPecom
{
    public static $EXTRA_DEMENSIONS_WEIGHT = 1000;
    // (kg)
    public static $EXTRA_DIMENSIONS_SIZE = 5;
    // (m)
    public static $PAYER_SHOP = "1";
    public static $PAYER_BUYER = "2";
    function Init()
    {
    }
    function getExtraInfoParams($arOrder, $arConfig, $profileId, $siteId)
    {
    }
    function getConfig($siteId = \false)
    {
    }
    function getSettings($strSettings)
    {
    }
    function setSettings($arSettings)
    {
    }
    function getFeatures($arConfig)
    {
    }
    function calculate($profile, $arConfig, $arOrder, $STEP, $TEMP = \false)
    {
    }
    function compability($arOrder, $arConfig)
    {
    }
    public static function getConfValue(&$arConfig, $key)
    {
    }
    public static function isConfCheckedVal(&$arConfig, $key)
    {
    }
    public static function getActionsList()
    {
    }
    protected static function sendRequest($apiLogin, $apiKey, $controller, $action, $data)
    {
    }
    protected static function getPhoneEmail($orderId)
    {
    }
    public static function executeAction($actionId, $profileId, $arOrder, $arConfig)
    {
    }
    protected static function getAviableBoxes()
    {
    }
    public function getAdminMessage()
    {
    }
    public static function execAdminAction()
    {
    }
    public static function getAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public static function getAdditionalInfoShipmentView(\Bitrix\Sale\Shipment $shipment)
    {
    }
    protected static function isRequestSelfSent($shipmentId)
    {
    }
    protected static function getRequestSelfSentDate($shipmentId)
    {
    }
    public function processAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment, array $requestData)
    {
    }
}