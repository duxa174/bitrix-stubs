<?php

class CMainAdmin
{
    public static function GetTemplateList($rel_dir)
    {
    }
}
class CTemplates
{
    public static function GetList($arFilter = array(), $arCurrentValues = array(), $template_id = array())
    {
    }
    public static function GetByID($id, $arCurrentValues = array(), $templateID = array())
    {
    }
    public static function __FindTemplates($root, &$arTemplates, $arCurrentValues = array(), $init = "")
    {
    }
    public static function GetFolderList($template_id = \false)
    {
    }
}
class CPageTemplate
{
    public static function GetList($arSiteTemplates = array())
    {
    }
    public static function GetDescription()
    {
    }
    public static function _templ_sort($a, $b)
    {
    }
    public static function GetTemplate($template, $arSiteTemplates = array())
    {
    }
    public static function IncludeLangFile($filepath)
    {
    }
}
class _FilesCmp
{
    public static function cmp_size_asc($a, $b)
    {
    }
    public static function cmp_size_desc($a, $b)
    {
    }
    public static function cmp_timestamp_asc($a, $b)
    {
    }
    public static function cmp_timestamp_desc($a, $b)
    {
    }
    public static function cmp_name_asc($a, $b)
    {
    }
    public static function cmp_name_desc($a, $b)
    {
    }
    public static function cmp_name_nat_asc($a, $b)
    {
    }
    public static function cmp_name_nat_desc($a, $b)
    {
    }
}
function GetTemplateContent($filename, $lang = \LANG, $arTemplates = array())
{
}
function GetFileTemplates($lang = \LANG, $arTemplates = array())
{
}
function ParsePath($path, $bLast = \false, $url = \false, $param = "", $bLogical = \false)
{
}
function CompareFiles($f1, $f2, $sort = array())
{
}
function GetDirList($path, &$arDirs, &$arFiles, $arFilter = array(), $sort = array(), $type = "DF", $bLogical = \false, $task_mode = \false)
{
}
function SetPrologTitle($prolog, $title)
{
}
function SetPrologProperty($prolog, $property_key, $property_val)
{
}
function IsPHP($src)
{
}