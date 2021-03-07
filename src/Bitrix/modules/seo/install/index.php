<?php

class seo extends \CModule
{
    var $MODULE_ID = "seo";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";
    function seo()
    {
    }
    function DoInstall()
    {
    }
    function InstallDB()
    {
    }
    function InstallFiles()
    {
    }
    function InstallEvents()
    {
    }
    function DoUninstall()
    {
    }
    function UnInstallDB($arParams = array())
    {
    }
    function UnInstallFiles($arParams = array())
    {
    }
    function UnInstallEvents()
    {
    }
    function GetModuleRightList()
    {
    }
    /**
     * Method for migrate from cloud version.
     * @return void
     * @throws \Bitrix\Main\LoaderException
     */
    public function migrateToBox() : void
    {
    }
}