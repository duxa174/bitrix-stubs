<?php

namespace Bitrix\Sale\Services\Company\Restrictions;

/**
 * Class Location
 * @package Bitrix\Sale\Services\Company\Restrictions
 */
class Location extends \Bitrix\Sale\Services\Base\Restriction
{
    public static $easeSort = 200;
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
     *
     * @return null|string
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param array $params
     * @param int $companyId
     * @return array
     */
    protected static function prepareParamsForSaving(array $params = array(), $companyId = 0)
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
     * @param array $fields
     * @param int $restrictionId
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult
     */
    public static function save(array $fields, $restrictionId = 0)
    {
    }
    /**
     * @param $restrictionId
     * @param int $entityId
     * @return \Bitrix\Main\Entity\DeleteResult
     */
    public static function delete($restrictionId, $entityId = 0)
    {
    }
}