<?php

/* Categories list*/
class CWikiCategories
{
    private $arItems = array();
    public function addItem($catParams)
    {
    }
    public function getItems()
    {
    }
    public function getItemsNames()
    {
    }
}
class CWikiCategoryParams
{
    public $sName = "";
    public $sTitle = "";
    public $iItemsCount = 0;
    public $bIsRed = \false;
    public $sLink = "";
    private $sPathTemplate = "";
    public function setPathTemplate($sTemplate)
    {
    }
    public function createLinkFromTemplate($sTemplate = "")
    {
    }
    public function clear($bClearTemplate = \false)
    {
    }
}