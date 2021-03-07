<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class BySite
 * Restricts delivery by site
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class BySite extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    public static function check($siteId, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    public static function getParamsStructure($entityId = 0)
    {
    }
    public static function getSeverity($mode)
    {
    }
    /**
     * @return bool
     */
    public static function isAvailable()
    {
    }
}