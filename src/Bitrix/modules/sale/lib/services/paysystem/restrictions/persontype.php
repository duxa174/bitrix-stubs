<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

class PersonType extends \Bitrix\Sale\Services\Base\Restriction
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
     * @return int
     */
    public static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return mixed
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return mixed
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param $entityId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param $mode
     * @return int
     */
    public static function getSeverity($mode)
    {
    }
}