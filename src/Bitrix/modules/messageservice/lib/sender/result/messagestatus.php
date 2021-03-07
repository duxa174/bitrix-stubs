<?php

namespace Bitrix\MessageService\Sender\Result;

class MessageStatus extends \Bitrix\Main\Result
{
    protected $id;
    protected $externalId;
    protected $statusCode;
    protected $statusText;
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
     * @param mixed $externalId
     * @return $this
     */
    public function setExternalId($externalId)
    {
    }
    /**
     * @return mixed
     */
    public function getExternalId()
    {
    }
    /**
     * @param int|string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
    }
    /**
     * @return int|string
     */
    public function getStatusCode()
    {
    }
    /**
     * @param string $statusText
     * @return $this
     */
    public function setStatusText($statusText)
    {
    }
    /**
     * @return string
     */
    public function getStatusText()
    {
    }
}