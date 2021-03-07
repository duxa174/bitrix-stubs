<?php

namespace Bitrix\Main\Access\Role;

abstract class RoleDictionary implements \Bitrix\Main\Access\Role\AccessibleRoleDictionary
{
    protected static $locLoaded = [];
    public static function getRoleName(string $code) : string
    {
    }
    protected static function loadLoc()
    {
    }
}