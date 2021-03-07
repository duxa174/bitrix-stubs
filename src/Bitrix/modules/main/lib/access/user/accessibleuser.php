<?php

namespace Bitrix\Main\Access\User;

interface AccessibleUser
{
    public static function createFromId(int $userId) : \Bitrix\Main\Access\User\AccessibleUser;
    public function getUserId() : int;
    public function getName() : string;
    public function getRoles() : array;
    public function getUserDepartments() : array;
    public function isAdmin() : bool;
    public function getAccessCodes() : array;
    public function getPermission(string $permissionId) : ?int;
    public function getSubordinate(int $userId) : int;
    public function setUserId(int $userId) : \Bitrix\Main\Access\User\AccessibleUser;
}