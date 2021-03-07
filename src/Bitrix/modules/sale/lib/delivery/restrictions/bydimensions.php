<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByDimensions
 * Restricts delivery by order dimensions.
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByDimensions extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    /**
     * @param array $dimensionsList keys:(LENGTH, WIDTH, HEIGHT)
     * @param array $restrictionParams
     * @param int $deliveryId
     * @return bool
     * @internal
     */
    public static function check($dimensionsList, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    public static function getParamsStructure($entityId = 0)
    {
    }
}