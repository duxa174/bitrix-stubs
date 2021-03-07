<?php

class forum extends \CModule
{
    var $MODULE_ID = "forum";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    function __construct()
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
    function InstallUserFields($id = "all")
    {
    }
    function UnInstallUserFields()
    {
    }
    function DoInstall()
    {
    }
    function DoUninstall()
    {
    }
}
function CreatePattern($pattern = "", $DICTIONARY_ID = 0)
{
}
function GenPatternAll($DICTIONARY_ID_W = 0, $DICTIONARY_ID_T = 0)
{
}