<?php

namespace Sale\Handlers\Delivery;

class SpsrHandler extends \Bitrix\Sale\Delivery\Services\Base
{
    protected static $url_test_request = "http://spsr.ru/testxml";
    /** @var bool $canHasProfiles This handler can has profiles */
    protected static $canHasProfiles = true;
    /** @var bool $whetherAdminExtraServicesShow This handler uses extra services */
    protected static $whetherAdminExtraServicesShow = true;
    /** @var string Tracking class */
    protected $trackingClass = '\\Sale\\Handlers\\Delivery\\SpsrTracking';
    /**
     * @return string
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string
     */
    public static function getClassDescription()
    {
    }
    /**
     * Returns string for http request.
     * @param Shipment $shipment
     * @return Result
     */
    protected function getTarifsReq(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * Calculates prices for concrete service
     * @param Shipment $shipment
     * @param $tariff
     * @return CalculationResult
     */
    public function calculateTariff(\Bitrix\Sale\Shipment $shipment, $tariff)
    {
    }
    /**
     * @return array Configuration structure
     */
    protected function getConfigStructure()
    {
    }
    /**
     * @return int[] Natures of the cargo code => names
     */
    protected static function getNaturesList()
    {
    }
    /**
     * @param int $profileId
     * @return int[]
     */
    protected static function getProfileNatures($profileId = 0)
    {
    }
    public function isCalculatePriceImmediately()
    {
    }
    /**
     * @return array Business values.
     */
    public static function onGetBusinessValueConsumers()
    {
    }
    public static function onGetBusinessValueGroups()
    {
    }
    private static function isHoldingUsed()
    {
    }
    /**
     * Decodes income data if it needs
     * @param $str
     * @return array|bool|string
     */
    protected static function utfDecode($str)
    {
    }
    /**
     * @return array Class names for profiles.
     */
    public static function getChildrenClassNames()
    {
    }
    /**
     * @return string Company name.
     */
    public static function getCompanyName()
    {
    }
    /**
     * Returns SID required for requests.
     * @return Result
     */
    public function getSidResult($shipment = null)
    {
    }
    /**
     * @param string $fieldName
     * @param Shipment|null $shipment
     * @return string
     */
    protected function getAuthField($fieldName, $shipment = null)
    {
    }
    /**
     * @param Shipment|null $shipment
     * @return string
     */
    protected function getLogin($shipment = null)
    {
    }
    /**
     * @param Shipment|null $shipment
     * @return string
     */
    protected function getPass($shipment = null)
    {
    }
    /**
     * @param Shipment|null $shipment
     * @return string
     */
    public function getICN($shipment = null)
    {
    }
    /**
     * Returns services list with parameters.
     * @return Result
     */
    public function getServiceTypes($shipment = null)
    {
    }
    protected static function getOnLineSrvs()
    {
    }
    /**
     * @return int[] Services ids we can process.
     */
    protected function getKnownServices()
    {
    }
    /**
     * @return array Extra services list we can use
     */
    public function getEmbeddedExtraServicesList()
    {
    }
    public static function getAlltExtraServices()
    {
    }
    /**
     * @param Shipment|null $shipment
     * @return array Profiles list code => name
     */
    public function getProfilesList($shipment = null)
    {
    }
    /**
     * @param Shipment $shipment
     * @return int[] Services types ids compatible with shipment
     */
    public function getCompatibleProfiles(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public static function onAfterUpdate($serviceId, array $fields = array())
    {
    }
    /**
     * @param int $serviceId
     * @param array $fields
     * @return bool
     */
    public static function onAfterAdd($serviceId, array $fields = array())
    {
    }
    public static function install()
    {
    }
    public static function unInstall()
    {
    }
    public static function onSaleDeliveryTrackingClassNamesBuildList()
    {
    }
    public static function isInstalled()
    {
    }
    public function getProfilesDefaultParams()
    {
    }
    public static function canHasProfiles()
    {
    }
    public static function whetherAdminExtraServicesShow()
    {
    }
    public function getAdminAdditionalTabs()
    {
    }
    public static function isHandlerCompatible()
    {
    }
}