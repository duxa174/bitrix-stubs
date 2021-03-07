<?php

namespace Bitrix\Main\Access\Permission;

abstract class PermissionDictionary implements \Bitrix\Main\Access\Permission\AccessiblePermissionDictionary
{
    public const VALUE_NO = 0, VALUE_YES = 1;
    public const DELIMITER = '.';
    public const TYPE_TOGGLER = 'toggler', TYPE_VARIABLES = 'variables';
    public const HINT_PREFIX = 'HINT_';
    protected static $locLoaded = [];
    /**
     * @param $permissionId
     * @return string
     *
     * @ToDo type can be not only the toggler
     */
    public static function getType($permissionId) : string
    {
    }
    /**
     * @param $permissionId
     * @return array [
     * 		'id' 	=>
     * 		'type' 	=>
     * 		'title' =>
     * 		'hint' 	=>
     * ]
     */
    public static function getPermission($permissionId) : array
    {
    }
    public static function getTitle($permissionId) : string
    {
    }
    public static function getList() : array
    {
    }
    public static function getParentsPath(string $permissionId) : ?string
    {
    }
    public static function recursiveValidatePermission(array $permissions, $id)
    {
    }
    protected static function getLevel($id) : int
    {
    }
    protected static function loadLoc()
    {
    }
    protected static function getName($permissionId) : ?string
    {
    }
}