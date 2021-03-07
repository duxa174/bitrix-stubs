<?php

class CMailRegru
{
    public function __construct()
    {
    }
    // https://api.reg.ru/api/regru2/domain/check
    public static function checkDomain($user, $password, $domain, &$error)
    {
    }
    // https://api.reg.ru/api/regru2/domain/get_suggest
    public static function suggestDomain($user, $password, $word1, $word2, $tlds, &$error)
    {
    }
    // https://api.reg.ru/api/regru2/domain/create
    public static function createDomain($user, $password, $domain, $params, &$error)
    {
    }
    // https://api.reg.ru/api/regru2/service/get_info
    public static function checkDomainInfo($user, $password, $domain, &$error)
    {
    }
    // https://api.reg.ru/api/regru2/service/renew
    public static function renewDomain($user, $password, $domain, $params, &$error)
    {
    }
    public static function updateDns($user, $password, $domain, $params, &$error)
    {
    }
    // https://api.reg.ru/api/regru2/service/get_list
    public static function getDomainsList($user, $password, &$error)
    {
    }
    private static function post($url, $data)
    {
    }
    private static function setError($result, &$error)
    {
    }
}