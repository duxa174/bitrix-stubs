<?php

class CListFile
{
    private $_list_id;
    private $_section_id;
    private $_element_id;
    private $_field_id;
    private $_file_id;
    private $_socnet_group_id;
    private $_file;
    private $_width = 0;
    private $_height = 0;
    /** @var $_counter int  */
    private static $_counter = 0;
    function __construct($list_id, $section_id, $element_id, $field_id, $file_id)
    {
    }
    function SetSocnetGroup($socnet_group_id)
    {
    }
    function GetInfoHTML($params = array())
    {
    }
    function GetInputHTML($params = array())
    {
    }
    function GetImgSrc($params = array())
    {
    }
    function GetImgHtml($params = array())
    {
    }
    function GetLinkHtml($params = array())
    {
    }
    function GetWidth()
    {
    }
    function GetHeight()
    {
    }
    function GetSize()
    {
    }
    function IsImage()
    {
    }
}