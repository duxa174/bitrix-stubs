<?php

// AddEventHandler("fileman", "OnBeforeHTMLEditorScriptsGet", "bitrix_tabs");
// function bitrix_tabs($editorName, $arEditorParams){return array("JS" => array('bitrix_tabs.js'));}
class CFileMan
{
    public static function OnPanelCreate()
    {
    }
    public static function OnGroupDelete($group_id)
    {
    }
    public static function GetVersion()
    {
    }
    public static function SaveMenu($path, $aMenuLinksTmp, $sMenuTemplateTmp = "")
    {
    }
    public static function GetMenuArray($abs_path)
    {
    }
    public static function GetFileName($path)
    {
    }
    public static function CreateDir($path)
    {
    }
    //Function check if there are anything exept .access.php and if folder is empty - delete it
    public static function DeleteDir($path)
    {
    }
    public static function DeleteFile($path)
    {
    }
    public static function DeleteEx($path)
    {
    }
    public static function NormalizePath($path)
    {
    }
    public static function CopyEx($path_from, $path_to, $bDeleteAfterCopy = \false, $bOverride = \false)
    {
    }
    public static function GetAllDirList(&$arDirs, $arFilter = array(), $site = \false)
    {
    }
    public static function DirsRecursive($path, &$arDirs, $arFilter = array(), $depth = 0)
    {
    }
    public static function CompareFiles($f1, $f2, $sort = array())
    {
    }
    public static function GetDirList($path, &$arDirs, &$arFiles, $arFilter = array(), $sort = array(), $type = "DF", $bLogical = \false, $task_mode = \false)
    {
    }
    public static function __CheckSite($site)
    {
    }
    public static function ParsePath($path, $bLast = \false, $url = \false, $param = "", $bLogical = \false)
    {
    }
    public static function GetFileExtension($path)
    {
    }
    public static function GetFileType($path)
    {
    }
    public static function GetStrFileSize($size)
    {
    }
    public static function GetFileTypeEx($fileName)
    {
    }
    public static function EscapePHPString($str)
    {
    }
    public static function UnEscapePHPString($str)
    {
    }
    public static function UndoFileDelete($Params, $type)
    {
    }
    public static function UndoNewFile($Params, $type)
    {
    }
    public static function UndoEditFile($Params, $type)
    {
    }
    public static function UndoNewSection($Params, $type)
    {
    }
    public static function FetchFileAccessPerm($path)
    {
    }
    public static function ShowTypeSelector($params)
    {
    }
    public static function AddHTMLEditorFrame($strTextFieldName, $strTextValue, $strTextTypeFieldName, $strTextTypeValue, $arSize = array("height" => 350), $CONVERT_FOR_WORKFLOW = "N", $WORKFLOW_DOCUMENT_ID = 0, $NEW_DOCUMENT_PATH = "", $textarea_field = "", $site = \false, $bWithoutPHP = \true, $arTaskbars = \false, $arAdditionalParams = array())
    {
    }
    public static function ShowHTMLEditControl($name, $content, $arParams = array())
    {
    }
    public static function GetFileTemplates($lang = \LANG, $arTemplates = array())
    {
    }
    public static function GetTemplateContent($filename, $lang = \LANG, $arTemplates = array())
    {
    }
    public static function GetScriptFileExt()
    {
    }
    public static function ParseFileContent($filesrc, $bCheckProlog = \false)
    {
    }
    public static function SetTitle($prolog, $title)
    {
    }
    public static function SetProperty($prolog, $property_key, $property_val)
    {
    }
    public static function IsPHP($src)
    {
    }
    public static function GetAllTemplateParams($templateID, $site, $findcomponent = \true, $arAdditionalParams = array())
    {
    }
    public static function __CheckOnAllowedComponents($str)
    {
    }
    public static function CheckOnAllowedComponents($str)
    {
    }
    public static function GetHTMLEditorSettings($edname, $lightMode, $arTaskbars, &$loadParams)
    {
    }
    public static function CheckFileName($str)
    {
    }
    public static function GetPropstypes($site = "")
    {
    }
    public static function SetPropstypes($arPT = array(), $desc = \false, $site = "")
    {
    }
    public static function OnModuleUpdate($arParams)
    {
    }
    public static function ClearComponentsListCache($id = '')
    {
    }
    public static function SecurePathVar($str)
    {
    }
    public static function GetUnixFilePermissions($file)
    {
    }
    public static function IsWindows()
    {
    }
    public static function SaveLastPath($path)
    {
    }
    public static function GetLastPathes()
    {
    }
    public static function SetLastPathes($arPathes = array())
    {
    }
    public static function GetLastPathesDefault()
    {
    }
    public static function GetEditorToolbarConfig($editorType)
    {
    }
    public static function decodePdfViewerLangFiles()
    {
    }
    /**
     * @param $path
     * @param $charsetFrom
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    protected static function decodeLangFile($path, $charsetFrom)
    {
    }
}
function is_array_assoc($arr)
{
}
function setEditorEventHandlers($name)
{
}
function _replace_br_($str)
{
}