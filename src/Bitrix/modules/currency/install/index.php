<?php

class currency extends \CModule
{
    var $MODULE_ID = 'currency';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = 'Y';
    var $errors = \false;
    function __construct()
    {
    }
    function DoInstall()
    {
    }
    function DoUninstall()
    {
    }
    function InstallDB()
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
    function InstallFiles()
    {
    }
    function UnInstallFiles()
    {
    }
    protected function installCurrencies()
    {
    }
    /**
     * Returns currency list for install.
     *
     * @param string $baseCurrency
     * @return array
     */
    private static function getCurrencyListForInstall($baseCurrency)
    {
    }
}