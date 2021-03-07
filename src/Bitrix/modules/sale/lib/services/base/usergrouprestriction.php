<?php

namespace Bitrix\Sale\Services\Base;

/**
 * Class UserGroupRestriction
 * Restricts entity by users groups
 * @package Bitrix\Sale\Services\Base
 */
class UserGroupRestriction extends \Bitrix\Sale\Services\Base\Restriction
{
    public static $easeSort = 200;
    /**
     * @inheritdoc
     */
    public static function getClassTitle()
    {
    }
    /**
     * @inheritdoc
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param array $groups User groups
     * @param array $restrictionParams Restriction params.
     * @param int $entityId Service Identifier.
     * @return bool
     */
    public static function check($groups, array $restrictionParams, $entityId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return Order
     * @throws NotImplementedException
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return int
     * @throws NotImplementedException
     */
    protected static function getEntityTypeId()
    {
    }
    /**
     * @param Entity $entity Delivery or
     * @return array
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @inheritdoc
     */
    protected static function prepareParamsForSaving(array $params = array(), $entityId = 0)
    {
    }
    protected static function getUserGroups()
    {
    }
    public static function getParamsStructure($entityId = 0)
    {
    }
    public static function prepareParamsValues(array $paramsValues, $entityId = 0)
    {
    }
    public static function save(array $fields, $restrictionId = 0)
    {
    }
    public static function delete($restrictionId, $entityId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @param array $restrictionFields
     * @return array
     */
    public static function filterServicesArray(\Bitrix\Sale\Internals\Entity $entity, array $restrictionFields)
    {
    }
    public static function isAvailable()
    {
    }
}