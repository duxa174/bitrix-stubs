<?php

class catalog extends \CModule
{
    var $MODULE_ID = "catalog";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    private $bitrix24mode = \null;
    function __construct()
    {
    }
    function DoInstall()
    {
    }
    function InstallFiles()
    {
    }
    function InstallDB()
    {
    }
    function InstallEvents()
    {
    }
    function DoUnInstall()
    {
    }
    function UnInstallFiles()
    {
    }
    function UnInstallDB($arParams = array())
    {
    }
    function UnInstallEvents()
    {
    }
    function GetModuleTasks()
    {
    }
    public static function getTableSchema()
    {
    }
    private function __getLangMessages($path, $messID, $langList)
    {
    }
}