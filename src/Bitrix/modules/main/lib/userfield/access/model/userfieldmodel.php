<?php

namespace Bitrix\Main\UserField\Access\Model;

class UserFieldModel implements \Bitrix\Main\Access\AccessibleItem
{
    private $id = 0;
    public static function createNew() : self
    {
    }
    public static function createFromId(int $userFieldId) : \Bitrix\Main\Access\AccessibleItem
    {
    }
    private function __construct()
    {
    }
    public function getId() : int
    {
    }
    public function setId(int $id) : self
    {
    }
    /**
     * @param UserAccessibleInterface $user
     * @param $permissionId
     * @return int
     */
    public function getPermission(\Bitrix\Main\UserField\Access\UserAccessibleInterface $user, $permissionId) : int
    {
    }
    /**
     * @param UserAccessibleInterface $user
     * @param int $permissionId
     * @return array
     */
    public function getPermissions(\Bitrix\Main\UserField\Access\UserAccessibleInterface $user, int $permissionId) : array
    {
    }
    /**
     * @return array
     */
    public function loadPermissions() : array
    {
    }
}