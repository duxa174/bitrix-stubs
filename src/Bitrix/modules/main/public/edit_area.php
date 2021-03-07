<?php

class CEditArea
{
    var $includeAreaIndex = array();
    var $includeAreaIcons = array();
    var $includeLevel = -1;
    var $arEditAreas = array();
    var $bEditAreas = \false;
    var $bDrawIcons = \false;
    function __GetAreaId()
    {
    }
    function IncludeStringBefore()
    {
    }
    function IncludeStringAfter($arIcons = \false, $arParams = array())
    {
    }
    function DrawIcons($arIcons, $arParams = array())
    {
    }
    function GetJSIcon($arIcon)
    {
    }
    function GetJSIconMenu($arMenu)
    {
    }
    function __GetEditAreas()
    {
    }
    function SetEditArea($areaId, $arIcons)
    {
    }
}
class CComponentPanel
{
    /** @var CBitrixComponent */
    var $component;
    var $componentName;
    var $componentTemplate;
    var $parentComponent;
    var $bComponentEnabled;
    var $bSrcFound = \false;
    var $sSrcFile = "";
    var $iSrcLine = 0;
    public function __construct($component, $componentName, $componentTemplate, $parentComponent, $bComponentEnabled)
    {
    }
    public function GetIcons()
    {
    }
}