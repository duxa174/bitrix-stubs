<?php

class CSearchLanguage
{
    var $_abc = array();
    var $_lang_id;
    var $_lang_bigramm_cache;
    var $_trigrams = array();
    var $_has_bigramm_info = \null;
    var $_bigrams = \null;
    function __construct($lang_id)
    {
    }
    //Function loads language class
    static function GetLanguage($sLang)
    {
    }
    //Reads file with trigrams (combinations not allowed in the words)
    function LoadTrigrams($dir_name)
    {
    }
    function HasTrigrams()
    {
    }
    //Check phrase against trigrams
    function CheckTrigrams($arScanCodes)
    {
    }
    //This function returns positions of the letters
    //on the keyboard. This one is default English layout
    function GetKeyboardLayout()
    {
    }
    function ConvertFromScancode($arScancode)
    {
    }
    function StrToArray($str)
    {
    }
    //This function converts text between layouts
    static function ConvertKeyboardLayout($text, $from, $to)
    {
    }
    //This function converts text into array of character positions
    //on the keyboard. Not defined chars turns into "false" value.
    function ConvertToScancode($text, $strict = \false, $binary = \false)
    {
    }
    function PreGuessLanguage($text, $lang = \false)
    {
    }
    public static function GuessLanguage($text, $lang = \false)
    {
    }
    //Compare to results of text analysis
    static function cmp($a, $b)
    {
    }
    //Function returns distance of the text (sequence of scan codes)
    //from language model
    function GetDeviation($arScanCodes)
    {
    }
    //Function returns bigramms of the text (array of scancodes)
    //For example "FAT RAT" will be
    //array("FA", "AT", "RA", "AT")
    //This is model of the text
    function ConvertToBigramms($arScancodes)
    {
    }
    function HasBigrammInfo()
    {
    }
    //Function returns model of the language
    function GetBigrammScancodeFreq()
    {
    }
}