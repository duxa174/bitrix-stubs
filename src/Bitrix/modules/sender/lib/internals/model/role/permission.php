<?php

namespace Bitrix\Sender\Internals\Model\Role;

/**
 * Class PermissionTable
 *
 * @package Bitrix\Sender\Internals\Model\Role
 */
class PermissionTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Get table name.
     *
     * @return string
     * @inheritdoc
     */
    public static function getTableName()
    {
    }
    /**
     * Get map.
     *
     * @return array
     * @inheritdoc
     */
    public static function getMap()
    {
    }
    /**
     * Deletes all access codes associated with the specified role.
     *
     * @param int $roleId Id of the role.
     * @return Entity\DeleteResult
     * @throws ArgumentException
     */
    public static function deleteByRoleId($roleId)
    {
    }
}