<?php

namespace Bitrix\Im;

class Alias
{
    const ENTITY_TYPE_USER = 'USER';
    const ENTITY_TYPE_CHAT = 'CHAT';
    const ENTITY_TYPE_OPEN_LINE = 'LINES';
    const ENTITY_TYPE_LIVECHAT = 'LIVECHAT';
    const ENTITY_TYPE_VIDEOCONF = 'VIDEOCONF';
    const ENTITY_TYPE_OTHER = 'OTHER';
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/alias/';
    const FILTER_BY_ALIAS = 'alias';
    const FILTER_BY_ID = 'id';
    public static function add(array $fields)
    {
    }
    public static function addUnique(array $fields)
    {
    }
    public static function update($id, $fields)
    {
    }
    public static function delete($id, $filter = self::FILTER_BY_ID)
    {
    }
    public static function get($alias)
    {
    }
    public static function getByEntity($entityType, $entityId)
    {
    }
    public static function prepareAlias($alias)
    {
    }
    public static function getPublicLink($type, $alias)
    {
    }
    public static function generateUnique()
    {
    }
}