<?php

namespace Bitrix\Main\UserField\Access\Model;

class UserModel extends \Bitrix\Main\Access\User\UserModel implements \Bitrix\Main\UserField\Access\UserAccessibleInterface
{
    private $permissions;
    public function getRoles() : array
    {
    }
    public function getPermission(string $permissionId, int $userFieldId = 0) : ?int
    {
    }
    private function getPermissions(int $userFieldId = 0) : array
    {
    }
}