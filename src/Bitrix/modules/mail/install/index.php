<?php

class mail extends \CModule
{
    var $MODULE_ID = "mail";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    function __construct()
    {
    }
    function InstallDB($arParams = array())
    {
    }
    /**
     * @param $siteId
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function installMailService($siteId)
    {
    }
    public function installBitrix24MailService()
    {
    }
    function UnInstallDB($arParams = array())
    {
    }
    function InstallEvents()
    {
    }
    function UnInstallEvents()
    {
    }
    function InstallFiles($arParams = array())
    {
    }
    function UnInstallFiles()
    {
    }
    function DoInstall()
    {
    }
    function DoUninstall()
    {
    }
    public function migrateToBox()
    {
    }
}