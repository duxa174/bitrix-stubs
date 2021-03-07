<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class Manager
 * Helps to manage delivery services.
 * @package Bitrix\Sale\Delivery\Services
 */
class Manager
{
    const SKIP_PROFILE_PARENT_CHECK = 0;
    const SKIP_CHILDREN_PARENT_CHECK = 1;
    protected static $handlers = null;
    protected static $restHandlers = [];
    protected static $cachedFields = array();
    /* Directories where we can found handlers */
    protected static $handlersDirectories = array();
    /** @var null|Pool  */
    protected static $objectsPool = null;
    /**
     * Returns service field, caches results during hit.
     * @param int $deliveryId
     * @return array Service fields
     * @throws SystemException
     */
    public static function getById($deliveryId)
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Main\ORM\Query\Result
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function getList(array $params = array()) : \Bitrix\Main\ORM\Query\Result
    {
    }
    /**
     * @param Shipment $shipment.
     * @param int $restrictionMode MODE_CLIENT or MODE_MANAGER from Restrictions\Manager.
     * @return Base[] delivery services objects
     */
    public static function getRestrictedObjectsList(\Bitrix\Sale\Shipment $shipment, $restrictionMode = \Bitrix\Sale\Delivery\Restrictions\Manager::MODE_CLIENT)
    {
    }
    /**
     * @param $deliveryId
     * @return bool is service exists or not
     * @throws SystemException
     */
    public static function isServiceExist($deliveryId)
    {
    }
    /**
     * Prepares and caches data during the hit
     * @param bool $calculatingOnly If we need absolutely all, or calculating items only.
     * @param array $restrictedIds If we have list of services ids, successful checked restrictions.
     * @return array Array of active delivery services fields.
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getActiveList($calculatingOnly = false, $restrictedIds = null)
    {
    }
    /**
     * @param Shipment $shipment
     * @param int $restrictionMode MODE_CLIENT or MODE_MANAGER from Restrictions\Manager.
     * @param array $skipChecks self::SKIP_CHILDREN_PARENT_CHECK || self::SKIP_PROFILE_PARENT_CHECK
     * @return array Array of active delivery services fields filtered by restrictions.
     */
    public static function getRestrictedList(\Bitrix\Sale\Shipment $shipment = null, $restrictionMode, array $skipChecks = array())
    {
    }
    /**
     * @param array $srvParams Delivery service fields from DataBase to construct service object.
     * @return Base|null Delivery service object
     * All errors it writes to system log.
     * It's better to use \Bitrix\Sale\Delivery\Services\Manager::getPooledObject for performance purposes
     */
    public static function createObject(array $srvParams)
    {
    }
    public static function getPooledObject(array $fields)
    {
    }
    /**
     * @param int $deliveryId Delivery service id
     * @return Base Delivery service object
     * @throws ArgumentNullException
     * @throws SystemException
     */
    public static function getObjectById($deliveryId)
    {
    }
    /**
     * @param string $serviceCode Delivery service code
     * @return Base Delivery service object.
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getObjectByCode($serviceCode)
    {
    }
    /**
     * Gets info about existing delivery services handlers
     * Stores this information during the hit
     * @return bool
     * @throws SystemException
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function initHandlers()
    {
    }
    /**
     * @return array Handler Classes
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    protected static function getHandlersClasses()
    {
    }
    /**
     * @return array Known delivery services handlers
     * @throws SystemException
     */
    public static function getHandlersList()
    {
    }
    /**
     * @return array|null
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function getRestHandlerList() : ?array
    {
    }
    /**
     * Calculates the price of the shipment
     * @param Shipment $shipment
     * @param int $deliveryId optional
     * @param array  $extraServices optional
     * @return \Bitrix\Sale\Delivery\CalculationResult
     * @throws ArgumentNullException
     */
    public static function calculateDeliveryPrice(\Bitrix\Sale\Shipment $shipment, $deliveryId = 0, $extraServices = array())
    {
    }
    /**
     * Returns id of delivery service group.
     * Creates if such group does not exist.
     * @param string $name Group name
     * @return int Group id
     * @throws SystemException
     * @throws \Exception
     */
    public static function getGroupId($name)
    {
    }
    /**
     * @param int $parentId Delivery service parent id
     * @return array Delivery service fields
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getByParentId($parentId)
    {
    }
    /**
     * Returns entity link name for connection with Locations
     * @return string
     */
    public static function getLocationConnectorEntityName()
    {
    }
    /**
     * Adds delivery service
     * @param array $fields
     * @return AddResult
     * @throws SystemException
     * @throws \Exception
     */
    public static function add(array $fields)
    {
    }
    /**
     * @return string
     */
    public static function generateXmlId()
    {
    }
    /**
     * Updates delivery service
     * @param int $id
     * @param array $fields
     * @return \Bitrix\Main\Entity\UpdateResult
     * @throws SystemException
     * @throws \Exception
     */
    public static function update($id, array $fields)
    {
    }
    /**
     * Deletes delivery service
     * @param int $id
     * @return \Bitrix\Main\Result
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function delete($id)
    {
    }
    /**
     * @return array
     * registerEventHandler(
     * 	'sale', 'OnGetBusinessValueConsumers', 'sale',
     * 	'\Bitrix\Sale\Delivery\Services\Manager',
     * 	'onGetBusinessValueConsumers');
     */
    public static function onGetBusinessValueConsumers()
    {
    }
    public static function onGetBusinessValueGroups()
    {
    }
    /**
     * Sets fields values to all children
     * @param int $id
     * @param array $fields
     * @return int count modified children
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function setChildrenFieldsValues($id, array $fields)
    {
    }
    /**
     * @param string $code
     * @return int Service id
     */
    public static function getIdByCode($code)
    {
    }
    /**
     * @param int $id
     * @return string Delivery service code
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getCodeById($id)
    {
    }
    /**
     *
     * @param $value
     * @param $type
     * @return int|string Id or Code of delivery service
     */
    protected static function getIdCodeCached($value, $type)
    {
    }
    /**
     * Saves relation between Id an code of delivery service
     * @param int $id
     * @param string $code
     */
    protected static function setIdCodeCached($id, $code)
    {
    }
    /**
     * Cleans cache of delivery service id-code relation
     * @param int $id
     */
    protected static function cleanIdCodeCached($id)
    {
    }
    /**
     * Returns is delivery service is already used in shipments
     * @param $deliveryId
     * @return bool
     */
    protected static function isDeliveryInShipments($deliveryId)
    {
    }
    /**
     * Returns if delivery service and it's children are used in shipments
     * @param $deliveryId
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function checkServiceUsage($deliveryId)
    {
    }
    /**
     * Deletes related entities
     * @param int $deliveryId
     * @return bool
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * todo: restrictions, extra_services - can require some actions after deletion
     */
    protected static function deleteRelatedEntities($deliveryId)
    {
    }
    /**
     * @return int Empty delivery service id
     * @throws SystemException
     */
    public static function getEmptyDeliveryServiceId()
    {
    }
    /**
     * @internal
     * @param int|int[] $deliveryId
     * @param mixed $checkParams
     * @param string $restrictionClassName
     * @return bool|int[]
     * @throws ArgumentNullException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     */
    public static function checkServiceRestriction($deliveryId, $checkParams, $restrictionClassName)
    {
    }
    /**
     * Check if given class is valid delivery service class
     * inheritance of Bitrix\Sale\Delivery\Services\Base.
     * @param string $class Checking class.
     * @return bool
     */
    public static function isDeliveryServiceClassValid($class)
    {
    }
    /*
     * Deprecated methods. Will be removed in future versions.
     */
    /**
     * @deprecated  use \Bitrix\Sale\Delivery\Services\Manager::calculateDeliveryPrice()
     */
    public static function calculate(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @deprecated will be remove in next versions
     */
    public static function getRestrictionObject($className)
    {
    }
    /**
     * @deprecated use Restrictions\Manager::checkService()
     */
    public static function checkServiceRestrictions($deliveryId, \Bitrix\Sale\Shipment $shipment, $restrictionsClassesToSkip = array())
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getRestrictedObjectsList()
     */
    public static function getServicesForShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::isServiceExist()
     */
    public static function isExistService($deliveryId)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getActiveList()
     */
    public static function getActive()
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getRestrictedList()
     */
    public static function getServicesBriefsForShipment(\Bitrix\Sale\Shipment $shipment = null, array $skipChecks = array(), $getAll = false)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::createObject()
     */
    public static function createServiceObject(array $srvParams)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getObjectById()
     */
    public static function getService($deliveryId)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getServiceByCode()
     */
    public static function getServiceByCode($serviceCode)
    {
    }
    /**
     * @deprecated use \Bitrix\Sale\Delivery\Services\Manager::getHandlersList()
     */
    public static function getHandlersClassNames()
    {
    }
    /**
     * @deprecated use Restrictions\Manager::getClassesList()
     */
    public static function getRestrictionClassNames()
    {
    }
    /**
     * @deprecated use Restrictions\Manager::getRestrictionsList()
     */
    public static function getRestrictionsByDeliveryId($deliveryId)
    {
    }
}