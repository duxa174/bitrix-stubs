<?php

namespace Bitrix\MessageService;

class Message
{
    /** @var Sender\Base $sender */
    protected $sender;
    /** @var  string $type */
    protected $type;
    /** @var  int $authorId */
    protected $authorId = 0;
    /** @var  string $from */
    protected $from;
    /** @var  string $to */
    protected $to;
    /** @var  array $headers */
    protected $headers = array();
    /** @var  string $body */
    protected $body;
    /**
     * Message constructor.
     * @param Sender\Base|null $sender
     */
    public function __construct(\Bitrix\MessageService\Sender\Base $sender = null)
    {
    }
    /**
     * @param array $fields
     * @param Sender\Base|null $sender
     * @return Message
     */
    public static function createFromFields(array $fields, \Bitrix\MessageService\Sender\Base $sender = null)
    {
    }
    public static function getFieldsById($messageId)
    {
    }
    /**
     * @param string $type
     * @return Message
     * @throws ArgumentTypeException
     */
    public function setType($type)
    {
    }
    /**
     * @return string
     */
    public function getType()
    {
    }
    public function checkFields()
    {
    }
    /**
     * @return \Bitrix\Main\Entity\AddResult Created Message result.
     */
    public function send()
    {
    }
    public function sendDirectly()
    {
    }
    /**
     * @return mixed
     */
    public function getFrom()
    {
    }
    /**
     * @param mixed $from
     * @return $this
     */
    public function setFrom($from)
    {
    }
    /**
     * @return mixed
     */
    public function getBody()
    {
    }
    /**
     * @param mixed $body
     * @return $this
     */
    public function setBody($body)
    {
    }
    /**
     * @return mixed
     */
    public function getTo()
    {
    }
    /**
     * @param mixed $to
     * @return $this
     */
    public function setTo($to)
    {
    }
    /**
     * @return Sender\Base|null
     */
    public function getSender()
    {
    }
    /**
     * @param Sender\Base $sender
     * @return $this
     */
    public function setSender(\Bitrix\MessageService\Sender\Base $sender)
    {
    }
    /**
     * @param array $headers
     * @return Message
     */
    public function setHeaders(array $headers)
    {
    }
    /**
     * @return array
     */
    public function getHeaders()
    {
    }
    /**
     * @param int $authorId
     * @return Message
     */
    public function setAuthorId($authorId)
    {
    }
    /**
     * @return int
     */
    public function getAuthorId()
    {
    }
}