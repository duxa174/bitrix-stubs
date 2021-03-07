<?php

namespace Bitrix\Main\Access\Role;

interface AccessibleRoleDictionary
{
    public static function getRoleName(string $code) : string;
}