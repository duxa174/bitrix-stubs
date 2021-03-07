<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

/**
 * Class Delivery
 * @package Bitrix\Sale\Services\PaySystem\Restrictions
 */
class Delivery extends \Bitrix\Sale\Services\Base\Restriction
{
    public static $easeSort = 200;
    protected static $preparedData = array();
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
     * @param $params
     * @param array $restrictionParams
     * @param int $serviceId
     * @return bool
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return array
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return array
     */
    protected static function getDeliveryServiceList()
    {
    }
    /**
     * @param int $entityId
     * @return array
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param int $paySystemId
     * @return array|\int[]
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function getDeliveryByPaySystemsId($paySystemId = 0)
    {
    }
    /**
     * @param array $params
     * @param int $paySystemId
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function prepareParamsForSaving(array $params = array(), $paySystemId = 0)
    {
    }
    /**
     * @param array $fields
     * @param int $restrictionId
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult
     */
    public static function save(array $fields, $restrictionId = 0)
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
     * @param $restrictionId
     * @param int $entityId
     * @return \Bitrix\Main\Entity\DeleteResult
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function delete($restrictionId, $entityId = 0)
    {
    }
    /**
     * @param array $servicesIds
     * @return string
     */
    public static function prepareData(array $servicesIds)
    {
    }
}