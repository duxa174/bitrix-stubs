<?php

/**********************************************************************/
/************** FORUM *************************************************/
/**********************************************************************/
class CAllForumNew
{
    //---------------> Forum insert, update, delete
    public static function CanUserViewForum($FID, $arUserGroups, $ExternalPermission = \false)
    {
    }
    public static function CanUserAddForum($arUserGroups, $iUserID = 0)
    {
    }
    public static function CanUserUpdateForum($FID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserDeleteForum($FID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserModerateForum($FID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CanUserEditForum($FID, $arUserGroups, $iUserID = 0, $ExternalPermission = \false)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    public static function Update($ID, $arFields, $bReindex = \true)
    {
    }
    public static function Delete($ID)
    {
    }
    //---------------> Array of sites (langs) where forum is available
    public static function GetSites($ID)
    {
    }
    //---------------> Forum permissions
    public static function GetPermissionUserDefault($ID)
    {
    }
    public static function GetAccessPermissions($ID, $TYPE = "ONE")
    {
    }
    public static function GetAccessPermsList($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function SetAccessPermissions($ID, $arGROUP_ID)
    {
    }
    public static function GetUserPermission($ID, $arUserGroups)
    {
    }
    //---------------> Forum Utils
    public static function GetFilterOperation($key)
    {
    }
    public static function prepareField($operation, $type, $vals)
    {
    }
    public static function GetSelectFields($arAddParams = array())
    {
    }
    //---------------> Forum list
    public static function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array(), $arAddParams = array())
    {
    }
    public static function GetListEx($arOrder = array("SORT" => "ASC"), $arFilter = array(), $bCount = \false, $iNum = 0, $arAddParams = array())
    {
    }
    public static function GetForumRenew($data)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByIDEx($ID, $SITE_ID = \false, $arAddParams = array())
    {
    }
    //---------------> Forum labels
    public static function InitReadLabels($ID, $arUserGroups)
    {
    }
    public static function SetLabelsBeRead($ID, $arUserGroups)
    {
    }
    //---------------> Forum utils
    public static function SetStat($ID = 0, $arParams = array())
    {
    }
    /**
     * Replace path to forum message link.
     * @param string|null $strPath
     * @param array $arVals
     * @return string|array
     */
    public static function PreparePath2Message($strPath, $arVals = array())
    {
    }
    //---------------> Forum actions
    public static function OnGroupDelete($GROUP_ID)
    {
    }
    public static function OnBeforeLangDelete($lang)
    {
    }
    public static function OnPanelCreate()
    {
    }
    public static function OnReindex($NS = array(), $oCallback = \NULL, $callback_method = "")
    {
    }
    public static function ShowPanel($FID, $TID = 0, $bGetIcons = \false)
    {
    }
    public static function ClearHTML($ID)
    {
    }
}
/**********************************************************************/
/************** FORUM GROUP *******************************************/
/**********************************************************************/
class CAllForumGroup
{
    //---------------> User insert, update, delete
    public static function CanUserAddGroup($arUserGroups)
    {
    }
    public static function CanUserUpdateGroup($ID, $arUserGroups)
    {
    }
    public static function CanUserDeleteGroup($ID, $arUserGroups)
    {
    }
    public static function CheckFields($ACTION, &$arFields, $ID = \false)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array())
    {
    }
    public static function GetListEx($arOrder = array("SORT" => "ASC"), $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetByIDEx($ID, $LANGUAGE_ID)
    {
    }
    public static function GetLangByID($FORUM_GROUP_ID, $strLang)
    {
    }
    public static function GetByLang($LANGUAGE_ID)
    {
    }
    public static function Resort($ID = 0, $cnt = 0, $depth = 0)
    {
    }
}
/**********************************************************************/
/************** FORUM SMILE *******************************************/
/**********************************************************************/
class CForumSmile
{
    static $smiles = array();
    static $sets = array();
    public static function Add()
    {
    }
    public static function CheckFields()
    {
    }
    public static function Update()
    {
    }
    public static function Delete()
    {
    }
    public static function GetList()
    {
    }
    public static function GetListEx()
    {
    }
    public static function GetByID()
    {
    }
    public static function GetByIDEx($ID, $strLang)
    {
    }
    public static function GetLangByID($SMILE_ID, $strLang)
    {
    }
    /**
     * @deprecated
     * @param $type
     * @param $lang
     * @return mixed
     */
    public static function GetByType($type, $lang)
    {
    }
    public static function getSmiles($type, $lang)
    {
    }
    public static function getSetsByType($type, $lang)
    {
    }
}
class _CForumDBResult extends \CDBResult
{
    var $sNameTemplate = '';
    function _CForumDBResult($res, $params = array())
    {
    }
    function Fetch()
    {
    }
}