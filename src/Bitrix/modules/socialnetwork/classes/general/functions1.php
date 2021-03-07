<?php

class CSocNetTextParser
{
    var $smiles = array();
    var $allow_img_ext = "gif|jpg|jpeg|png";
    var $path_to_smile = \false;
    var $LAST_ERROR = "";
    var $quote_error = 0;
    var $quote_open = 0;
    var $quote_closed = 0;
    var $MaxStringLen = 60;
    var $arFontSize = array(
        1 => 40,
        //"xx-small"
        2 => 60,
        //"x-small"
        3 => 80,
        //"small"
        4 => 100,
        //"medium"
        5 => 120,
        //"large"
        6 => 140,
        //"x-large"
        7 => 160,
    );
    //"xx-large"
    function CSocNetTextParser($strLang = \False, $pathToSmile = \false)
    {
    }
    function convert($text, $bPreview = \True, $arImages = array(), $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N"))
    {
    }
    function killAllTags($text)
    {
    }
    function convert4mail($text)
    {
    }
    function convert_emoticon($code = "", $image = "", $description = "", $servername = "")
    {
    }
    function convert_code_tag($text = "")
    {
    }
    function convert_code_tag_rss($text = "")
    {
    }
    function convert_quote_tag($text = "")
    {
    }
    function convert_quote_tag_rss($text = "")
    {
    }
    function convert_open_quote_tag()
    {
    }
    function convert_open_3_tag_rss()
    {
    }
    function convert_close_quote_tag()
    {
    }
    function convert_close_quote_tag_rss()
    {
    }
    function convert_image_tag($url = "")
    {
    }
    function convert_font_attr($attr, $value = "", $text = "")
    {
    }
    function part_long_words($str1, $str2, $str3)
    {
    }
    function convert_anchor_tag($url, $text, $pref = "")
    {
    }
    function convert_to_rss($text, $arImages = array(), $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N"))
    {
    }
}
class CSocNetTools
{
    function InitImage($imageID, $imageSize, $defaultImage, $defaultImageSize, $imageUrl, $showImageUrl, $urlParams = \false)
    {
    }
    function htmlspecialcharsExArray($array)
    {
    }
    function ResizeImage($aFile, $sizeX, $sizeY)
    {
    }
    function GetDateTimeFormat()
    {
    }
    function Birthday($datetime, $gender, $showYear = "N")
    {
    }
}