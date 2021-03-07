<?php

class CWikiSocnet
{
    public static $bActive = \false;
    public static $bInit = \false;
    public static $iCatId = 0;
    public static $iCatLeftBorder = 0;
    public static $iCatRightBorder = 0;
    public static $iSocNetId = 0;
    static function Init($SOCNET_GROUP_ID, $IBLOCK_ID)
    {
    }
    static function IsEnabledSocnet()
    {
    }
    static function IsSocNet()
    {
    }
    static function EnableSocnet($bActive = \false)
    {
    }
    static function OnFillSocNetFeaturesList(&$arSocNetFeaturesSettings)
    {
    }
    static function OnFillSocNetMenu(&$arResult, $arParams = array())
    {
    }
    static function OnParseSocNetComponentPath(&$arUrlTemplates, &$arCustomPagesPath, $arParams)
    {
    }
    static function OnInitSocNetComponentVariables(&$arVariableAliases, &$arCustomPagesPath)
    {
    }
    static function FormatEvent_Wiki($arFields, $arParams, $bMail = \false)
    {
    }
    static function FormatComment_Wiki($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    static function AddComment_Wiki($arFields)
    {
    }
    static function RecalcIBlockID($SocNetGroupID)
    {
    }
    static function PrepareTextForFeed($text)
    {
    }
    function __ProcessPath($arUrl, $user_id)
    {
    }
    function BeforeIndexSocNet($bxSocNetSearch, $arFields)
    {
    }
}