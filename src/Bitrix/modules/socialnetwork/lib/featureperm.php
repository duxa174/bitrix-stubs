<?php

namespace Bitrix\Socialnetwork;

class FeaturePermTable extends \Bitrix\Main\Entity\DataManager
{
    const PERM_OWNER = SONET_ROLES_OWNER;
    const PERM_MODERATOR = SONET_ROLES_MODERATOR;
    const PERM_USER = SONET_ROLES_USER;
    const PERM_AUTHORIZED = SONET_ROLES_AUTHORIZED;
    const PERM_ALL = SONET_ROLES_ALL;
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}