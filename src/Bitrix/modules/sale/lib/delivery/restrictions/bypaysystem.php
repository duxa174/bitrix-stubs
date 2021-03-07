<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByPaySystem
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByPaySystem extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static $easeSort = 200;
    protected static $preparedData = array();
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    public static function check($paySystemIds, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    protected static function getPaySystemsList()
    {
    }
    public static function getParamsStructure($entityId = 0)
    {
    }
    protected static function getPaySystemsByDeliveryId($deliveryId = 0)
    {
    }
    protected static function prepareParamsForSaving(array $params = array(), $deliveryId = 0)
    {
    }
    public static function save(array $fields, $restrictionId = 0)
    {
    }
    public static function prepareParamsValues(array $paramsValues, $deliveryId = 0)
    {
    }
    public static function delete($restrictionId, $deliveryId = 0)
    {
    }
    public static function prepareData(array $deliveryIds)
    {
    }
}