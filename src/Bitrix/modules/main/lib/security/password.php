<?php

namespace Bitrix\Main\Security;

class Password
{
    /**
     * Compares a hash and a(n) (original) password.
     * @param string $hash Hash of the password.
     * @param string $password User supplied password.
     * @param bool $original
     * @return bool
     */
    public static function equals($hash, $password, $original = true) : bool
    {
    }
    /**
     * Determines if a password needs to be rehashed.
     * @param string $hash Hash of the password.
     * @return bool
     */
    public static function needRehash($hash) : bool
    {
    }
    /**
     * Hashes a password using SHA-512 by default.
     * @param string $password
     * @param null|string $salt If null, will be generated
     * @return string
     */
    public static function hash($password, $salt = null) : string
    {
    }
}