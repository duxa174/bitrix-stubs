<?php

class CModule
{
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_ID;
    var $MODULE_SORT = 10000;
    var $SHOW_SUPER_ADMIN_GROUP_RIGHTS;
    var $MODULE_GROUP_RIGHTS;
    var $PARTNER_NAME;
    var $PARTNER_URI;
    public static function AddAutoloadClasses($module, $arParams = array())
    {
    }
    public static function _GetCache()
    {
    }
    function InstallDB()
    {
    }
    function UnInstallDB()
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
    public function GetModuleTasks()
    {
    }
    public function InstallTasks()
    {
    }
    public function UnInstallTasks()
    {
    }
    function IsInstalled()
    {
    }
    function DoUninstall()
    {
    }
    function Remove()
    {
    }
    function Add()
    {
    }
    public static function GetList()
    {
    }
    /**
     * Makes module classes and function available. Returns true on success.
     *
     * @param string $module_name
     * @return bool
     */
    public static function IncludeModule($module_name)
    {
    }
    public static function IncludeModuleEx($module_name)
    {
    }
    public static function err_mess()
    {
    }
    public static function GetDropDownList($strSqlOrder = "ORDER BY ID")
    {
    }
    /**
     * @param string $moduleId
     * @return CModule|bool
     */
    public static function CreateModuleObject($moduleId)
    {
    }
}
function RegisterModule($id)
{
}
function UnRegisterModule($id)
{
}
function AddEventHandler($FROM_MODULE_ID, $MESSAGE_ID, $CALLBACK, $SORT = 100, $FULL_PATH = \false)
{
}
function RemoveEventHandler($FROM_MODULE_ID, $MESSAGE_ID, $iEventHandlerKey)
{
}
function GetModuleEvents($MODULE_ID, $MESSAGE_ID, $bReturnArray = \false)
{
}
/**
 * @param $arEvent
 * @param null $param1
 * @param null $param2
 * @param null $param3
 * @param null $param4
 * @param null $param5
 * @param null $param6
 * @param null $param7
 * @param null $param8
 * @param null $param9
 * @param null $param10
 * @return bool|mixed|null
 *
 * @deprecated
 */
function ExecuteModuleEvent($arEvent, $param1 = \NULL, $param2 = \NULL, $param3 = \NULL, $param4 = \NULL, $param5 = \NULL, $param6 = \NULL, $param7 = \NULL, $param8 = \NULL, $param9 = \NULL, $param10 = \NULL)
{
}
function ExecuteModuleEventEx($arEvent, $arParams = array())
{
}
function UnRegisterModuleDependences($FROM_MODULE_ID, $MESSAGE_ID, $TO_MODULE_ID, $TO_CLASS = "", $TO_METHOD = "", $TO_PATH = "", $TO_METHOD_ARG = array())
{
}
function RegisterModuleDependences($FROM_MODULE_ID, $MESSAGE_ID, $TO_MODULE_ID, $TO_CLASS = "", $TO_METHOD = "", $SORT = 100, $TO_PATH = "", $TO_METHOD_ARG = array())
{
}
function IsModuleInstalled($module_id)
{
}
function GetModuleID($str)
{
}
/**
 * Returns TRUE if version1 >= version2
 * version1 = "XX.XX.XX"
 * version2 = "XX.XX.XX"
 */
function CheckVersion($version1, $version2)
{
}