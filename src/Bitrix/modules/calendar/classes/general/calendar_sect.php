<?php

class CCalendarSect
{
    private static $sections, $Permissions = array(), $arOp = array(), $bClearOperationCache = \false, $authHashiCal = \null, $Fields = array();
    private static function GetFields()
    {
    }
    public static function GetList($params = array())
    {
    }
    public static function GetById($id = 0, $checkPermissions = \true, $bRerequest = \false)
    {
    }
    //
    public static function GetSuperposedList($params = array())
    {
    }
    public static function CheckFields($arFields)
    {
    }
    public static function Edit($params)
    {
    }
    public static function Delete($id, $checkPermissions = \true)
    {
    }
    public static function CreateDefault($params = array())
    {
    }
    public static function SavePermissions($sectId, $arTaskPerm)
    {
    }
    public static function GetArrayPermissions($arSections = array())
    {
    }
    public static function SetClearOperationCache($val = \true)
    {
    }
    public static function CanDo($operation, $sectId = 0, $userId = \false)
    {
    }
    public static function GetOperations($sectId, $userId = \false)
    {
    }
    public static function GetCalDAVConnectionId($section = 0)
    {
    }
    public static function GetExportLink($sectionId, $type = '', $ownerId = \false)
    {
    }
    function GetSPExportLink()
    {
    }
    public static function GetOutlookLink($Params)
    {
    }
    private static function GetUniqCalendarId()
    {
    }
    public static function GetSign($userId, $sectId)
    {
    }
    public static function CheckSign($sign, $userId, $sectId)
    {
    }
    //	public static function Hidden($userId, $ar = false)
    //	{
    //		if (!$userId && $ar === false)
    //			return array();
    //
    //		$res = array();
    //		if (class_exists('CUserOptions') && $userId > 0)
    //		{
    //			if ($ar === false) // Get
    //			{
    //				$str = CUserOptions::GetOption("calendar", "hidden_sections", false, $userId);
    //				if ($str !== false && CheckSerializedData($str))
    //					$res = unserialize($str);
    //			}
    //			elseif(is_array($ar)) // Set
    //			{
    //				$res = CUserOptions::SetOption("calendar", "hidden_sections", serialize($ar));
    //			}
    //		}
    //		return $res;
    //	}
    // * * * * EXPORT TO ICAL  * * * *
    public static function ReturnICal($Params)
    {
    }
    function ExtendExportEventsArray($arEvents, $arCalEx)
    {
    }
    private static function ShowICalHeaders()
    {
    }
    private static function FormatICal($section, $events)
    {
    }
    private static function _ICalPaste($str)
    {
    }
    public static function GetModificationLabel($calendarId)
    {
    }
    public static function UpdateModificationLabel($arId = array())
    {
    }
    public static function GetDefaultAccess($type, $ownerId)
    {
    }
    public static function GetAuthHash()
    {
    }
    public static function CheckAuthHash()
    {
    }
    public static function GetLastUsedSection($type, $ownerId, $userId)
    {
    }
    public static function GetSectionForOwner($type, $ownerId, $autoCreate = \true)
    {
    }
    public static function HandlePermission($section = [])
    {
    }
    public static function CleanAccessTable()
    {
    }
    public static function CheckGoogleVirtualSection($davXmlId = '')
    {
    }
    public static function GetCount()
    {
    }
    public static function GetSectionIdByEventId($id)
    {
    }
}