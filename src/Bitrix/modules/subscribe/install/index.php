<?php

class subscribe extends \CModule
{
    var $MODULE_ID = "subscribe";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    var $errors;
    function subscribe()
    {
    }
    function InstallDB($arParams = array())
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
    function OnGetTableSchema()
    {
    }
}