<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class Automatic
 * Proxy for old delivery handlers to work with new API.
 * @package Bitrix\Sale\Delivery\Services
 */
class Automatic extends \Bitrix\Sale\Delivery\Services\Base
{
    protected $sid = "";
    protected $oldConfig = array();
    protected $handlerInitParams = array();
    protected static $canHasProfiles = true;
    public function __construct(array $initParams)
    {
    }
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    protected function getConfigStructure()
    {
    }
    public function prepareFieldsForSaving(array $fields)
    {
    }
    public static function convertNewSettingsToOld(array $newSettings = array())
    {
    }
    public static function convertOldConfigToNew($oldConfig)
    {
    }
    protected static function convertOldConfigParamToNew(array $oldParam)
    {
    }
    protected static function convertNewOrderToOld(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public static function getHandlerInitParams($sid)
    {
    }
    public static function initHandlers()
    {
    }
    public static function getRegisteredHandlers($indexBy = "")
    {
    }
    public static function convertNewServiceToOld($service, $sid = false)
    {
    }
    public function getOldDbSettings($settings)
    {
    }
    public static function createConfig($initHandlerParams, $settings, $siteId = false)
    {
    }
    protected function getCalcultor()
    {
    }
    protected function getCompability()
    {
    }
    protected static function getCompatibleProfiles($sid, $compatibilityFunc, array $config, \Bitrix\Sale\Shipment $shipment)
    {
    }
    public function isProfileCompatible($profileId, $config, \Bitrix\Sale\Shipment $shipment)
    {
    }
    public function getOldConfig()
    {
    }
    public function getSid()
    {
    }
    /**
     * @param $profileId
     * @param array $profileConfig
     * @param \Bitrix\Sale\Shipment $shipment
     * @return CalculationResult
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     */
    public function calculateProfile($profileId, array $profileConfig, \Bitrix\Sale\Shipment $shipment)
    {
    }
    public static function getChildrenClassNames()
    {
    }
    public function getConfigValues()
    {
    }
    protected function getMarginPrice($price, $shipmentCurrency = '')
    {
    }
    public function getProfilesDefaultParams(array $fields = array())
    {
    }
    public static function onAfterAdd($serviceId, array $fields = array())
    {
    }
    public function getProfilesList()
    {
    }
    public static function canHasProfiles()
    {
    }
    public function getAdminMessage()
    {
    }
    public function execAdminAction()
    {
    }
    public function getAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public function processAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment, array $requestData)
    {
    }
    public function getAdditionalInfoShipmentView(\Bitrix\Sale\Shipment $shipment)
    {
    }
}