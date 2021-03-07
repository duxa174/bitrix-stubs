<?php

namespace Bitrix\Rest\APAuth;

/**
 * @deprecated
 *
 * use \Bitrix\Rest\APAuth\PasswordTable
 */
class Application extends \Bitrix\Main\Authentication\Application
{
    const ID = 'rest';
    protected $validUrls = array("/rest/");
    public static function onApplicationsBuildList()
    {
    }
    /**
     * Generates AP for REST access.
     *
     * @param string $siteTitle Site title for AP description.
     *
     * @return bool|string password or false
     * @throws \Exception
     */
    public static function generateAppPassword($siteTitle, array $scopeList)
    {
    }
}