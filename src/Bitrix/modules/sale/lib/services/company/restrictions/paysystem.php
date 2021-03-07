<?php

namespace Bitrix\Sale\Services\Company\Restrictions;

class PaySystem extends \Bitrix\Sale\Services\Base\Restriction
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
     * @param Sale\Internals\Entity $entity
     *
     * @return array
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return array
     */
    protected static function getPaySystemList()
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
     * @param int $companyId
     * @return array
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function getPaySystemsByCompanyId($companyId = 0)
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
     * @param array $paramsValues
     * @param int $entityId
     * @return array
     */
    public static function prepareParamsValues(array $paramsValues, $entityId = 0)
    {
    }
    /**
     * @param $restrictionId
     * @param int $entityId
     * @return \Bitrix\Main\Entity\DeleteResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function delete($restrictionId, $entityId = 0)
    {
    }
}