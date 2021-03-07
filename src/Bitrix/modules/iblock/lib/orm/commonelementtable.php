<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 *
 * @method static ElementEntity getEntity()
 */
abstract class CommonElementTable extends \Bitrix\Main\ORM\Data\DataManager
{
    public static function getEntityClass()
    {
    }
    public static function getQueryClass()
    {
    }
    public static function setDefaultScope($query)
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
}