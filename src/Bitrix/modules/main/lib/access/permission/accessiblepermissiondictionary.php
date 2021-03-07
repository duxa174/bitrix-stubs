<?php

namespace Bitrix\Main\Access\Permission;

interface AccessiblePermissionDictionary
{
    public static function getType($permissionId) : string;
    public static function getTitle($permissionId) : string;
    public static function getList() : array;
    public static function getParentsPath(string $permissionId) : ?string;
}