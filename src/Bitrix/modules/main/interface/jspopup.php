<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CJSPopup
{
    var $__form_name = 'bx_popup_form';
    var $post_args;
    var $title = '';
    var $bDescriptionStarted = \false;
    var $bContentStarted = \false;
    var $bButtonsStarted = \false;
    var $suffix = '';
    var $jsPopup = 'BX.WindowManager.Get()';
    var $bContentBuffered;
    var $cont_id;
    var $bInited = \false;
    /*
    $arConfig = array(
    	'TITLE' => 'Popup window title',
    	'ARGS' => 'param1=values1&param2=value2', // additional GET arguments for POST query
    )
    */
    public function __construct($title = '', $arConfig = array())
    {
    }
    function InitSystem()
    {
    }
    function _InitSystem()
    {
    }
    function InitScripts()
    {
    }
    function SetAdditionalArgs($additional_args = '')
    {
    }
    function SetTitle($title = '')
    {
    }
    function GetFormName()
    {
    }
    function SetSuffix($suffix)
    {
    }
    function ShowTitlebar($title = '')
    {
    }
    function StartDescription($icon = \false)
    {
    }
    function EndDescription()
    {
    }
    function StartContent($arAdditional = array())
    {
    }
    function EndContent()
    {
    }
    function StartButtons()
    {
    }
    function EndButtons()
    {
    }
    function ShowStandardButtons($arButtons = array('save', 'cancel'))
    {
    }
    function ShowValidationError($errortext)
    {
    }
    function ShowError($errortext, $title = '')
    {
    }
    function Close($bReload = \true, $back_url = \false)
    {
    }
}
class CJSPopupOnPage extends \CJSPopup
{
    function InitSystem()
    {
    }
    // this SHOULD be empty!
}