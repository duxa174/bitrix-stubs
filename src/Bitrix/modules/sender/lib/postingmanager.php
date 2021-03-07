<?php

namespace Bitrix\Sender;

/**
 * Class PostingManager
 * @package Bitrix\Sender
 */
class PostingManager
{
    const SEND_RESULT_ERROR = false;
    const SEND_RESULT_SENT = true;
    const SEND_RESULT_CONTINUE = 'CONTINUE';
    public static $threadId;
    /** @var int $checkStatusStep */
    protected static $checkStatusStep = 20;
    /** @var int $emailSentPerIteration */
    protected static $emailSentPerIteration = 0;
    /**
     * Handler of read event.
     *
     * @param array $data Data.
     *
     * @return array
     */
    public static function onMailEventMailRead(array $data)
    {
    }
    /**
     * Do read actions.
     *
     * @param integer $recipientId Recipient ID.
     *
     * @return void
     */
    public static function read($recipientId)
    {
    }
    /**
     * Handler of click event.
     *
     * @param array $data Data.
     *
     * @return array
     */
    public static function onMailEventMailClick(array $data)
    {
    }
    /**
     * Do click actions.
     *
     * @param integer $recipientId Recipient ID.
     * @param string $url Url.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function click($recipientId, $url)
    {
    }
    /**
     * Get chain list for resending.
     *
     * @param integer $mailingId Mailing ID.
     *
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getChainReSend($mailingId)
    {
    }
    /**
     * Send letter by message from posting to address.
     *
     * @param integer $mailingChainId Chain ID.
     * @param string $address Address.
     *
     * @return bool
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function sendToAddress($mailingChainId, $address)
    {
    }
    /**
     * Send posting.
     *
     * @param integer $id Posting ID.
     * @param int $timeout Timeout.
     * @param int $maxMailCount Max mail count.
     *
     * @param bool|int $threadId
     *
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\DB\Exception
     */
    public static function send($id, $timeout = 0, $maxMailCount = 0, $threadId = false)
    {
    }
    /**
     * Lock posting for preventing double sending.
     *
     * @param integer $id ID.
     * @param $threadId
     *
     * @return bool
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     * @deprecated
     * @use \Bitrix\Sender\Posting\Sender::lock
     */
    public static function lockPosting($id, $threadId)
    {
    }
    /**
     * UnLock posting that was locking for preventing double sending.
     *
     * @param integer $id ID.
     * @param $threadId
     *
     * @return bool
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     * @deprecated
     * @use \Bitrix\Sender\Posting\Sender::unlock
     */
    public static function unlockPosting($id, $threadId)
    {
    }
}