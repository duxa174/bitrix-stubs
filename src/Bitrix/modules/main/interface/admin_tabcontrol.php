<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
/*Tab Control*/
class CAdminTabControl
{
    var $name, $unique_name;
    var $tabs = array();
    var $selectedTab;
    var $tabIndex = 0;
    var $bButtons = \false;
    var $arButtonsParams = \false;
    var $bCanExpand;
    var $bPublicModeBuffer = \false;
    var $bShowSettings = \false;
    var $publicModeBuffer_id;
    /** @var CAdminTabEngine */
    var $customTabber;
    var $bPublicMode = \false;
    var $isPublicFrame = \false;
    var $publicObject = 'BX.WindowManager.Get()';
    var $AUTOSAVE = \null;
    protected $tabEvent = \false;
    var $isSidePanel = \false;
    var $publicSidePanel = \false;
    var $isShownSidePanelFields = \false;
    public function __construct($name, $tabs, $bCanExpand = \true, $bDenyAutoSave = \false)
    {
    }
    function SetPublicMode($jsObject = \false)
    {
    }
    /**
     * @param CAdminTabEngine $customTabber
     */
    function AddTabs(&$customTabber)
    {
    }
    function OnAdminTabControlBegin()
    {
    }
    function SetSelectedTab()
    {
    }
    function Begin()
    {
    }
    function ShowTabButtons()
    {
    }
    function BeginNextTab($options = array())
    {
    }
    function EndTab()
    {
    }
    /**
     * @param bool|array $aParams
     */
    function Buttons($aParams = \false)
    {
    }
    protected function getAjaxButtons(array $params)
    {
    }
    public function getSidePanelFields()
    {
    }
    /**
     * @param bool|array $arJSButtons
     */
    function ButtonsPublic($arJSButtons = \false)
    {
    }
    function End()
    {
    }
    function GetSelectedTab()
    {
    }
    function ActiveTabParam()
    {
    }
    // this method is temporarily disabled!
    //string, CAdminException, array("id"=>"name", ...)
    function ShowWarnings($form, $messages, $aFields = \false)
    {
    }
}