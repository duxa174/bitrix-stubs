<?php

namespace Bitrix\Landing;

/**
 * Class Role.
 * In now time Role entity exist only for sites.
 * @package Bitrix\Landing
 */
class Role extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Expected type for role.
     * @var string
     */
    protected static $expectedType = null;
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'RoleTable';
    /**
     * Gets all roles. Install demo data if need.
     * @return array
     */
    public static function fetchAll()
    {
    }
    /**
     * Install demo data.
     * @param string $type Type of roles.
     * @return void
     */
    public static function installDemo($type = null)
    {
    }
    /**
     * Set new access codes for role and refresh all rights.
     * @param int $roleId Role id.
     * @param array $codes Codes array.
     * @return void
     */
    public static function setAccessCodes($roleId, array $codes = array())
    {
    }
    /**
     * Gets rights for each site in this role.
     * @param int $roleId
     * @return array
     */
    public static function getRights($roleId)
    {
    }
    /**
     * Set rights for role.
     * @param int $roleId Role id.
     * @param array $rights Rights array ([[site_id] => [right1, right2]]
     * @param array $additionalRights Additional rights array ([Rights::ADDITIONAL_RIGHTS]).
     * @return void
     */
    public static function setRights($roleId, $rights = [], $additionalRights = null)
    {
    }
    /**
     * Sets new expected type for role.
     * @param string|null $type New expected type;
     * @return void
     */
    public static function setExpectedType($type)
    {
    }
    /**
     * Gets expected role type.
     * @return string
     */
    public static function getExpectedType()
    {
    }
    /**
     * Gets expected roles id.
     * @return array
     */
    public static function getExpectedRoleIds()
    {
    }
}