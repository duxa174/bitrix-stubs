<?php

class CPGalleryInterface
{
    var $IBlockID = 0;
    var $Gallery = \false;
    var $User = array("Permission" => "D");
    // current user
    var $arCache = array();
    var $arError = array();
    private static $userAliasesCache = array(), $arPassFormShowed = array();
    function CPGalleryInterface($main_params = array(), $additional_params = array())
    {
    }
    function GetGallery($gallery_id)
    {
    }
    function GetSection($id, &$arSection, $params = array())
    {
    }
    function GetSectionGallery($arSection = array())
    {
    }
    function GetPermission()
    {
    }
    function CheckPermission($permission = "D", $arSection = array(), $bOutput = \true)
    {
    }
    public function IsPassFormDisplayed($sectId)
    {
    }
    public static function GetUserAlias($userId = \false, $iblockId = 0)
    {
    }
    public static function GetPathWithUserAlias($path, $userId = \false, $iblockId = 0)
    {
    }
    public static function HandleUserAliases($arUserIds = array(), $iblockId = 0)
    {
    }
    private static function GetUniqAjaxId()
    {
    }
    public static function GetSign($params = array())
    {
    }
    public static function CheckSign($sign, $params = array())
    {
    }
    public static function CheckUploaderType($type = "")
    {
    }
}