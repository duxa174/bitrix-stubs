<?php

/**
 * yandex errors:
 * - no_auth (токен кривой, короткий)
 * - not_permitted (токен кривой, длинный или неправильный)
 * - occupied (логин занят)
 * - no_user (нет пользователя)
 * - no_login (не передан логин)
 * - not_found (нет пользователя)
 */
class CMailDomain
{
    public function __construct()
    {
    }
    public static function isUserExists($token, $domain, $login, &$error)
    {
    }
    public static function addUser($token, $domain, $login, $password, &$error)
    {
    }
    public static function getRedirectUrl($locale, $token, $domain, $login, $errorUrl, &$error)
    {
    }
    public static function getUnreadMessagesCount($token, $domain, $login, &$error)
    {
    }
    public static function changePassword($token, $domain, $login, $password, &$error)
    {
    }
    public static function getDomainStatus($token, $domain, &$error)
    {
    }
    public static function getDomainUsers($token, $domain, &$error)
    {
    }
    public static function setDomainLogo($token, $domain, $logo, &$error)
    {
    }
    public static function deleteUser($token, $domain, $login, &$error)
    {
    }
    private static function getErrorCode($error)
    {
    }
}