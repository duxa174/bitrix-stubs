<?php

namespace Bitrix\Sender\Integration\MessageService\Sms;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\MessageService\Sms
 */
class Service
{
    public static function canUse()
    {
    }
    /**
     * Get providers.
     *
     * @return array
     */
    public static function getProviders()
    {
    }
    /**
     * Get sender names.
     *
     * @return array
     */
    public static function getSenderNames()
    {
    }
    /**
     * Get daily limits.
     *
     * @return array
     */
    public static function getDailyLimits()
    {
    }
    /**
     * Send.
     *
     * @param string $senderId Sender ID.
     * @param string $from From number.
     * @param string $to To number.
     * @param string $text Text.
     * @param integer $authorId Author ID.
     * @return bool
     */
    public static function send($senderId, $from, $to, $text, $authorId = 1)
    {
    }
    /**
     * Get manage url.
     *
     * @return string
     */
    public static function getManageUrl()
    {
    }
    /**
     * Get limits url.
     *
     * @return string
     */
    public static function getLimitsUrl()
    {
    }
    /**
     * @param string $senderId Sender id.
     * @return array Simple list of sender From aliases
     */
    protected static function getSenderFromList($senderId)
    {
    }
    /**
     * @param bool $getFromList
     * @return array Senders information.
     */
    protected static function getSenderInfoList($getFromList = false)
    {
    }
    public static function getFormattedOutputNumber($value)
    {
    }
}