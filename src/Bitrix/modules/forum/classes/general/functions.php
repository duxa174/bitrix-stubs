<?php

class forumTextParser extends \CTextParser
{
    /* @deprecated */
    var $image_params = array();
    /* @deprecated */
    var $pathToUser = "";
    public $imageWidth = 300;
    public $imageHeight = 300;
    public $maxStringLen = 60;
    public $imageHtmlWidth = 0;
    public $imageHtmlHeight = 0;
    public $imageTemplate = "popup_image";
    public $component = \null;
    public $smilesGallery = 0;
    public $arFilesIDParsed = array();
    function __construct($lang = \false, $pathToSmiles = '', $type = \false, $mode = 'full')
    {
    }
    public static function GetFeatures($arForum)
    {
    }
    public static function GetEditorButtons($arParams)
    {
    }
    public static function GetEditorToolbar($arParams)
    {
    }
    function convert($text, $allow = array(), $type = "html", $arFiles = \false)
    {
    }
    function convert4mail($text, $files = \false, $allow = array(), $params = array())
    {
    }
    function ParserFile(&$text, &$obj, $type = "html")
    {
    }
    function convert_open_tag($marker = "quote")
    {
    }
    function convert_close_tag($marker = "quote")
    {
    }
    function convert_image_tag($url = "", $params = "")
    {
    }
    function convert_attachment($fileID = "", $p = "", $type = "", $text = "")
    {
    }
    function convert_to_rss($text, $arImages = array(), $arAllow = array())
    {
    }
    function render_user($fields)
    {
    }
}
//===========================
class CForumSimpleHTMLParser
{
    var $data;
    var $parse_search_needle = '/([^\\[]*)(?:\\[(.*)\\])*/i';
    var $parse_tag = '/((\\<\\s*(\\/)?\\s*([a-z]+).*?(?:(\\/)\\>|\\>))[^<]*)/ism';
    var $parse_beginning_spaces = '/^([\\s]*)/m';
    var $replace_tag_begin = '/^\\s*\\w+\\s*/';
    var $parse_params = '/([a-z]+)\\s*=\\s*(?:([^\\s]*)|(?:[\'"]([^\'"])[\'"]))/im';
    var $lastError = '';
    private $preg = array("counter" => 0, "pattern" => array(), "replace" => array());
    function __construct($data)
    {
    }
    /**
     * @param string $text
     * @return string
     */
    private function prepare($text)
    {
    }
    /**
     * @param array $matches
     * @return string
     */
    public function defendTags($matches)
    {
    }
    function findTagStart($needle)
    {
    }
    function skipTags($tmp)
    {
    }
    function setError($msg)
    {
    }
    function findTagEnd($startIndex)
    {
    }
    function getTagHTML($search)
    {
    }
    function getInnerHTML($startLabel, $endLabel, $multiple = \false)
    {
    }
}
class CForumCacheManager
{
    public function __construct()
    {
    }
    public static function Compress($arDictCollection)
    {
    }
    public static function Expand($arDictCollection)
    {
    }
    public static function SetTag($path, $tags)
    {
    }
    public static function ClearTag($type, $ID = 0)
    {
    }
    public function OnRate($rateID, $arData)
    {
    }
    public function OnMessageAdd($ID, $arFields)
    {
    }
    public function OnMessageUpdate($ID, $arFields, $arMessage = array())
    {
    }
    public function OnMessageDelete($ID, $arMessage)
    {
    }
    public function OnTopicAdd($ID, $arFields)
    {
    }
    public function OnTopicUpdate($ID, $arFields)
    {
    }
    public function OnTopicDelete(&$ID, $arTopic)
    {
    }
    //public function OnForumAdd(&$ID, &$arFields)
    //{
    //}
    public function OnForumUpdate($ID, $arFields)
    {
    }
    //public function OnForumDelete($ID)
    //{
    //}
}
class CForumAutosave
{
    private static $instance;
    private $as;
    public function __construct()
    {
    }
    public static function GetInstance()
    {
    }
    public function LoadScript($arParams)
    {
    }
    public function Init()
    {
    }
    public function Reset()
    {
    }
}
function Error($error)
{
}