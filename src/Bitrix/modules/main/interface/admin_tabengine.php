<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminTabEngine
{
    var $name;
    var $bInited = \False;
    var $arEngines = array();
    var $arArgs = array();
    var $bVarsFromForm = \False;
    public function __construct($name, $arArgs = array())
    {
    }
    function SetErrorState($bVarsFromForm = \False)
    {
    }
    function SetArgs($arArgs = array())
    {
    }
    function Check()
    {
    }
    function Action()
    {
    }
    function GetTabs()
    {
    }
    function ShowTab($divName)
    {
    }
}