<?php

class blogTextParser extends \CTextParser
{
    public $bPublic = \false;
    public $pathToUserEntityId = \false;
    public $pathToUserEntityType = \false;
    public $smilesGallery = 0;
    public $maxStringLen = 100;
    private $arImages = array();
    public $showedImages = array();
    //	max sizes for show image in popup
    const IMAGE_MAX_SHOWING_WIDTH = 1000;
    const IMAGE_MAX_SHOWING_HEIGHT = 1000;
    public function __construct($strLang = \False, $pathToSmile = \false, $arParams = array())
    {
    }
    public function convert($text, $bPreview = \True, $arImages = array(), $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y", "TABLE" => "Y", "CUT_ANCHOR" => "N", "SHORT_ANCHOR" => "N"), $arParams = array())
    {
    }
    public function ParserCut(&$text, &$obj)
    {
    }
    public function ParserCutAfter(&$text, &$obj)
    {
    }
    public function ParserBlogImageBefore(&$text, &$obj = \null)
    {
    }
    public function ParserBlogImage(&$text, &$obj)
    {
    }
    private function convertBlogImage($matches)
    {
    }
    private function convertBlogImageMail($matches)
    {
    }
    public function ParserTag(&$text, &$obj)
    {
    }
    private function convertBlogTag($matches)
    {
    }
    private function convert_blog_tag($name = "")
    {
    }
    function convert4im($text, $arImages = array())
    {
    }
    public function convert4mail($text, $arImages = array())
    {
    }
    private function convert_blog_image($p1 = "", $imageId = "", $p2 = "", $type = "html")
    {
    }
    public function convert_to_rss($text, $arImages = array(), $arAllow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y", "TABLE" => "Y", "CUT_ANCHOR" => "N"), $bPreview = \true, $arParams = array())
    {
    }
    function convert_open_tag($marker = "quote")
    {
    }
    function blogConvertVideo(&$arParams)
    {
    }
    public static function killAllTags($text)
    {
    }
    function render_user($fields)
    {
    }
    private static function getEditorDefaultFeatures()
    {
    }
    private static function getEditorExtendFeatures()
    {
    }
    public static function GetEditorToolbar($params, $arResult = \null)
    {
    }
    public function getEditorButtons($blog, $arResult)
    {
    }
}
class CBlogTools
{
    public static function htmlspecialcharsExArray($array)
    {
    }
    function ResizeImage($aFile, $sizeX, $sizeY)
    {
    }
    function GetDateTimeFormat()
    {
    }
    public static function DeleteDoubleBR($text)
    {
    }
    function blogUFfileEdit($arResult, $arParams)
    {
    }
    function blogUFfileShow($arResult, $arParams)
    {
    }
}