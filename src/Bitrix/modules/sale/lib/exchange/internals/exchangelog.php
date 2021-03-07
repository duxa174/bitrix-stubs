<?php

namespace Bitrix\Sale\Exchange\Internals;

class ExchangeLogTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * Clears all logging data
     */
    public static function deleteAll()
    {
    }
    /**
     * Clears old logging data
     */
    public static function deleteOldRecords($direction, $provider, $interval)
    {
    }
}