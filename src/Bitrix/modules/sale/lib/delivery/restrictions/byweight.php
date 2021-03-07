<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByWeight
 * Restricts delivery by weight
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByWeight extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    public static function check($weight, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    public static function getParamsStructure($entityId = 0)
    {
    }
}