<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2020 Bitrix
 */
class CGroup
{
    var $LAST_ERROR;
    public static function err_mess()
    {
    }
    public function Add($arFields)
    {
    }
    public static function GetDropDownList($strSqlSearch = "and ACTIVE='Y'", $strSqlOrder = "ORDER BY C_SORT, NAME, ID")
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array(), $SHOW_USERS_AMOUNT = "N")
    {
    }
    //*************** COMMON UTILS *********************/
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields)
    {
    }
    public static function GetListEx($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function GetByID($ID, $SHOW_USERS_AMOUNT = "N")
    {
    }
    public function CheckFields($arFields, $ID = \false)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetGroupUser($ID)
    {
    }
    public static function GetGroupUserEx($ID)
    {
    }
    public static function GetMaxSort()
    {
    }
    public static function GetSubordinateGroups($grId)
    {
    }
    public static function SetSubordinateGroups($grId, $arSubGroups = \false)
    {
    }
    public static function GetTasks($ID, $onlyMainTasks = \true, $module_id = \false)
    {
    }
    public static function SetTasks($ID, $arr)
    {
    }
    public static function GetTasksForModule($module_id, $onlyMainTasks = \true)
    {
    }
    public static function SetTasksForModule($module_id, $arGroupTask)
    {
    }
    public static function GetModulePermission($group_id, $module_id)
    {
    }
    public static function SetModulePermission($group_id, $module_id, $permission)
    {
    }
    public static function GetIDByCode($code)
    {
    }
}