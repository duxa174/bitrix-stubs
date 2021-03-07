<?php

namespace Bitrix\Socialnetwork;

class UserRelationsTable extends \Bitrix\Main\Entity\DataManager
{
    const RELATION_FRIEND = SONET_RELATIONS_FRIEND;
    const RELATION_REQUEST = SONET_RELATIONS_REQUEST;
    const RELATION_BAN = SONET_RELATIONS_BAN;
    const INITIATED_BY_FIRST = 'F';
    const INITIATED_BY_SECOND = 'S';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function getUserFilter($operation, $field, $filter)
    {
    }
}