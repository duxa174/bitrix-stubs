<?php

namespace Bitrix\Sender\Security;

/**
 * Class AccessChecker
 * @package Bitrix\Sender\Security
 */
class AccessChecker
{
    const ERR_CODE_VIEW = 'ERR_VIEW';
    const ERR_CODE_EDIT = 'ERR_EDIT';
    const ERR_CODE_NOT_FOUND = 'ERR_NOT_FOUND';
    /**
     * Get message.
     *
     * @param string $code Code.
     * @return string
     */
    public static function getMessage($code)
    {
    }
    /**
     * Get error.
     *
     * @param string $code Code.
     * @return Error
     */
    public static function getError($code = self::ERR_CODE_VIEW)
    {
    }
    /**
     * Add error.
     *
     * @param ErrorCollection $collection Error collection.
     * @param string $code Code.
     * @return void
     */
    public static function addError(\Bitrix\Main\ErrorCollection $collection, $code = self::ERR_CODE_VIEW)
    {
    }
    /**
     * Check view access.
     *
     * @param ErrorCollection $collection Error collection.
     * @param User $user User.
     * @return bool
     */
    public static function checkViewAccess(\Bitrix\Main\ErrorCollection $collection, \Bitrix\Sender\Security\User $user = null)
    {
    }
}