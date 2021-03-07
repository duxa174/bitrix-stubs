<?php

namespace Bitrix\Main\UrlPreview;

class RouteTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns first record filtered by $route value
     *
     * @param string $route Route template.
     * @return array|false
     * @throws Main\ArgumentException
     */
    public static function getByRoute($route)
    {
    }
    /**
     * Adds route to route table. If route record already exists, updates it.
     *
     * @param array $data Record to be merged to the table.
     * @return AddResult
     */
    public static function merge(array $data)
    {
    }
}