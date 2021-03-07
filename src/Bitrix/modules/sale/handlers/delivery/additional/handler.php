<?php

namespace Sale\Handlers\Delivery;

/**
 * Class AdditionalHandler
 * Allows to use additional delivery services
 * @package Sale\Handlers\Delivery
 */
class AdditionalHandler extends \Bitrix\Sale\Delivery\Services\Base
{
    /** @var string The real type of the handler */
    protected $serviceType = "";
    protected static $canHasProfiles = true;
    protected static $whetherAdminExtraServicesShow = true;
    protected $trackingClass = '\\Sale\\Handlers\\Delivery\\AdditionalTracking';
    protected $trackingTitle = '';
    protected $trackingDescription = '';
    protected $profilesListFull = null;
    protected $extraServicesList = null;
    const LOGO_FILE_ID_OPTION = 'handlers_dlv_add_lgotip';
    /**
     * AdditionalHandler constructor.
     * @param array $initParams
     * @throws ArgumentNullException
     */
    public function __construct(array $initParams)
    {
    }
    public function getDeliveryRequestHandler()
    {
    }
    /**
     * @return string Class title.
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string Class, service description.
     */
    public static function getClassDescription()
    {
    }
    /**
     * @return array
     * @throws SystemException
     * todo: business values for default values
     */
    protected function getConfigStructure()
    {
    }
    /**
     * @return array Supported types of services.
     */
    public static function getSupportedServicesList()
    {
    }
    /**
     * @return array
     */
    protected function getServiceParams()
    {
    }
    protected function getLogoFileId()
    {
    }
    protected function setLogoFileId($logoId)
    {
    }
    /**
     * @return array
     */
    public static function getChildrenClassNames()
    {
    }
    /**
     * @return array profiles ids and names
     */
    public function getProfilesList()
    {
    }
    public function getTrackingStatuses(array $trackingNumbers = array())
    {
    }
    public function getTrackingClassTitle()
    {
    }
    public function getTrackingClassDescription()
    {
    }
    /**
     * @return array All profile fields.
     */
    public function getProfilesListFull()
    {
    }
    /**
     * @return bool
     */
    public static function whetherAdminExtraServicesShow()
    {
    }
    /**
     * @return string
     */
    public function getServiceType()
    {
    }
    /**
     * @param $shipment
     * @return array
     */
    public function getCompatibleProfiles($shipment)
    {
    }
    /**
     * @return bool
     */
    public static function canHasProfiles()
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
    protected static function installReliability(int $serviceId, bool $doInstall)
    {
    }
    /**
     * @param string $type
     * @param string $profileId
     * @param array $params
     * @throws \Exception
     */
    protected function addRestriction($type, $profileId, array $params)
    {
    }
    /**
     * @param string $type
     * @param array $fields
     * @return array
     */
    protected function getProfileDefaultParams($type, array $fields)
    {
    }
    public function getAdminMessage()
    {
    }
    protected function isLicenseWrong()
    {
    }
    public function execAdminAction()
    {
    }
    public function getAdminAdditionalTabs()
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
    public function getEmbeddedExtraServicesList()
    {
    }
    public static function onSaleDeliveryExtraServicesClassNamesBuildList()
    {
    }
    public function isCompatible(\Bitrix\Sale\Shipment $shipment)
    {
    }
    public function getTrackingUrlTempl()
    {
    }
    /**
     * @param Shipment $shipment
     * @param string $serviceType
     * @return array
     */
    public static function getShipmentParams(\Bitrix\Sale\Shipment $shipment, $serviceType)
    {
    }
    /**
     * @param $locationCode
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function getLocationForRequest($locationCode)
    {
    }
    /**
     * @param int $locationCode Location code.
     * @param string $lang Language identifier.
     * @return array Location components by type.
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function getLocationChainByTypes($locationCode, $lang = LANGUAGE_ID)
    {
    }
    public function prepareFieldsForSaving(array $fields)
    {
    }
}