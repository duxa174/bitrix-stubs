<?php

class CAllAgent
{
    public static function AddAgent(
        $name,
        // PHP function name
        $module = "",
        // module
        $period = "N",
        // check for agent execution count in period of time
        $interval = 86400,
        // time interval between execution
        $datecheck = "",
        // first check for execution time
        $active = "Y",
        // is the agent active or not
        $next_exec = "",
        // first execution time
        $sort = 100,
        // order
        $user_id = \false,
        // user
        $existError = \true
    )
    {
    }
    public static function Add($arFields)
    {
    }
    public static function RemoveAgent($name, $module = "", $user_id = \false)
    {
    }
    public static function Delete($id)
    {
    }
    public static function RemoveModuleAgents($module)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function GetById($ID)
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array())
    {
    }
    public static function CheckFields(&$arFields, $ign_name = \false)
    {
    }
}