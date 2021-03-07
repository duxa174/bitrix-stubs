<?php

class CMailYandex
{
    public function __construct()
    {
    }
    public static function checkUser($token, $login, &$error)
    {
    }
    public static function registerUserToken($token, $login, $password, &$error)
    {
    }
    public static function userOAuthToken($token, $domain, $login, &$error)
    {
    }
    public static function passport($country, $oauthToken, $errorUrl)
    {
    }
    public static function deleteUser($token, $login, &$error)
    {
    }
    public static function getMailInfo($token, $login, &$error)
    {
    }
    // post
    public static function getUserInfo($token, $login, &$error)
    {
    }
    public static function editUser($token, $login, $data, &$error)
    {
    }
    public static function getDomainUsers($token, $per_page = 30, $page = 0, &$error)
    {
    }
    public static function addLogo($token, $domain, $file, &$error)
    {
    }
    private static function query($query, $data)
    {
    }
    private static function setError($xml, &$error)
    {
    }
    private static function setError2($xml, &$error)
    {
    }
}