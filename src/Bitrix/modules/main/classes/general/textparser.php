<?php

class CTextParser
{
    public $type = "html";
    public $serverName = "";
    public $preg;
    public $imageWidth = 800;
    public $imageHeight = 800;
    public $maxStringLen = 0;
    public $maxAnchorLength = 40;
    //https://www.w3.org/TR/CSS2/fonts.html#propdef-font-size
    public $arFontSize = array(1 => "xx-small", 2 => "small", 3 => "medium", 4 => "large", 5 => "x-large", 6 => "xx-large");
    public $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "EMOJI" => "Y", "SMILES" => "Y", "CLEAR_SMILES" => "N", "NL2BR" => "N", "VIDEO" => "Y", "TABLE" => "Y", "CUT_ANCHOR" => "N", "SHORT_ANCHOR" => "N", "ALIGN" => "Y", "USERFIELDS" => "N", "USER" => "Y", "P" => "Y", "TAG" => "N");
    public $smiles = \null;
    protected $wordSeparator = "\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)\\{\\}";
    protected $smilePatterns = \null;
    protected $smileReplaces = \null;
    protected static $repoSmiles = array();
    public $smilesGallery = \CSmileGallery::GALLERY_DEFAULT;
    protected $defended_urls = array();
    protected $anchorSchemes = \null;
    protected $userField;
    public $bMobile = \false;
    public $LAZYLOAD = "N";
    protected $tagPattern = "/([\\s]+|^)#([^\\s,\\.\\[\\]<>]+)/is";
    public function __construct()
    {
    }
    /** @deprecated */
    public function CTextParser()
    {
    }
    public function getAnchorSchemes()
    {
    }
    public function setAnchorSchemes($schemes)
    {
    }
    protected function initSmiles()
    {
    }
    protected function initSmilePatterns()
    {
    }
    protected static function chr($a)
    {
    }
    protected static function strpos($s, $a)
    {
    }
    public function convertText($text)
    {
    }
    public function defendTags($matches)
    {
    }
    function defended_tags($text, $tag = 'replace')
    {
    }
    function convert4mail($text)
    {
    }
    public function convertVideo($matches)
    {
    }
    protected function convert_video($arParams)
    {
    }
    function convertEmoticon($matches)
    {
    }
    function convert_emoticon($code = "", $image = "", $description = "", $width = "", $height = "", $descriptionDecode = \false, $imageDefinition = \CSmile::IMAGE_SD)
    {
    }
    public function convertCode($matches)
    {
    }
    public function convertQuote($matches)
    {
    }
    function convert_quote_tag($text = "")
    {
    }
    function convert_spoiler_tag($text, $title = "")
    {
    }
    function convert_cut_tag($text, $title = "")
    {
    }
    function renderSpoiler($text, $title = "")
    {
    }
    function convert_open_tag($marker = "quote")
    {
    }
    function convert_close_tag($marker = "quote")
    {
    }
    public function convertImage($matches)
    {
    }
    function convert_image_tag($url = "", $params = "")
    {
    }
    public function convertFont($matches)
    {
    }
    public function convertFontSize($matches)
    {
    }
    public function convertFontColor($matches)
    {
    }
    public function stripAllTags($text)
    {
    }
    function convert_font_attr($attr, $value = "", $text = "")
    {
    }
    function convert_userfields($matches)
    {
    }
    function convert_user($userId = 0, $userName = "")
    {
    }
    protected function render_user($fields)
    {
    }
    public function getTagPattern()
    {
    }
    function cleanTag($tag)
    {
    }
    function detectTags($text)
    {
    }
    function convert_tag($tag = array())
    {
    }
    // Only for public using
    function wrap_long_words($text = "")
    {
    }
    public function partWords($matches)
    {
    }
    function part_long_words($str)
    {
    }
    public function cutWords($matches)
    {
    }
    function cut_long_words($str)
    {
    }
    protected function parseSpaces($matches)
    {
    }
    public function convertAnchor($matches)
    {
    }
    function convert_anchor_tag($url, $text, $pref = "")
    {
    }
    private function preconvertUrl($matches)
    {
    }
    public function preconvertAnchor($matches)
    {
    }
    function pre_convert_anchor_tag($url, $text = "", $str = "")
    {
    }
    function post_convert_anchor_tag($str)
    {
    }
    function strip_words($string, $count)
    {
    }
    function closeTags($html)
    {
    }
    public static function clearAllTags($text)
    {
    }
    function html_cut($html, $size)
    {
    }
    function convertHTMLToBB($html = "", $allow = \null)
    {
    }
    public static function TextParserHTMLToBBHack(&$text, &$TextParser)
    {
    }
}