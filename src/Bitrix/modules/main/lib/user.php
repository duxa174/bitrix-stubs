<?php

namespace Bitrix\Main;

class UserTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getUfId()
    {
    }
    public static function getMap()
    {
    }
    public static function getSecondsForLimitOnline()
    {
    }
    public static function getActiveUsersCount()
    {
    }
    public static function getUserGroupIds($userId)
    {
    }
    public static function getExternalUserTypes()
    {
    }
    private static function getUserSelectorContentFields()
    {
    }
    public static function indexRecord($id)
    {
    }
    public static function indexRecordSelector($id, array $record = [])
    {
    }
    public static function deleteIndexRecord($id)
    {
    }
    private static function generateSearchUserContent(array $fields)
    {
    }
    private static function generateSearchAdminContent(array $fields)
    {
    }
    private static function generateSearchSelectorContent(array $userFields)
    {
    }
    public static function add(array $data)
    {
    }
    public static function update($primary, array $data)
    {
    }
    public static function delete($primary)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function postInitialize(\Bitrix\Main\ORM\Entity $entity)
    {
    }
}