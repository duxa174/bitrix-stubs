<?php

namespace Bitrix\Sale\Delivery\Restrictions;

class Manager extends \Bitrix\Sale\Services\Base\RestrictionManager
{
    protected static $classNames = null;
    /**
     * @return int
     */
    protected static function getServiceType()
    {
    }
    /**
     * @return array
     */
    protected static function getBuildInRestrictions()
    {
    }
    /**
     * @return string
     */
    public static function getEventName()
    {
    }
    /**
     * @param int $deliveryId
     * @param string $className
     */
    public static function deleteByDeliveryIdClassName($deliveryId, $className)
    {
    }
    /**
     * Returns services wich have restrictions, but successfully pass checks.
     * @param \Bitrix\Sale\Shipment|null $shipment
     * @param int $restrictionMode RestrictionManager::MODE_CLIENT | RestrictionManager::MODE_MANAGER
     * @return int[]
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getRestrictedIds(\Bitrix\Sale\Shipment $shipment = null, $restrictionMode)
    {
    }
    protected function isClassSupportGroupFiltering($className)
    {
    }
    protected static function isClassValid($className)
    {
    }
}