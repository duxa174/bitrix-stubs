<?php

class CCSVDataSale
{
    var $sFileName;
    // ������ ��� �����
    var $sContent;
    // ���������� �����
    var $iFileLength;
    // ����� �����
    var $iCurPos = 0;
    // ������� ������� ��� Fetch
    var $cFieldsType = "R";
    // ��� �����: R - � ������������, F - ������������ ������
    var $cDelimiter = ";";
    // ����������� �����
    var $arWidthMap = array();
    // ������ ��������� ����� ���������� ��� ����� ������������ ������
    var $bFirstHeader = \false;
    // � 1 ������ ��������� �����
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