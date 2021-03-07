<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByProductCategory
 * Restricts delivery by product category
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByProductCategory extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    public static $easeSort = 400;
    public static function getClassTitle()
    {
    }
    public static function getClassDescription()
    {
    }
    public static function check($categoriesList, array $restrictionParams, $deliveryId = 0)
    {
    }
    protected static function getCategoriesPath($categoryId)
    {
    }
    public static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    protected static function getGroupsIds(array $productIds)
    {
    }
    public static function getParamsStructure($deliveryId = 0)
    {
    }
}