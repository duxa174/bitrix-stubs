<?php

class CMedialib
{
    private static $bCache = \true, $cacheTime = 360000, $cachePath = "medialib/";
    public static function Init()
    {
    }
    public static function GetOperations($collectionId, $menu = \false)
    {
    }
    public static function CanDoOperation($operation, $collectionId = 0, $userId = \false, $menu = \false)
    {
    }
    public static function GetAccessPermissionsArray($collectionId = 0, $oCollections = \false)
    {
    }
    public static function _GetAccessPermissions($arCols = array())
    {
    }
    public static function getMaximumFileUploadSize()
    {
    }
    public static function ShowDialogScript($arConfig = array())
    {
    }
    public static function AttachJSScripts()
    {
    }
    public static function AppendLangMessages()
    {
    }
    public static function AppendLangMessagesEx()
    {
    }
    public static function Start($Params)
    {
    }
    public static function BuildDialog($Params)
    {
    }
    public static function BuildAddCollectionDialogAdmin($Params)
    {
    }
    public static function BuildAddCollectionDialog($Params)
    {
    }
    public static function BuildAddItemDialogAdmin($Params)
    {
    }
    public static function BuildAddItemDialog($Params)
    {
    }
    public static function ShowUploadForm($Params)
    {
    }
    public static function BuildConfirmDialog($Params)
    {
    }
    public static function BuildViewItemDialog($Params)
    {
    }
    public static function BuildChangeType($Params)
    {
    }
    public static function ShowJS()
    {
    }
    public static function GetCollections(&$exParams)
    {
    }
    public static function DelCollection($id, $arIds = array())
    {
    }
    public static function EditCollection($Params)
    {
    }
    public static function EditItem($Params)
    {
    }
    public static function GetCollectionTree($Params = array())
    {
    }
    public static function _buildCollection($Col, $ind, &$arColTree, &$Collections, $Params = array())
    {
    }
    public static function _findChildInColTree(&$arr, $id, $colId)
    {
    }
    public static function _BuildCollectionsSelectOptions($Collections = \false, $arColTree = \false, $level = 0, $selected = \false)
    {
    }
    public static function GetItems($Params)
    {
    }
    public static function DelItem($id, $bCurrent = \false, $colId = \false)
    {
    }
    public static function DeleteThumbnails()
    {
    }
    public static function GetItemCollectionList($Params)
    {
    }
    public static function SaveUserSettings($Params)
    {
    }
    public static function SaveAccessPermissions($colId, $arTaskPerm)
    {
    }
    public static function MultiActionDelete($Params = array())
    {
    }
    public static function ShowBrowseButton($Params = array())
    {
    }
    public static function GetUsableSize($size = 0)
    {
    }
    public static function GetUsableDate($date = '')
    {
    }
    public static function GetMediaExtentions($bStr = \true)
    {
    }
    public static function GetDefaultMediaExtentions()
    {
    }
    public static function CheckFileExtention($strPath = '', $arExt = \false)
    {
    }
    public static function Escape($str, $bHtmlSpCh = \true)
    {
    }
    public static function SearchItems($Params)
    {
    }
    /*
    	$strInputName //the name of element
    	$strImageID // the file identifier or path to the file from site root
    	$showInfo => array(
    		"IMAGE" => "Y",
    		"MAX_SIZE" => array("W" => ww, "H" => hh)
    		"IMAGE_POPUP" => "Y",
    		"PATH" => "Y",
    		"DIMENSIONS" => "Y",
    		"FILE_SIZE" => "Y",
    	),
    	$fileInput => array( // if false then loading from computer don't used
    		"NAME" => "...", //the name for INPUT has "file" type. For loading from computer. It equals $strInputName for defaults
    		["ID" => "...",] //the identifier of INPUT. It equals $strInputName."_file" for defaults with replacement all symbols except a-zA-z0-9_ by _
    		["SIZE" => NN,] // optional param, default 35
    		["SHOW_INFO" => "Y",] //to show information about image or not. Default not
    		["LABEL" => "INPUT title"],
    	),
    	$servInput => array( //if false, then choose file from server not used. Default equals $strInputName
    		"NAME" => "...", //name for INPUT type of text. For chosing file from server.
    		["ID" => "...",] //INPUT identifier.Default equals $strInputName."_serv" with replacement all symbols except a-zA-z0-9_ by _
    		["SIZE" => NN,] // optional param, default 35
    		["SHOW_INFO" => "Y",] //to show information about image, or not, default not
    		["LABEL" => "INPUT title"],
    	),
    	$pathInput => array( //if false, then library not use.
    		["NAME" => "NNN",] //INPUT name type text. For selection from media library. Default $strInputName.
    		["ID" => "...",] //INPUT identifier. Default equals $strInputName."_path" with replacement all symbols except a-zA-z0-9_ by _
    		["SIZE" => NN,] // optional param, default 35
    		["LABEL" => "INPUT title"],
    	),
    	$descInput => array( //if false, then the describtion field will not showed.
    		["NAME" => "NNN",] //The INPUT's name type of text. File description. Default equals $strInputName."_descr" without array indexes influence.
    		["SIZE" => NN,] // optional param, default 35
    		["VALUE" => "...",] //Value for file description. if undefined, it will be got from $strImageID
    		["LABEL" => "INPUT title"],
    	),
    	$delInput => array( //if false, then delition flag will not be shown
    		["NAME" => "NNN",] //The INPUT's name type of checkbox. File delition flag/
    				// Default it equals $strInputName."_del" without array indexes influence.
    		["LABEL" => "INPUT title"],
    	),
    	$scaleIcon => array( //if false, then icon with help will not be shown.
    		"SCALE" => Y|N // Y - show scale (zoom) icon N - save size icon
    		"WIDTH" => xxx // information for hint over icon
    		"HEIGHT" => yyy // information for hint over icon
    	),
    */
    public static function InputFile($strInputName, $strImageID = "", $showInfo = \false, $fileInput = \false, $servInput = \false, $pathInput = \false, $descInput = \false, $delInput = \false, $scaleIcon = \false, $cloudInput = \false)
    {
    }
    public static function GetTypeById($id, $arMLTypes = \false)
    {
    }
    public static function GetTypes($arConfigTypes = array(), $bGetEmpties = \false)
    {
    }
    public static function SetTypes($arTypes = array())
    {
    }
    public static function DelTypes($arIds = array())
    {
    }
    public static function GetItemViewHTML($itemId)
    {
    }
    public static function ChangeColType($Params)
    {
    }
    public static function CompareTypesEx($typeMix, $arType)
    {
    }
    public static function ClearCache($arPath = \false)
    {
    }
    public static function AutosaveImage($file = \false)
    {
    }
}
class CMedialibCollection
{
    public static function GetList($Params = array())
    {
    }
    public static function CheckFields($arFields)
    {
    }
    public static function Edit($Params)
    {
    }
    public static function Delete($ID, $bDelEmpty = \true)
    {
    }
    public static function GetErrorMess()
    {
    }
    public static function IsViewable($oCol, $arCol = \false)
    {
    }
    public static function ChangeType($Params)
    {
    }
}
class CMedialibItem
{
    public static function CheckFields($arFields)
    {
    }
    public static function GetList($Params)
    {
    }
    // Add or edit ITEM
    public static function Edit($Params)
    {
    }
    public static function GenerateThumbnail(&$arFile, $Params = array())
    {
    }
    public static function GetItemCollections($Params)
    {
    }
    public static function Delete($ID, $bCurrent, $colId)
    {
    }
    public static function DeleteEmpty()
    {
    }
    public static function GetThumbPath($arImage)
    {
    }
    public static function GetFullPath($arImage, $upload_dir = \false)
    {
    }
    public static function GetSourceId($id)
    {
    }
    public static function Search($arQuery, $arTypes = array())
    {
    }
}
// Deprecated and unused class. Placed here to prevent fatal errors in customized forms
class CMedialibTabControl
{
    public static function ShowScript()
    {
    }
}