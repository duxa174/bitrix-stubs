<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */
class CCSVData
{
    var $sFileName;
    // full file name
    var $sContent;
    // file contents
    var $iFileLength;
    // file length
    var $iCurPos = 0;
    // current file position Fetch
    var $cFieldsType = "R";
    // fields type: R - with delimiter, F - fixed width
    var $cDelimiter = ";";
    // field delimiter
    var $arWidthMap = array();
    // array of delimiters positions in fixed width case
    var $bFirstHeader = \false;
    // 1 row - columns titles
    var $__file = \null;
    var $__buffer = "";
    var $__buffer_pos = 0;
    var $__buffer_size = 0;
    var $__hasBOM = \false;
    public function __construct($fields_type = "R", $first_header = \false)
    {
    }
    function LoadFile($filename)
    {
    }
    public function CloseFile()
    {
    }
    function CheckUTF8BOM()
    {
    }
    function SetFieldsType($fields_type = "R")
    {
    }
    function SetDelimiter($delimiter = ";")
    {
    }
    function SetFirstHeader($first_header = \false)
    {
    }
    function GetFirstHeader()
    {
    }
    function SetWidthMap($arMap)
    {
    }
    function FetchDelimiter()
    {
    }
    function FetchWidth()
    {
    }
    function Fetch()
    {
    }
    function IncCurPos()
    {
    }
    function MoveFirst()
    {
    }
    function GetPos()
    {
    }
    function SetPos($iCurPos = 0)
    {
    }
    function SaveFile($filename, $arFields)
    {
    }
}