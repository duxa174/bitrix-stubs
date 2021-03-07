<?php

namespace Bitrix\Main\Access\Role;

abstract class RoleUtil
{
    protected $roleId;
    protected $role;
    protected static abstract function getRoleTableClass() : string;
    protected static abstract function getRoleRelationTableClass() : string;
    protected static abstract function getPermissionTableClass() : string;
    protected static abstract function getRoleDictionaryClass() : ?string;
    public static function getRoles()
    {
    }
    public static function createRole(string $title) : int
    {
    }
    public function __construct(int $roleId)
    {
    }
    public function getMembers(int $limit = 0)
    {
    }
    public function deleteRole()
    {
    }
    public function updateTitle(string $title)
    {
    }
    public function getPermissions() : array
    {
    }
    /**
     * @param array $permissions
     * 		[
     * 			permission_id => value
     * 		]
     * @throws RoleNotFoundException
     * @throws RoleSaveException
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public function updatePermissions(array $permissions)
    {
    }
    /**
     * @param array $roleRelations
     *
     * @throws RoleRelationSaveException
     */
    public function updateRoleRelations(array $roleRelations)
    {
    }
    protected function loadRole()
    {
    }
    protected function validatePermissions(array $permissions) : bool
    {
    }
}