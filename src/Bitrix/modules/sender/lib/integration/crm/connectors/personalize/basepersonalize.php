<?php

namespace Bitrix\Sender\Integration\Crm\Connectors\Personalize;

abstract class BasePersonalize
{
    private const COMMA = ',';
    public static function getMap()
    {
    }
    public static function getEntityFields($entityType)
    {
    }
    protected static function getAssignedByFields()
    {
    }
    /**
     * Get filter user fields.
     *
     * @param integer $entityTypeId Entity type ID.
     *
     * @return array
     */
    public static function getFilterUserFields($entityTypeId)
    {
    }
    /**
     * @param string $entityType
     * @param array $entityIds
     * @param array|string[] $usedFields
     * @param string $sortBy
     * @param string $sortOrder
     *
     * @return array
     * @throws Bitrix\Main\ArgumentException
     * @throws Bitrix\Main\ObjectPropertyException
     * @throws Bitrix\Main\SystemException
     */
    public static function getData(string $entityType, array $entityIds, array $usedFields = ['*'], string $sortBy = 'id', string $sortOrder = 'asc')
    {
    }
    /**
     * @param $entityType
     * @param $objDocument
     */
    private static function addAddressFieldsValue($entityType, $usedFields, &$objDocument)
    {
    }
    private static function buildAddress($entityType, $address)
    {
    }
    /**
     * @param $usedFields
     * @param $entityType
     * @param $objDocument
     */
    private static function addMultiFieldsValue($usedFields, $entityType, &$objDocument)
    {
    }
    /**
     * @param $className
     * @param $objDocument
     */
    private static function addUserFieldsValue($className, &$objDocument)
    {
    }
    private static function getBool($value)
    {
    }
    /**
     * @param $assignedByID
     * @param $objDocument
     */
    private static function addAssignedByFieldsValue($assignedByID, &$objDocument)
    {
    }
    /**
     * @param $usedField
     * @param $entityType
     * @param $objDocument
     */
    private static function checkUsedField($usedField, $entityType, &$objDocument)
    {
    }
    /**
     * @param $typeId
     * @param $ids
     *
     * @return string[]
     * @throws Bitrix\Main\ArgumentException
     * @throws Bitrix\Main\ObjectPropertyException
     * @throws Bitrix\Main\SystemException
     */
    protected static function getCommunicationFieldsValues($typeId, $ids)
    {
    }
}