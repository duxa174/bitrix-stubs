<?php

class blog extends \CModule
{
    var $MODULE_ID = "blog";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    function blog()
    {
    }
    public static function installDiskUserFields()
    {
    }
    public static function installMailUserFields(&$errors = [])
    {
    }
    function InstallUserFields($id = "all")
    {
    }
    function InstallDB($install_wizard = \true)
    {
    }
    function UnInstallDB($arParams = array())
    {
    }
    function UnInstallUserFields()
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
    function DoInstall()
    {
    }
    function DoUninstall()
    {
    }
    function GetModuleRightList()
    {
    }
}