<?php

namespace Bitrix\Socialnetwork\Integration\Main\UISelector;

class Handler
{
    const ENTITY_TYPE_GROUPS = 'GROUPS';
    const ENTITY_TYPE_USERS = 'USERS';
    const ENTITY_TYPE_EMAILUSERS = 'EMAILUSERS';
    const ENTITY_TYPE_CRMEMAILUSERS = 'CRMEMAILUSERS';
    const ENTITY_TYPE_SONETGROUPS = 'SONETGROUPS';
    const ENTITY_TYPE_PROJECTS = 'PROJECTS';
    public static function isExtranetUser()
    {
    }
    public static function getNameTemplate($requestFields = array())
    {
    }
    public static function OnUISelectorActionProcessAjax(\Bitrix\Main\Event $event)
    {
    }
    public static function OnUISelectorEntitiesGetList(\Bitrix\Main\Event $event)
    {
    }
    public static function OnUISelectorGetProviderByEntityType(\Bitrix\Main\Event $event)
    {
    }
}