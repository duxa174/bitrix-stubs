<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ExcludeLocation
 * Exclude delivery by location(s)
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ExcludeLocation extends \Bitrix\Sale\Delivery\Restrictions\ByLocation
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
     * @inheritdoc
     */
    public static function check($locationCode, array $restrictionParams, $deliveryId = 0)
    {
    }
    public static function getParamsStructure($deliveryId = 0)
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
}