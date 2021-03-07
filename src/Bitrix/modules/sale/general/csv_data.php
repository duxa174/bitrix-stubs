<?php

class CCSVDataSale
{
    var $sFileName;
    // полное имя файла
    var $sContent;
    // содержимое файла
    var $iFileLength;
    // длина файла
    var $iCurPos = 0;
    // текущая позиция при Fetch
    var $cFieldsType = "R";
    // тип полей: R - с разделителем, F - фиксированой ширины
    var $cDelimiter = ";";
    // разделитель полей
    var $arWidthMap = array();
    // массив координат меток разделения для полей фиксированой ширины
    var $bFirstHeader = \false;
    // в 1 строке заголовки полей
    function CCSVData($fields_type = "R", $first_header = \false)
    {
    }
    function LoadFile($filename)
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