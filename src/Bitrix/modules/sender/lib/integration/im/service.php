<?php

namespace Bitrix\Sender\Integration\Im;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\Im
 */
class Service
{
    /**
     * Can use.
     *
     * @return bool|null
     */
    public static function canUse()
    {
    }
    /**
     * Get excluded channel codes.
     *
     * @return array
     */
    public static function getExcludedChannelCodes()
    {
    }
    /**
     * Send.
     *
     * @param string $to To number. Like: livechat|12323|213123, without imol|.
     * @param string $text Text.
     * @return bool
     */
    public static function send($to, $text)
    {
    }
}