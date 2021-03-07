<?php

namespace Bitrix\Main\Access\User;

abstract class UserModel implements \Bitrix\Main\Access\User\AccessibleUser
{
    protected $userId, $name, $roles, $userDepartments, $isAdmin, $accessCodes;
    protected static $cache = [];
    public static function createFromId(int $userId) : \Bitrix\Main\Access\User\AccessibleUser
    {
    }
    protected function __construct()
    {
    }
    public function getUserId() : int
    {
    }
    public function setUserId(int $userId) : \Bitrix\Main\Access\User\AccessibleUser
    {
    }
    public function getName() : string
    {
    }
    public function getUserDepartments() : array
    {
    }
    public function isAdmin() : bool
    {
    }
    public function getAccessCodes() : array
    {
    }
    public function getSubordinate(int $userId) : int
    {
    }
    public abstract function getRoles() : array;
    public abstract function getPermission(string $permissionId) : ?int;
}