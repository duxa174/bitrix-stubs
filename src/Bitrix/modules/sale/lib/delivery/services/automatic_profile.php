<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class AutomaticProfile
 * Adapter for old delivery services profile to work with new API.
 * @package Bitrix\Sale\Delivery\Services
 */
class AutomaticProfile extends \Bitrix\Sale\Delivery\Services\Base
{
    protected $profileId = "";
    protected $oldConfig;
    protected $parentSid;
    /** @var Automatic|null $parentAutomatic */
    protected $parentAutomatic = null;
    protected $parentHandlerInitParams = array();
    protected $profileConfig = null;
    protected $profileOldConfig = null;
    protected $profileOldConfigActualized = false;
    protected static $isProfile = true;
    public function __construct(array $initParams)
    {
    }
    protected function inheritParams()
    {
    }
    /**
     * @param bool $actualizeProfiles
     * @return array Old config.
     * @internal
     */
    public function getOldConfig($actualizeProfiles = false)
    {
    }
    /**
     * @param array $oldConfig
     * @return array
     */
    protected function actualizeProfilesConfig(array $oldConfig)
    {
    }
    public function getConfig()
    {
    }
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment)
    {
    }
    protected function getMarginPrice($price)
    {
    }
    protected function getConfigStructure()
    {
    }
    public function prepareFieldsForSaving(array $fields)
    {
    }
    public function getParentService()
    {
    }
    public function isCompatible(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public static function isProfile()
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