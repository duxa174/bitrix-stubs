<?php

abstract class CPushService
{
    protected $allowEmptyMessage = \true;
    const DEFAULT_EXPIRY = 14400;
    protected function getBatchWithModifier($appMessages = array(), $modifier = "")
    {
    }
    protected static function getGroupedByServiceMode($arMessages)
    {
    }
    protected static function getGroupedByAppID($arMessages)
    {
    }
    /**
     * @param string $token
     * @return CPushMessage
     */
    abstract function getMessageInstance($token);
    static abstract function shouldBeSent($messageRowData);
    abstract function getBatch($messages);
}