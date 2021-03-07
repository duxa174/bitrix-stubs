<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByMaxSize
 * Restricts delivery by basket items max size.
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByMaxSize extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    /**
     * @param array $dimensionsList
     * @param array $restrictionParams
     * @param int $deliveryId
     * @return bool
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