<?php

namespace Bitrix\Main\UserField\Access\Permission;

class UserFieldPermissionTable extends \Bitrix\Main\Access\Permission\AccessPermissionTable
{
    private const PERMISSION_ALLOWED = 1;
    public static function getTableName()
    {
    }
    public static function getObjectClass()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param $primary
     * @param array $data
     */
    protected static function updateChildPermission($primary, array $data)
    {
    }
    /**
     * @param array $data
     * @return bool
     */
    public static function validateRow(array $data) : bool
    {
    }
    /**
     * @param int $entityTypeID
     * @return array
     */
    public static function getUserFieldsAccessCodes(int $entityTypeID) : array
    {
    }
    /**
     * @param array|bool $accessCodes
     * @param string $fieldName
     * @param int $entityTypeId
     * @param string $permissionId
     */
    public static function saveEntityConfiguration($accessCodes, string $fieldName, int $entityTypeId, string $permissionId) : void
    {
    }
    /**
     * @param int $userFieldId
     * @param int $entityTypeId
     */
    private static function removeEntityConfiguration(int $userFieldId, int $entityTypeId) : void
    {
    }
    /**
     * @param string $fieldName
     * @return array|null
     */
    private static function getUserFieldIdByName(string $fieldName) : ?array
    {
    }
}