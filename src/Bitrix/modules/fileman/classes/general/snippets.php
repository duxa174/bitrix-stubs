<?php

class CSnippets
{
    public static function LoadList($Params)
    {
    }
    function HandleForTemplate($template, &$arSNIPPETS, &$arTemplateKeys)
    {
    }
    function ReadDir(&$arSNIPPETS, &$arKeys, $path, $template, $level = 0, $parent = "")
    {
    }
    function UpdateContentInfo(&$ar, &$arKeys, $template)
    {
    }
    function WriteHtaccess($path)
    {
    }
    function ClearCache()
    {
    }
    function GetCode($path)
    {
    }
    function Edit($Params)
    {
    }
    function Delete($Params)
    {
    }
    function CheckFile($params)
    {
    }
    public static function GetGroups($Params)
    {
    }
    public static function GetGroupList($Params)
    {
    }
    public static function SaveGroupList($Params)
    {
    }
    function InspectDir(&$arSnGroups, $path, $template, $level = 0, $parent = '')
    {
    }
    function GetDefaultFileName($path)
    {
    }
    function DisplayJSGroups($template, $ar = array())
    {
    }
    /**
     * Adds a new snippet
     *
     * @param array - list of params
     * @return bool or object - result
     */
    public static function Add($params = array())
    {
    }
    /**
     * Updates existent snippet
     *
     * @param array - list of params
     * @return bool or object - result
     */
    public static function Update($params = array())
    {
    }
    /**
     * Removes snippet
     *
     * @param array - list of params (template, path)
     * @return bool - result
     */
    public static function Remove($params = array())
    {
    }
    public static function CreateCategory($params = array())
    {
    }
    public static function RenameCategory($params)
    {
    }
    public static function RemoveCategory($params)
    {
    }
    private static function GetBasePath($template)
    {
    }
}