<?php

namespace Bitrix\Main\Sms;

class Message
{
    protected $sender;
    protected $receiver;
    protected $text;
    public function __construct()
    {
    }
    public static function createFromTemplate(\Bitrix\Main\Sms\Template $template, array $fields)
    {
    }
    protected static function compile($string, array $fields)
    {
    }
    public function getSender()
    {
    }
    public function getReceiver()
    {
    }
    public function getText()
    {
    }
    /**
     * @param string $sender
     * @return $this
     */
    public function setSender($sender)
    {
    }
    /**
     * @param string $receiver
     * @return $this
     */
    public function setReceiver($receiver)
    {
    }
    /**
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
    }
}