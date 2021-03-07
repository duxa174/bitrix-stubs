<?php

namespace Bitrix\Main\Access\User;

class UserSubordinate
{
    public const RELATION_OTHER = 0, RELATION_HIMSELF = 1, RELATION_DEPARTMENT = 2, RELATION_SUBORDINATE = 3, RELATION_DIRECTOR = 4, RELATION_OTHER_DIRECTOR = 5;
    private $userId;
    private static $cache = [];
    private static $structure;
    public static function getDepartmentsByUserId(int $userId) : array
    {
    }
    public function __construct(int $userId)
    {
    }
    public function getSubordinate(int $userId) : int
    {
    }
    private static function getParentDepartments(int $id)
    {
    }
    private function getDepartmentsManagers($departments, bool $recursive = false) : array
    {
    }
    private static function getStructure()
    {
    }
    private static function getAllManagers() : array
    {
    }
    private static function getUserDepartments(int $userId)
    {
    }
}