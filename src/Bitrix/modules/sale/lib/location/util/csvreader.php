<?php

namespace Bitrix\Sale\Location\Util;

final class CSVReader extends \CCSVData
{
    const FILE_ENCODING = 'UTF-8';
    private $header = array();
    private $useHeader = false;
    private $legacy = false;
    private $convertCharset = true;
    private $callbacks = array();
    public function __construct($fields_type = "R", $convertCharset = true)
    {
    }
    public function LoadFile($filename, $firstHeader = true)
    {
    }
    public function SetFirstHeader($first_header = false)
    {
    }
    public function ReadHeader()
    {
    }
    public function FetchAssoc()
    {
    }
    // this function should not be here
    public function CheckFileIsLegacy()
    {
    }
    public function ReadBlockLowLevel(&$bytesRead = false, $lineLimit = false)
    {
    }
    public function ReadBlock($file, &$bytesRead = false, $lineLimit = false)
    {
    }
    public function GetFileSize()
    {
    }
    public function GetHeaderAssoc()
    {
    }
    public function SetCharsetConvert($switch)
    {
    }
    public function AddEventCallback($event, $callback)
    {
    }
    private function GetAssocLineByHeader($line, $header)
    {
    }
}