<?php

namespace Bitrix\Catalog;

class SubscribeAccessTable extends \Bitrix\Main\Entity\DataManager
{
    const TOKEN_LIFE_TIME = 3600;
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for TOKEN field.
     *
     * @return array
     */
    public static function validateToken()
    {
    }
    /**
     * Method deletes the old data, depending on the life time TOKEN.
     *
     * @return void
     */
    public static function clearOldRows()
    {
    }
}