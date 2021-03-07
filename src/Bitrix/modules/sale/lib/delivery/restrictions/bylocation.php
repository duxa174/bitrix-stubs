<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByLocation
 * Restricts delivery by location(s)
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByLocation extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static $easeSort = 200;
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    protected static function getD2LClass()
    {
    }
    /**
     * This function should accept only location CODE, not ID, being a part of modern API
     * @param string $locationCode
     * @param array $restrictionParams
     * @param int $deliveryId
     * @return bool
     */
    public static function check($locationCode, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    protected static function prepareParamsForSaving(array $params = array(), $deliveryId = 0)
    {
    }
    public static function getParamsStructure($deliveryId = 0)
    {
    }
    public static function save(array $fields, $restrictionId = 0)
    {
    }
    public static function delete($restrictionId, $deliveryId = 0)
    {
    }
    /**
     * @param Shipment $shipment
     * @param array $restrictionFields
     * @return array
     */
    public static function filterServicesArray(\Bitrix\Sale\Shipment $shipment, array $restrictionFields)
    {
    }
    /**
     * @param array $restrictionFields
     * @param $leftMargin
     * @param $rightMargin
     * @return array
     */
    protected static function getLocationsCompat(array $restrictionFields, $leftMargin, $rightMargin)
    {
    }
}