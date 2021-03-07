<?php

namespace Bitrix\Sale\Services\Base;

class RestrictionManager
{
    protected static $classNames;
    protected static $cachedFields = array();
    const MODE_CLIENT = 1;
    const MODE_MANAGER = 2;
    const SEVERITY_NONE = 0;
    const SEVERITY_SOFT = 1;
    const SEVERITY_STRICT = 2;
    const SERVICE_TYPE_SHIPMENT = 0;
    const SERVICE_TYPE_PAYMENT = 1;
    const SERVICE_TYPE_COMPANY = 2;
    const SERVICE_TYPE_CASHBOX = 3;
    protected static function init()
    {
    }
    /**
     * @return string
     * @throws NotImplementedException
     */
    public static function getEventName()
    {
    }
    /**
     * @return array
     * @throws SystemException
     */
    public static function getClassesList()
    {
    }
    /**
     * @param $serviceId
     * @param Entity $entity
     * @param int $mode
     * @return int
     * @throws SystemException
     */
    public static function checkService($serviceId, \Bitrix\Sale\Internals\Entity $entity, $mode = self::MODE_CLIENT)
    {
    }
    /**
     * @return int
     * @throws NotImplementedException
     */
    protected static function getServiceType()
    {
    }
    /**
     * @param $serviceId
     * @return array
     */
    public static function getRestrictionsList($serviceId)
    {
    }
    /**
     * @param $id
     * @return array Sites from restrictions.
     */
    public static function getSitesByServiceId($id)
    {
    }
    /**
     * @param array $servicesIds
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     * @internal
     */
    public static function prepareData(array $servicesIds, array $fields = array())
    {
    }
    /**
     * @param int $serviceId
     * @param int $serviceType
     * @param array $fields
     * @throws ArgumentNullException
     */
    protected static function setCache($serviceId, $serviceType, array $fields = array())
    {
    }
    /**
     * @param int $serviceId
     * @param int $serviceType
     * @return array
     * @throws ArgumentNullException
     */
    protected static function getCache($serviceId, $serviceType)
    {
    }
    /**
     * @throws NotImplementedException
     * @return array
     */
    protected static function getBuildInRestrictions()
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getList(array $params)
    {
    }
    /**
     * @param $id
     * @return \Bitrix\Main\DB\Result
     */
    public static function getById($id)
    {
    }
}