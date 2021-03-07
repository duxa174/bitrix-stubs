<?php

namespace Bitrix\Main\UserField;

abstract class UserFieldAccess
{
    public const SETTINGS_USER_FIELD_KEY = 'userField';
    public const SETTINGS_ACCESS_CLASS_KEY = 'access';
    protected $userId;
    public function __construct(int $userId = null)
    {
    }
    public static function getInstance(string $moduleId, int $userId = null) : \Bitrix\Main\UserField\UserFieldAccess
    {
    }
    protected function getDefaultUserId() : int
    {
    }
    public function setUserId(int $userId) : \Bitrix\Main\UserField\UserFieldAccess
    {
    }
    public function getUserId() : int
    {
    }
    protected abstract function getAvailableEntityIds() : array;
    public function getRestrictedTypes() : array
    {
    }
    public function canReadWithFilter(array $filter) : bool
    {
    }
    public function prepareFilter(array $filter = []) : ?array
    {
    }
    public function canRead(int $id) : bool
    {
    }
    public function canAdd(array $field) : bool
    {
    }
    public function canUpdate(int $id) : bool
    {
    }
    public function canDelete(int $id) : bool
    {
    }
}