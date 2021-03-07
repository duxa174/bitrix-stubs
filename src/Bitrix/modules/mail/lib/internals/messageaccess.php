<?php

namespace Bitrix\Mail\Internals;

class MessageAccessTable extends \Bitrix\Main\Entity\DataManager
{
    const ENTITY_TYPE_NO_BIND = 'NO_BIND';
    const ENTITY_TYPE_TASKS_TASK = 'TASKS_TASK';
    const ENTITY_TYPE_CRM_ACTIVITY = 'CRM_ACTIVITY';
    const ENTITY_TYPE_BLOG_POST = 'BLOG_POST';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}