<?php

namespace Bitrix\Main\UserField\Access;

interface UserAccessibleInterface extends \Bitrix\Main\Access\User\AccessibleUser
{
    public function getPermission(string $permissionId, int $groupId = 0) : ?int;
}