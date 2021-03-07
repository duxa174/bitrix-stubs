<?php

class CCalendarConvert
{
    private static $iblockTypes = array(), $iblockIds = array(), $settings = array(), $arIBTypes = array(), $arIBlocks = array(), $accessTasks, $start_time, $time_limit = 10, $userIblockId, $curSite, $bSkip = \false, $lastSite = \false, $lastPath = \false, $types;
    function ParseParams($lastPath = \false, $lastSite = \false)
    {
    }
    function ParseFile($file)
    {
    }
    function ParseStop($nextPath, $site)
    {
    }
    function CheckBreak()
    {
    }
    function FetchParams($content)
    {
    }
    public static function GetIblockTypes()
    {
    }
    function AddTypesFromIblockType()
    {
    }
    public static function SetModuleOption($paramName, $value)
    {
    }
    public static function Log($mess = '')
    {
    }
    public static function CreateSectionProperty($iblockId)
    {
    }
    public static function DropSectionProperty()
    {
    }
    public static function CreateElementProperty($iblockId)
    {
    }
    public static function ConvertEntity($ownerType, $ownerId, $sectionId, $iblockId, $createdBy)
    {
    }
    public static function DoConvertStep()
    {
    }
    public static function GetSettings()
    {
    }
    public static function GetOption($name = '', $default = \false)
    {
    }
    public static function SetOption($name = '', $value = \false, $serialize = \true)
    {
    }
}