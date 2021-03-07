<?php

namespace Bitrix\Sender\Access\Role;

class RoleUtil extends \Bitrix\Main\Access\Role\RoleUtil
{
    protected static function getRoleTableClass() : string
    {
    }
    protected static function getRoleRelationTableClass() : string
    {
    }
    protected static function getPermissionTableClass() : string
    {
    }
    protected static function getRoleDictionaryClass() : ?string
    {
    }
    /**
     * pre installed roles list
     * @return array
     */
    public static function preparedRoleMap()
    {
    }
    /**
     * building sql insert list
     * @param array $permissions permission list
     * @param int $roleId role identification number
     *
     * @return array
     */
    public static function buildInsertPermissionQuery(array $permissions, int $roleId)
    {
    }
    /**
     * insert data to permission table
     * @param array $valuesData
     *
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function insertPermissions(array $valuesData)
    {
    }
    /**
     * @param string $key
     *
     * @return string
     */
    public static function getLocalizedName(string $key)
    {
    }
}