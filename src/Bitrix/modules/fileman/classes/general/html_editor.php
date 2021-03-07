<?php

class CHTMLEditor
{
    private static $thirdLevelId, $arComponents;
    private $content, $id, $name, $jsConfig, $cssIframePath, $bAutorized, $bAllowPhp, $display, $inputName, $inputId;
    const CACHE_TIME = 31536000;
    // 365 days
    private function Init($arParams)
    {
    }
    function GetActualPath($path)
    {
    }
    function Show($arParams)
    {
    }
    function BuildSceleton($display = \true)
    {
    }
    function Run($display = \true)
    {
    }
    function SafeJsonEncode($data = array())
    {
    }
    function InitLangMess()
    {
    }
    public static function GetSnippets($templateId, $bClearCache = \false)
    {
    }
    public static function GetComponents($Params, $bClearCache = \false, $arFilter = array())
    {
    }
    public static function _HandleComponentElement($arEls, $path)
    {
    }
    public static function GetSiteTemplates()
    {
    }
    public static function RequestAction($action = '')
    {
    }
    public static function ShowResponse($reqId = \false, $Res = \false)
    {
    }
    public static function GetComponentParams($name, $siteTemplate = '', $template = '', $curValues = array(), $loadHelp = \true)
    {
    }
    private static function _HandleComponentParam($name = '', $arParam = array(), $arGroup = array())
    {
    }
    public static function GetSiteTemplateParams($templateId, $siteId)
    {
    }
    public static function GetVideoOembed($url = '')
    {
    }
    protected static function getRemoteVideoUrlInfo($path)
    {
    }
    public static function GetServerPath()
    {
    }
    private static function GetSettingKey($params = array())
    {
    }
    public static function GetUploadPath()
    {
    }
}