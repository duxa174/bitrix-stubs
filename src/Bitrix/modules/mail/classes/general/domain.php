<?php

/**
 * yandex errors:
 * - no_auth (����� ������, ��������)
 * - not_permitted (����� ������, ������� ��� ������������)
 * - occupied (����� �����)
 * - no_user (��� ������������)
 * - no_login (�� ������� �����)
 * - not_found (��� ������������)
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