<?php

namespace Bitrix\MessageService\Sender;

abstract class Base
{
    /**
     * @return bool
     */
    public static function isSupported()
    {
    }
    public static function className()
    {
    }
    public function isConfigurable()
    {
    }
    public function getType()
    {
    }
    public abstract function getId();
    public function getExternalId()
    {
    }
    /**
     * @return string
     */
    public abstract function getName();
    /**
     * @return string
     */
    public abstract function getShortName();
    /**
     * Check can use state of provider.
     * @return bool
     */
    public abstract function canUse();
    public abstract function getFromList();
    /**
     * @param string $from
     * @return bool
     */
    public function isCorrectFrom($from)
    {
    }
    /**
     * @param array $messageFieldsFields
     * @return Result\SendMessage Send operation result.
     */
    public abstract function sendMessage(array $messageFieldsFields);
    /**
     * Converts service status to internal status
     * @see \Bitrix\MessageService\MessageStatus
     * @param mixed $serviceStatus
     * @return null|int
     */
    public static function resolveStatus($serviceStatus)
    {
    }
}