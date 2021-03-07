<?php

namespace Bitrix\Sender\Security\Role;

/**
 * Class Manager
 *
 * @package Bitrix\Sender\Security\Role
 */
class Manager
{
    /** @var array $userRoles User roles. */
    protected static $userRoles = [];
    // 'USER_ID' => 'ROLE_ID'
    /**
     * Clean menu cache.
     *
     * @return void
     */
    public static function clearMenuCache()
    {
    }
    /**
     * Return true if can use role access.
     *
     * @return bool
     */
    public static function canUse()
    {
    }
    /**
     * Return true if can use role access.
     *
     * @return bool
     */
    public static function getTrialText()
    {
    }
    /**
     * Get role list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getRoleList(array $parameters = [])
    {
    }
    /**
     * Get access list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getAccessList(array $parameters = [])
    {
    }
    /**
     * Set access codes.
     *
     * @param array $list List.
     * @return AddResult
     */
    public static function setAccessCodes(array $list = [])
    {
    }
    /**
     * Get roles by user ID.
     *
     * @param int $userId User ID.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @internal
     */
    public static function getRolesByUserId($userId)
    {
    }
    /**
     * Get role permissions.
     *
     * @param int $roleId Role ID.
     * @return array
     */
    public static function getRolePermissions($roleId)
    {
    }
    /**
     * Set role permissions. Add or update role
     *
     * @param int|null $roleId Role ID.
     * @param array $roleFields Role fields.
     * @param array $permissions Permissions.
     * @return AddResult|\Bitrix\Main\Entity\UpdateResult
     * @throws ArgumentException
     */
    public static function setRolePermissions($roleId = null, array $roleFields = [], array $permissions)
    {
    }
    /**
     * Deletes role and all dependent records.
     *
     * @param int $roleId Id of the role.
     * @return void
     */
    public static function deleteRole($roleId)
    {
    }
    /**
     * Install roles.
     *
     * @return string
     */
    public static function installRolesAgent()
    {
    }
    /**
     * Install roles.
     *
     * @return void
     */
    public static function installRoles()
    {
    }
}