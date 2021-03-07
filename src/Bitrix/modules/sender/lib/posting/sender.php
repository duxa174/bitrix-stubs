<?php

namespace Bitrix\Sender\Posting;

/**
 * Class Sender
 * @package Bitrix\Sender\Posting
 */
class Sender
{
    const RESULT_NONE = 0;
    const RESULT_SENT = 1;
    const RESULT_CONTINUE = 2;
    const RESULT_ERROR = 3;
    /** @var  Letter $letter Letter. */
    protected $letter;
    /** @var  Adapter $message Message. */
    protected $message;
    /** @var  integer|null $timeout Timeout. */
    protected $timeout;
    /** @var  integer|null $timeAtStart Time at start. */
    protected $timeAtStart;
    /** @var  integer|null $limit Limit. */
    protected $limit;
    /** @var  integer $sentCount Count of sent. */
    protected $sentCount = 0;
    /** @var  integer $checkStatusStep Step for status checking. */
    protected $checkStatusStep = 25;
    /** @var  integer $checkStatusCounter Counter for status checking. */
    protected $checkStatusCounter = 0;
    /** @var  boolean $isPrevented Is prevented. */
    protected $isPrevented = false;
    /** @var  boolean $isTrigger Is trigger. */
    protected $isTrigger = false;
    /** @var  boolean $isReiterate Is reiterate. */
    protected $isReiterate = false;
    /** @var  integer $mailingId Campaign ID. */
    protected $mailingId;
    /** @var  integer $postingId Posting ID. */
    protected $postingId;
    /** @var  integer $letterId Letter ID. */
    protected $letterId;
    /** @var  string $status Status. */
    protected $status;
    /** @var  integer $sendCount Count of send. */
    protected $sendCount = 0;
    /** @var  string $resultCode Code of result. */
    protected $resultCode = self::RESULT_NONE;
    /**
     * @var IThreadStrategy
     */
    protected $threadStrategy;
    /**
     * Sender constructor.
     *
     * @param Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Set limit.
     *
     * @param integer $limit Limit.
     *
     * @return $this
     */
    public function setLimit($limit)
    {
    }
    /**
     * Set timeout.
     *
     * @param integer $timeout Timeout.
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
    }
    /**
     * Get result code.
     *
     * @return int
     */
    public function getResultCode()
    {
    }
    /**
     * Send.
     *
     * @return void
     * @throws DB\Exception
     */
    public function send()
    {
    }
    /**
     * Load posting.
     *
     * @param integer $postingId Posting ID.
     *
     * @return void
     */
    public function load($postingId)
    {
    }
    /**
     * Start time watch.
     *
     * @return void
     */
    public function startTime()
    {
    }
    protected function initRecipients()
    {
    }
    protected function changeStatusToPart()
    {
    }
    /**
     * Update actual status.
     *
     * @param int $postingId Posting ID.
     * @param bool $isPrevented Is sending prevented.
     *
     * @return string
     */
    public static function updateActualStatus($postingId, $isPrevented = false)
    {
    }
    /**
     * Lock posting for preventing double sending
     *
     * @param integer $id ID.
     * @param $threadId default 0
     *
     * @return bool
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    public static function lock($id, $threadId = 0)
    {
    }
    protected static function getLockUniqueSalt($generate = true)
    {
    }
    /**
     * Check transport limits.
     *
     * @return bool
     */
    public function isTransportLimitsExceeded()
    {
    }
    protected function prevent()
    {
    }
    /**
     * @param $recipients
     *
     * @return bool
     * @throws \Exception
     */
    private function sendToRecipients($recipients)
    {
    }
    protected function isPrevented()
    {
    }
    protected function isStoppedOnRun()
    {
    }
    protected function setPostingDateSend()
    {
    }
    protected function sendToRecipient($recipient)
    {
    }
    /**
     * Apply recipient data to message.
     *
     * @param Adapter $message Message.
     * @param array $recipient Recipient.
     * @param bool $isTest Is test.
     *
     * @return void
     */
    public static function applyRecipientToMessage(\Bitrix\Sender\Message\Adapter $message, array $recipient, $isTest = false)
    {
    }
    protected static function prepareRecipientFields($recipient)
    {
    }
    /**
     * Check timeout.
     *
     * @return bool
     */
    public function isTimeout()
    {
    }
    /**
     * Check limits.
     *
     * @return bool
     */
    public function isLimitExceeded()
    {
    }
    /**
     * UnLock posting that was locking for preventing double sending
     *
     * @param integer $id ID.
     * @param int $threadId
     *
     * @return bool
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    public static function unlock($id, $threadId = 0)
    {
    }
    /**
     * @return IThreadStrategy
     */
    public function getThreadStrategy() : \Bitrix\Sender\Posting\ThreadStrategy\IThreadStrategy
    {
    }
    /**
     * @param IThreadStrategy $threadStrategy
     *
     * @return Sender
     */
    public function setThreadStrategy(\Bitrix\Sender\Posting\ThreadStrategy\IThreadStrategy $threadStrategy) : \Bitrix\Sender\Posting\Sender
    {
    }
}