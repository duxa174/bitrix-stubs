<?php

class learning extends \CModule
{
    var $MODULE_ID = "learning";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $errors;
    public $MODULE_GROUP_RIGHTS = 'Y';
    function __construct()
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
    function GetModuleRightList()
    {
    }
    protected static function _RemoveConvertDbNotify()
    {
    }
    protected static function _AddConvertDbNotify()
    {
    }
    protected static function _RightsModelPurge()
    {
    }
    protected static function _RightsModelCreateTasksAndRelation($arOperationsInDB)
    {
    }
    protected static function _RightsModelGetTasksWithOperations()
    {
    }
    protected static function _RightsModelGetAllOperations()
    {
    }
    protected static function _RightsModelCreateOperations()
    {
    }
    protected static function InitializeNewRightsModel()
    {
    }
}