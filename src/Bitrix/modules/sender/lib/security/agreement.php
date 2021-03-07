<?php

namespace Bitrix\Sender\Security;

/**
 * Class Agreement
 * @package Bitrix\Sender\Security
 **/
class Agreement
{
    /**
     * Checks if User have access to module.
     *
     * @param integer $userId User ID.
     * @return bool
     */
    public static function isAcceptedByUser($userId)
    {
    }
    /**
     * Request agreement accept.
     *
     * @return void
     */
    public static function requestFromCurrentUser()
    {
    }
    /**
     * Return true if user accepted agreement.
     *
     * @return bool
     */
    public static function acceptByCurrentUser()
    {
    }
    /**
     * Get agreement text.
     *
     * @param bool $asRichHtml Get as rich html.
     * @return string
     */
    public static function getText($asRichHtml = false)
    {
    }
    /**
     * Get agreement error text.
     *
     * @return string
     */
    public static function getErrorText()
    {
    }
}