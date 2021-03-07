<?php

namespace Bitrix\Mail;

class BlacklistTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    /**
     * @return \Bitrix\Main\ORM\Objectify\EntityObject|string
     */
    public static function getObjectClass()
    {
    }
    public static function getMap()
    {
    }
    public static function replace($siteId, $mailboxId, array $list)
    {
    }
    /**
     * @param array $list
     * @param array $mailbox
     * @return int
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function addMailsBatch(array $list, $userId = null)
    {
    }
    /**
     * @param $userId
     * @param bool $includeAddressesForAllUsers
     * @return \Bitrix\Main\ORM\Query\Query
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getUserAddressesListQuery($userId, $includeAddressesForAllUsers = true)
    {
    }
    public static function deleteList($filter)
    {
    }
}