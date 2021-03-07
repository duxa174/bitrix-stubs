<?php

namespace Bitrix\Sender\Recipient;

/**
 * Class Agent
 * @package Bitrix\Sender\Recipient
 */
class Agent extends \Bitrix\Sender\Internals\ClassConstant
{
    const UNDEFINED = 0;
    const GMAIL = 1;
    const IPHONE = 2;
    const IPAD = 3;
    const ANDROID = 4;
    const OUTLOOK = 5;
    const THUNDERBIRD = 6;
    const YANDEX = 7;
    /**
     * Detect agent by user agent string.
     *
     * @param string|null $string String.
     * @return integer|null
     */
    public static function detect($string = null)
    {
    }
    /**
     * Get caption.
     *
     * @param integer $id ID.
     * @return integer|null
     */
    public static function getName($id)
    {
    }
    /**
     * Get rules.
     *
     * @return array
     */
    protected static function getRules()
    {
    }
}