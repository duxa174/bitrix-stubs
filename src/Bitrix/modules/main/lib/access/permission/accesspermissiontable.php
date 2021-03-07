<?php

namespace Bitrix\Main\Access\Permission;

abstract class AccessPermissionTable extends \Bitrix\Main\Access\Entity\DataManager
{
    public static function getMap()
    {
    }
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
    public static function addMulti($rows, $ignoreEvents = false)
    {
    }
    public static function updateMulti($primaries, $data, $ignoreEvents = false)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    protected static function updateChildPermission($primary, array $data)
    {
    }
    protected static function loadUpdateRow($primary, array $data)
    {
    }
    protected static function validateRow(array $data) : bool
    {
    }
    protected static function checkDataFields(array $data)
    {
    }
}