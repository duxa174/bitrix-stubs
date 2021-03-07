<?php

namespace Bitrix\Sale\Services\Base;

/**
 * Class RestrictionBase.
 * Base class for payment and delivery services restrictions.
 * @package Bitrix\Sale\Services
 */
abstract class Restriction
{
    /** @var int
     * 100 - lightweight - just compare with params
     * 200 - middleweight - may be use base queries
     * 300 - hardweight - use base, and/or hard calculations
     * */
    public static $easeSort = 100;
    /**
     * @return string
     * @throws NotImplementedException
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string
     * @throws NotImplementedException
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param mixed $params Params to check.
     * @param array $restrictionParams Restriction params.
     * @param int $serviceId Service identifier.
     * @return bool
     * @throws NotImplementedException
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @param array $restrictionParams
     * @param int $mode
     * @param int $serviceId
     * @return int
     * @throws NotImplementedException
     */
    public static function checkByEntity(\Bitrix\Sale\Internals\Entity $entity, array $restrictionParams, $mode, $serviceId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return mixed
     * @throws NotImplementedException
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * Returns params structure to show it to user
     * @return array
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param array $paramsValues
     * @param int $entityId
     * @return array
     */
    public static function prepareParamsValues(array $paramsValues, $entityId = 0)
    {
    }
    /**
     * @param array $fields
     * @param int $restrictionId
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult
     * @throws \Exception
     */
    public static function save(array $fields, $restrictionId = 0)
    {
    }
    /**
     * @param $restrictionId
     * @param int $entityId
     * @return \Bitrix\Main\Entity\DeleteResult
     * @throws \Exception
     */
    public static function delete($restrictionId, $entityId = 0)
    {
    }
    /**
     * @param int $mode - RestrictionManager::MODE_CLIENT | RestrictionManager::MODE_MANAGER
     * @return int
     */
    public static function getSeverity($mode)
    {
    }
    /**
     * @param array $servicesIds
     * @return bool
     */
    public static function prepareData(array $servicesIds)
    {
    }
    /**
     * @return bool
     */
    public static function isAvailable()
    {
    }
    /*
     * Children can have also this method
     * for performance purposes.
     *
     * @return int[]
     * public static function filterServicesArray(Shipment $shipment, array $restrictionFields)
     * {
     *  ...
     * }
     */
}