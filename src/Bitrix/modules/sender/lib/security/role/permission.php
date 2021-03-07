<?php

namespace Bitrix\Sender\Security\Role;

class Permission
{
    const ENTITY_AD = 'AD';
    const ENTITY_RC = 'RC';
    const ENTITY_LETTER = 'LETTER';
    const ENTITY_SEGMENT = 'SEGMENT';
    const ENTITY_BLACKLIST = 'BLACKLIST';
    const ENTITY_SETTINGS = 'SETTINGS';
    const ACTION_VIEW = 'VIEW';
    const ACTION_MODIFY = 'MODIFY';
    const PERMISSION_NONE = '';
    const PERMISSION_SELF = 'A';
    const PERMISSION_DEPARTMENT = 'D';
    const PERMISSION_ANY = 'X';
    /**
     * Returns permission code according to the user's Permission.
     *
     * @param string $entityCode Code of the entity.
     * @param string $actionCode Code of the action.
     * @return string
     * @throws ArgumentException
     * @deprecated
     */
    /*
    public function getPermission($entityCode, $actionCode)
    {
    
    	$permissionMap = $this->getMap();
    	if(!isset($permissionMap[$entityCode][$actionCode]))
    		throw new ArgumentException('Unknown entity or action code');
    
    	return (isset($this->Permission[$entityCode][$actionCode]) ? $this->Permission[$entityCode][$actionCode] : self::PERMISSION_NONE);
    
    }
    */
    /**
     * Returns true if user can perform specified action on the entity.
     *
     * @param array $permissions Permissions.
     * @param string $entityCode Code of the entity.
     * @param string $actionCode Code of the action.
     * @param string $minPerm Code of minimal permission.
     * @return bool
     * @throws ArgumentException
     */
    public static function check(array $permissions, $entityCode, $actionCode, $minPerm = null)
    {
    }
    /**
     * Get permissions by user ID.
     *
     * @param int $userId User ID.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getByUserId($userId)
    {
    }
    /**
     * Returns Permission map.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns normalized permission array.
     *
     * @param array $source Some not normalized permission array.
     * @return array
     */
    public static function normalize(array $source)
    {
    }
    /**
     * Returns name of the entity by its code.
     *
     * @param string $entity Entity code.
     * @return string
     */
    public static function getEntityName($entity)
    {
    }
    /**
     * Returns name of the action by its code.
     *
     * @param string $action Action code.
     * @return string
     */
    public static function getActionName($action)
    {
    }
    /**
     * Returns name of the permission by its code.
     *
     * @param string $permission Permission code.
     * @return string
     */
    public static function getPermissionName($permission)
    {
    }
    /**
     * Returns maximum available permissions.
     *
     * @return array
     */
    protected static function getAdminPermissions()
    {
    }
}