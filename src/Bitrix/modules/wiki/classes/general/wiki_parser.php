<?php

class CWikiParser
{
    public $arNowiki = array();
    public $arCode = array();
    public $arLink = array();
    public $arLinkExists = array();
    public $arFile = array();
    public $arVersionFile = array();
    private $postUrl = "";
    private $textType = "";
    function __construct()
    {
    }
    function Parse($text, $type = 'text', $arFile = array(), $arParams = array())
    {
    }
    static function NToBr($text)
    {
    }
    static function BrToN($text)
    {
    }
    static function Clear($text)
    {
    }
    function _processFileCallback($matches)
    {
    }
    function _processExternalLinkCallback($matches)
    {
    }
    function processInternalLink($text)
    {
    }
    function _processInternalLinkPrepareCallback($matches)
    {
    }
    function _processInternalLinkCallback($matches)
    {
    }
    function processToc($text)
    {
    }
    function _codeCallback($matches)
    {
    }
    function _noWikiCallback($matches)
    {
    }
    function _codeReturnCallback($matches)
    {
    }
    function _noWikiReturnCallback($matches)
    {
    }
    function _noWikiReturn2Callback($matches)
    {
    }
    function parseBeforeSave($text, &$arCat = array(), $nameTemplate = "")
    {
    }
    function parseForSearch($text)
    {
    }
}