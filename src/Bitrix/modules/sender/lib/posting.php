<?php

namespace Bitrix\Sender;

class PostingTable extends \Bitrix\Main\Entity\DataManager
{
    const STATUS_NEW = 'N';
    const STATUS_PART = 'P';
    const STATUS_SENT = 'S';
    const STATUS_SENT_WITH_ERRORS = 'E';
    const STATUS_ABORT = 'A';
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * @param Entity\Event $event
     * @return Entity\EventResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param $ar
     * @param bool $checkDuplicate
     */
    public static function addRecipient($ar, $checkDuplicate = false)
    {
    }
    /**
     * @param $postingId
     * @param bool $checkDuplicate
     * @param bool $prepareFields
     *
     * @return bool
     */
    public static function initGroupRecipients($postingId, $checkDuplicate = true, $prepareFields = true)
    {
    }
    /**
     * @param $id
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getRecipientCountByStatus($id)
    {
    }
    /**
     * @param $id
     * @param string $status
     * @return int
     */
    public static function getRecipientCount($id, $status = '')
    {
    }
    /**
     * Return send status of posting in percents by posting id.
     *
     * @param $id
     * @return int
     */
    public static function getSendPercent($id)
    {
    }
    /**
     * @return array
     */
    public static function getRecipientStatusToPostingFieldMap()
    {
    }
}
class PostingReadTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Handler of after add event
     *
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}
class PostingClickTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Handler of after add event
     *
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}
class PostingUnsubTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Handler of after add event
     *
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}
class PostingRecipientTable extends \Bitrix\Main\Entity\DataManager
{
    const SEND_RESULT_NONE = 'Y';
    const SEND_RESULT_SUCCESS = 'N';
    const SEND_RESULT_ERROR = 'E';
    const SEND_RESULT_WAIT = 'W';
    const SEND_RESULT_DENY = 'D';
    protected static $personalizeList = null;
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    public static function setPersonalizeList(array $personalizeList = null)
    {
    }
    /**
     * @return array
     */
    public static function getPersonalizeList()
    {
    }
    /**
     * @return array
     */
    public static function getStatusList()
    {
    }
    public static function hasUnprocessed($postingId, $threadId = null)
    {
    }
}