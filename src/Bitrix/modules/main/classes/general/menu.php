<?php

class CMenu
{
    var $type = "left";
    var $arMenu = array();
    var $bMenuCalc = \false;
    var $MenuDir = "";
    var $MenuExtDir = "";
    var $MenuTemplate = "";
    var $template = "";
    var $LAST_ERROR = "";
    /** @var CDebugInfo */
    var $debug = \null;
    public function __construct($type = "left")
    {
    }
    function disableDebug()
    {
    }
    function Init($InitDir, $bMenuExt = \false, $template = \false, $onlyCurrentDir = \false)
    {
    }
    function RecalcMenu($bMultiSelect = \false, $bCheckSelected = \true)
    {
    }
    public static function IsItemSelected($tested_link, $cur_page, $cur_page_no_index)
    {
    }
    function GetMenuHtmlEx()
    {
    }
    function GetMenuHtml()
    {
    }
}
class CMenuCustom
{
    var $arItems = array();
    function AddItem($type = "left", $arItem = array())
    {
    }
    function GetItems($type = "left")
    {
    }
}