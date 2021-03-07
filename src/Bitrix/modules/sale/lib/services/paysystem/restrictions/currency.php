<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

class Currency extends \Bitrix\Sale\Services\Base\Restriction
{
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
     * @return string
     * @throws ArgumentTypeException
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
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
    public static function getParamsStructure($entityId = 0)
    {
    }
    public static function save(array $fields, $restrictionId = 0)
    {
    }
}