<?php

class socialnetwork extends \CModule
{
    var $MODULE_ID = "socialnetwork";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    function __construct()
    {
    }
    function __SetLogFilter($site_id = \false)
    {
    }
    function InstallDB($install_wizard = \true)
    {
    }
    function UnInstallDB($arParams = array())
    {
    }
    function InstallUserFields($id = "all")
    {
    }
    public static function installDiskUserFields()
    {
    }
    public static function installIntranetUserFields()
    {
    }
    function UnInstallUserFields($id = "all")
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
    function InstallPublic()
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
    public function migrateToBox()
    {
    }
}