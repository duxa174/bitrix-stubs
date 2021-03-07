<?php

namespace Bitrix\Sale\Services\Base;

/**
 * Class TradeBindingRestriction
 * @package Bitrix\Sale\Services\Base
 */
abstract class TradeBindingRestriction extends \Bitrix\Sale\Services\Base\Restriction
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
     * @param int $entityId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getTradePlatformList()
    {
    }
    /**
     * @param Sale\Internals\Entity $entity
     * @return array|bool|mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param Sale\Internals\Entity $entity
     * @throws NotImplementedException
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param $params
     * @param array $restrictionParams
     * @param int $serviceId
     * @return bool
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function isAvailable()
    {
    }
}