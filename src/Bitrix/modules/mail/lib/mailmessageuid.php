<?php

namespace Bitrix\Mail;

class MailMessageUidTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    /**
     * @param array $filter
     * @param array $fields
     * @param  array $eventData - optional, for compatibility reasons, should have the following structure:
     * [ ['HEADER_MD5' => .., 'MESSAGE_ID' => .., 'MAILBOX_USER_ID' => ..], [..]]
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function updateList(array $filter, array $fields, array $eventData = [])
    {
    }
    /**
     * @param array $filter
     * @param array $eventData
     * @return \Bitrix\Main\DB\Result|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function deleteList(array $filter, array $eventData = [])
    {
    }
    /**
     * @param array $filter
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    public static function deleteListSoft(array $filter)
    {
    }
    private static function selectMailsToBeDeleted($fields, $filter, array $eventData)
    {
    }
    /**
     * Merge data. Insert-update.
     *
     * @param array $insert Insert fields.
     * @param array $update Update fields.
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    public static function mergeData(array $insert, array $update)
    {
    }
    public static function getMap()
    {
    }
}