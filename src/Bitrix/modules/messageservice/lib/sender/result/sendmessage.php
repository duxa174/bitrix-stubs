<?php

namespace Bitrix\MessageService\Sender\Result;

class SendMessage extends \Bitrix\Main\Result
{
    protected $id;
    protected $externalId;
    protected $status;
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
    }
    /**
     * @return string|null
     */
    public function getId()
    {
    }
    /**
     * @return mixed
     */
    public function getExternalId()
    {
    }
    /**
     * @param mixed $externalId
     * @return SendMessage
     */
    public function setExternalId($externalId)
    {
    }
    /**
     * @return int Status id relative to MessageStatus constants.
     * @see \Bitrix\MessageService\MessageStatus
     */
    public function getStatus()
    {
    }
    /**
     * @param int $status Status id relative to MessageStatus constants.
     * @see \Bitrix\MessageService\MessageStatus
     * @return SendMessage
     */
    public function setStatus($status)
    {
    }
    /**
     * Helps us to set most used message status
     * @see MessageStatus::ACCEPTED
     * @return $this
     */
    public function setAccepted()
    {
    }
}