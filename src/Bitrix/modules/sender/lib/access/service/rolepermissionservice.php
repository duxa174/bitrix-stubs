<?php

namespace Bitrix\Sender\Access\Service;

class RolePermissionService implements \Bitrix\Sender\Access\Service\RolePermissionServiceInterface
{
    private const DB_ERROR_KEY = "SENDER_CONFIG_PERMISSIONS_DB_ERROR";
    /**
     * @var RoleRelationServiceInterface
     */
    private $roleRelationService;
    /**
     * @param array $permissionSettings permission settings array
     *
     * @param int $dealCategoryId deal category identification number
     *
     * @throws SqlQueryException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function saveRolePermissions(array &$permissionSettings, int $dealCategoryId = -1) : void
    {
    }
    /**
     * @param string $name
     * @param int $dealCategoryId deal category identification number
     * @param int|null $roleId  role identification number
     *
     * @return int
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function saveRole(string $name, int $dealCategoryId = -1, int $roleId = null) : int
    {
    }
    /**
     * @param int $roleId role identification number
     * @throws SqlQueryException
     */
    public function deleteRole(int $roleId) : void
    {
    }
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function getRoleList(array $parameters = []) : array
    {
    }
    /**
     * @inheritDoc
     */
    public function getSavedPermissions(array $parameters = []) : array
    {
    }
    /**
     * @inheritDoc
     */
    public function getRoleListByUser(int $userId) : array
    {
    }
    /**
     * @param int $dealCategoryId
     *
     * @return array
     */
    public function getUserGroups(int $dealCategoryId) : array
    {
    }
    /**
     * returns access rights list
     * @return array
     */
    public function getAccessRights() : array
    {
    }
    private function availablePermissionsMap()
    {
    }
    private function getRoleAccessRights(int $roleId) : array
    {
    }
    private function getMemberInfo(string $code)
    {
    }
    private function getRoleMembers(int $roleId) : array
    {
    }
    private function getSettings()
    {
    }
}