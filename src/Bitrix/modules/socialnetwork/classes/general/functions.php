<?php

class CSocNetTextParser
{
    var $smiles = array();
    var $allow_img_ext = "gif|jpg|jpeg|png";
    var $image_params = array("width" => 300, "height" => 300, "template" => "popup_image");
    var $LAST_ERROR = "";
    var $path_to_smile = \false;
    var $quote_error = 0;
    var $quote_open = 0;
    var $quote_closed = 0;
    var $MaxStringLen = 125;
    var $code_error = 0;
    var $code_open = 0;
    var $code_closed = 0;
    var $CacheTime = \false;
    var $arFontSize = array(
        0 => 40,
        //"xx-small"
        1 => 60,
        //"x-small"
        2 => 80,
        //"small"
        3 => 100,
        //"medium"
        4 => 120,
        //"large"
        5 => 140,
        //"x-large"
        7 => 160,
    );
    //"xx-large"
    var $word_separator = "\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)\\{\\}";
    var $matchNum = 0;
    var $matchNum2 = 0;
    var $matchType = "html";
    var $matchType2 = "";
    var $matchType3 = "";
    var $matchType4 = "";
    function sonet_sortlen($a, $b)
    {
    }
    function CSocNetTextParser($strLang = \False, $pathToSmile = \false)
    {
    }
    function convert($text, $bPreview = \True, $arImages = array(), $allow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y"), $type = "html")
    {
    }
    function killAllTags($text)
    {
    }
    function convert4mail($text)
    {
    }
    function convert_video($params, $path)
    {
    }
    private function convert_video_callback($m)
    {
    }
    function convert_emoticon($code = "", $image = "", $description = "", $servername = "")
    {
    }
    private function convert_emoticon_callback($m)
    {
    }
    function pre_convert_code_tag($text = "")
    {
    }
    private function pre_convert_code_tag_callback($m)
    {
    }
    function convert_code_tag($text = "", $type = "html")
    {
    }
    private function convert_code_tag_callback($m)
    {
    }
    function convert_quote_tag($text = "", $type = "html")
    {
    }
    private function convert_quote_tag_callback($m)
    {
    }
    function convert_open_tag($marker = "quote", $type = "html")
    {
    }
    private function convert_open_tag_callback($m)
    {
    }
    function convert_close_tag($marker = "quote")
    {
    }
    private function convert_close_tag_callback($m)
    {
    }
    function convert_image_tag($url = "", $type = "html")
    {
    }
    private function convert_image_tag_callback($m)
    {
    }
    function convert_font_attr($attr, $value = "", $text = "")
    {
    }
    private function convert_font_attr_callback($m)
    {
    }
    // Only for public using
    function wrap_long_words($text = "")
    {
    }
    function part_long_words($str)
    {
    }
    private function part_long_words_callback($m)
    {
    }
    function cut_long_words($str)
    {
    }
    function cut_long_words_callback($m)
    {
    }
    function convert_anchor_tag($url, $text, $pref = "")
    {
    }
    function convert_anchor_tag_callback($m)
    {
    }
    function convert_to_rss($text, $arImages = array(), $arAllow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N"), $arParams = array())
    {
    }
    function strip_words($string, $count)
    {
    }
    public static function closetags($html)
    {
    }
    function html_cut($html, $size)
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
    function GetDefaultNameTemplates()
    {
    }
    function GetMyGroups()
    {
    }
    function GetGroupUsers($group_id)
    {
    }
    function IsMyGroup($entity_id)
    {
    }
    function GetMyUsers($user_id = \false)
    {
    }
    function IsMyUser($entity_id)
    {
    }
    function HasLogEventCreatedBy($event_id)
    {
    }
    public static function InitGlobalExtranetArrays($SITE_ID = \SITE_ID)
    {
    }
    public static function GetSubordinateGroups($userID = \false)
    {
    }
}
class CSocNetAllowed
{
    private static $arAllowedEntityTypes = array();
    private static $arAllowedEntityTypesDesc = array();
    private static $arAllowedFeatures = array();
    private static $arAllowedLogEvents = array();
    /* --- entity types --- */
    public static function RunEventForAllowedEntityType()
    {
    }
    public static function addAllowedEntityType($entityType)
    {
    }
    public static function getAllowedEntityTypes()
    {
    }
    /* --- entity types desc --- */
    public static function addAllowedEntityTypeDesc($entityTypeDescCode, $arEntityTypeDesc)
    {
    }
    public static function getAllowedEntityTypesDesc()
    {
    }
    /* --- features --- */
    public static function runEventForAllowedFeature()
    {
    }
    public static function addStandardFeatureList()
    {
    }
    public static function addRestFeatures()
    {
    }
    public static function addAllowedFeature($strFeatureCode, $arFeature)
    {
    }
    public static function updateAllowedFeature($strFeatureCode, $arFeature)
    {
    }
    public static function getAllowedFeatures()
    {
    }
    /* --- log events --- */
    public static function runEventForAllowedLogEvent()
    {
    }
    public static function addAllowedLogEvent($strEventCode, $arLogEvent)
    {
    }
    public static function GetAllowedLogEvents()
    {
    }
    public static function runEvents()
    {
    }
}