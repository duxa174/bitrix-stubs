<?php

class CTask
{
    protected static $TASK_OPERATIONS_CACHE = array();
    public static function err_mess()
    {
    }
    public static function CheckFields(&$arFields, $ID = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($arFields, $ID)
    {
    }
    public static function UpdateModuleRights($id, $moduleId, $letter, $site_id = \false)
    {
    }
    public static function Delete($ID, $protect = \true)
    {
    }
    public static function GetList($arOrder = array('MODULE_ID' => 'asc', 'LETTER' => 'asc'), $arFilter = array())
    {
    }
    public static function GetOperations($ID, $return_names = \false)
    {
    }
    public static function SetOperations($ID, $arr, $bOpNames = \false)
    {
    }
    public static function GetTasksInModules($mode = \false, $module_id = \false, $binding = \false)
    {
    }
    public static function GetByID($ID)
    {
    }
    protected static function GetDescriptions($module)
    {
    }
    public static function GetLangTitle($name, $module = "main")
    {
    }
    public static function GetLangDescription($name, $desc, $module = "main")
    {
    }
    public static function GetLetter($ID)
    {
    }
    public static function GetIdByLetter($letter, $module, $binding = 'module')
    {
    }
}