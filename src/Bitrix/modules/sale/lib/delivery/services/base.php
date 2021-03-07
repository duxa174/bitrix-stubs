<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class Base (abstract)
 * Base class for delivery services
 * @package Bitrix\Sale\Delivery
 */
abstract class Base
{
    protected $id = 0;
    protected $name = "";
    protected $code = "";
    protected $vatId = 0;
    protected $sort = 100;
    protected $logotip = 0;
    protected $parentId = 0;
    protected $currency = "";
    protected $active = false;
    protected $description = "";
    protected $config = array();
    protected $restricted = false;
    protected $trackingClass = "";
    /** @var Requests\HandlerBase  */
    protected $deliveryRequestHandler = null;
    protected $extraServices = array();
    protected $trackingParams = array();
    protected $allowEditShipment = array();
    protected static $isProfile = false;
    protected static $canHasProfiles = false;
    protected static $isCalculatePriceImmediately = false;
    protected static $whetherAdminExtraServicesShow = false;
    const EVENT_ON_CALCULATE = "onSaleDeliveryServiceCalculate";
    /** @var bool  */
    protected $isClone = false;
    /**
     * Constructor
     * @param array $initParams Delivery service params
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct(array $initParams)
    {
    }
    /**
     * Calculates delivery price
     * @param \Bitrix\Sale\Shipment $shipment.
     * @param array $extraServices.
     * @return \Bitrix\Sale\Delivery\CalculationResult
     */
    public function calculate(\Bitrix\Sale\Shipment $shipment = null, $extraServices = array())
    {
    }
    /**
     * @return Delivery\ExtraServices\Manager
     */
    public function getExtraServices()
    {
    }
    /**
     * @return string The currency of delivery service.
     */
    public function getCurrency()
    {
    }
    /**
     * @param Shipment $shipment
     * @return float|int
     */
    protected static function calculateShipmentPrice(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * Returns class name
     * @return string
     */
    public static function getClassTitle()
    {
    }
    /**
     * Returns class description
     * @return string
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param \Bitrix\Sale\Shipment $shipment.
     * @return Delivery\CalculationResult
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $fields
     * @return array
     * @throws SystemException
     */
    public function prepareFieldsForSaving(array $fields)
    {
    }
    /**
     * Returns service configuration (only structure without values)
     * @return array
     * @throws \Exception
     */
    protected function getConfigStructure()
    {
    }
    /**
     * @param array $confStructure The structure of configuration
     * @param array $confValues The configuration's values
     * @return array glued config with values
     */
    protected function glueValuesToConfig(array $confStructure, $confValues = array())
    {
    }
    /**
     * @return array
     * @throws SystemException
     */
    public function getConfig()
    {
    }
    /**
     * @return array
     */
    public function getConfigValues()
    {
    }
    /**
     * @return array Fields witch user will see on delivery admin page
     */
    public static function getAdminFieldsList()
    {
    }
    /**
     * @return bool Show or not restrictions on admin page
     * For example lib/delivery/services/group.php: we must hide it on public page always, and nobody can cancel this.
     */
    public static function whetherAdminRestrictionsShow()
    {
    }
    /**
     * @return bool Can this services has children.
     */
    public static function canHasChildren()
    {
    }
    /**
     * @return bool Can this services has profiles.
     */
    public static function canHasProfiles()
    {
    }
    /**
     * @return array profiles handlers class names
     */
    public static function getChildrenClassNames()
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getDescription()
    {
    }
    /**
     * @return int
     */
    public function getParentId()
    {
    }
    /**
     * @return mixed
     */
    public function getSort()
    {
    }
    /**
     * @return string
     */
    public function getNameWithParent()
    {
    }
    /**
     * @return int
     */
    public function getLogotip()
    {
    }
    /**
     * @return string
     */
    public function getLogotipPath()
    {
    }
    /**
     * @return Base|null
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getParentService()
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    public function prepareFieldsForUsing(array $fields)
    {
    }
    /**
     * @return array
     */
    public function getEmbeddedExtraServicesList()
    {
    }
    /**
     * @return bool If admin could edit extra services
     */
    public static function whetherAdminExtraServicesShow()
    {
    }
    /**
     * @param array $fields
     * @return \Bitrix\Main\Result
     */
    public static function onBeforeAdd(array &$fields = array()) : \Bitrix\Main\Result
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
    /**
     * @param int $serviceId
     * @param array $fields
     * @return bool
     */
    public static function onAfterUpdate($serviceId, array $fields = array())
    {
    }
    /**
     * @param int $serviceId
     * @return bool
     */
    public static function onAfterDelete($serviceId)
    {
    }
    /**
     * @param Shipment $shipment
     * @return bool
     */
    public function isCompatible(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @return array Profiles list
     */
    public function getProfilesList()
    {
    }
    /**
     * @return bool
     */
    public static function isProfile()
    {
    }
    /**
     * @return string Class name inherited from \Bitrix\Sale\Delivery\Tracking\Base
     */
    public function getTrackingClass()
    {
    }
    /**
     * @param string $class Class name inherited from \Bitrix\Sale\Delivery\Tracking\Base
     */
    public function setTrackingClass($class)
    {
    }
    /**
     * @return array
     */
    public function getTrackingParams()
    {
    }
    /**
     * @return bool
     */
    public function isTrackingInherited()
    {
    }
    /**
     * @return bool
     */
    public function isCalculatePriceImmediately()
    {
    }
    /**
     * @return bool
     */
    public function isRestricted()
    {
    }
    /**
     * @return array
     */
    public static function onGetBusinessValueConsumers()
    {
    }
    /**
     * @return array
     */
    public static function onGetBusinessValueGroups()
    {
    }
    /**
     * @return bool
     */
    public static function isInstalled()
    {
    }
    public static function install()
    {
    }
    public static function unInstall()
    {
    }
    /**
     * @return bool
     */
    public function isAllowEditShipment()
    {
    }
    /**
     * Show message on service edit page.
     * @return array
     * array("MESSAGE"=>"", "TYPE"=>("ERROR"|"OK"|"PROGRESS"), "DETAILS"=>"", "HTML"=>true)
     * @see \CAdminMessage::CAdminMessage
     */
    public function getAdminMessage()
    {
    }
    /**
     * Execute some code on service edit page if need.
     * @return Result
     */
    public function execAdminAction()
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     */
    public function getAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @param array $requestData
     * @return Shipment|null
     */
    public function processAdditionalInfoShipmentEdit(\Bitrix\Sale\Shipment $shipment, array $requestData)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     */
    public function getAdditionalInfoShipmentView(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     */
    public function getAdditionalInfoShipmentPublic(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return EmptyDeliveryService
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * Returns names of supported delivery services
     * @return array
     */
    public static function getSupportedServicesList()
    {
    }
    /**
     * @return array Additional tabs to show on edit admin page.
     */
    public function getAdminAdditionalTabs()
    {
    }
    /**
     * @return int
     */
    public function getVatId()
    {
    }
    /**
     * @param int $vatId
     */
    public function setVatId($vatId)
    {
    }
    /**
     * @return Requests\HandlerBase
     */
    public function getDeliveryRequestHandler()
    {
    }
    public function createProfileObject($fields)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    public static function isHandlerCompatible()
    {
    }
}