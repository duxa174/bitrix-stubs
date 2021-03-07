<?php

namespace Bitrix\Sale\Services\Base;

/**
 * Class SiteRestriction
 * @package Bitrix\Sale\Services\Base
 */
abstract class SiteRestriction extends \Bitrix\Sale\Delivery\Restrictions\Base
{
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
     * @param $siteId
     * @param array $restrictionParams
     * @param int $deliveryId
     * @return bool
     */
    public static function check($siteId, array $restrictionParams, $deliveryId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @throws NotImplementedException
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Entity $entity
     * @return bool|mixed|null|string
     * @throws NotImplementedException
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param int $entityId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param int $mode
     * @return int
     */
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