<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CComponentAjax
{
    var $componentID = '';
    var $bAjaxSession = \false;
    var $bIFrameMode = \false;
    var $componentName;
    var $componentTemplate;
    var $arParams;
    var $arCSSList;
    var $arHeadScripts;
    var $bShadow = \true;
    var $bJump = \true;
    var $bStyle = \true;
    var $bHistory = \true;
    var $bWrongRedirect = \false;
    var $buffer_start_counter;
    var $buffer_finish_counter;
    var $bRestartBufferCalled;
    var $RestartBufferHandlerId;
    var $LocalRedirectHandlerId;
    var $currentUrl = \false;
    var $dirname_currentUrl = \false;
    var $basename_currentUrl = \false;
    var $__nav_params = \null;
    public function __construct($componentName, $componentTemplate, &$arParams, $parentComponent)
    {
    }
    /**
     * @param CBitrixComponent $parent
     * @return bool
     */
    function _checkParent($parent)
    {
    }
    function __BufferDelimiter()
    {
    }
    function __removeHandlers()
    {
    }
    function RestartBufferHandler()
    {
    }
    function LocalRedirectHandler(&$url)
    {
    }
    function CheckSession()
    {
    }
    function __GetSEFRealUrl($url)
    {
    }
    function __isAjaxURL($url)
    {
    }
    function _checkPcreLimit($data)
    {
    }
    function __PrepareLinks(&$data)
    {
    }
    function __PrepareForms(&$data)
    {
    }
    function __prepareScripts(&$data)
    {
    }
    function _PrepareAdditionalData()
    {
    }
    function _PrepareData()
    {
    }
    function Process()
    {
    }
    // will be called as delay function and not in class entity context
    public static function executeEvents(&$content = '')
    {
    }
}