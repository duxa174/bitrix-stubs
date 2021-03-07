<?php

namespace Bitrix\Sale\Cashbox\Restrictions;

/**
 * Class PaySystem
 * @package Bitrix\Sale\Cashbox\Restrictions
 */
class PaySystem extends \Bitrix\Sale\Services\Base\Restriction
{
    public static $easeSort = 200;
    protected static $preparedData = array();
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
     * @param $params
     * @param array $restrictionParams
     * @param int $serviceId
     * @return bool
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return array
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return array|null
     */
    protected static function getPaySystemsList()
    {
    }
    /**
     * @param int $entityId
     * @return array
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param int $mode - RestrictionManager::MODE_CLIENT | RestrictionManager::MODE_MANAGER
     * @return int
     */
    public static function getSeverity($mode)
    {
    }
}