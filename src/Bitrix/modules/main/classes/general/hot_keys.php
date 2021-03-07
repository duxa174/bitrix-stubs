<?php

class CHotKeysCode
{
    protected $arList;
    protected $hkCacheTtl = 3600;
    public function GetByID($ID)
    {
    }
    public function GetCodeByClassName($className)
    {
    }
    protected function CleanUrl($url)
    {
    }
    public function GetByUrl($url)
    {
    }
    public function GetIDByTitleObj($strTitleObj)
    {
    }
    protected function CheckFields($arFields, $ID = \false)
    {
    }
    protected function LoadToCache()
    {
    }
    protected function CleanCache()
    {
    }
    protected function ErrOrig()
    {
    }
    public function Delete($ID)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    public function Add($arFields)
    {
    }
    public function GetList($aSort = array(), $arFilter = array(), $showEmptyName = \true)
    {
    }
}
class CHotKeys
{
    /** @var CHotKeysCode */
    protected static $codes;
    /** @var CHotKeys */
    protected static $instance;
    protected static $optUse;
    //Global settings option
    protected static $cacheId;
    protected $hkCacheTtl = 3600;
    protected $arList;
    //For Cache //private
    protected $arServSymb = array(8 => "Back Space", 9 => "Tab", 13 => "Enter", 16 => "Shift", 17 => "Ctrl", 18 => "Alt", 19 => "Pause", 20 => "Caps Lock", 27 => "ESC", 32 => "Space bar", 33 => "Page Up", 34 => "Page Down", 35 => "End", 36 => "Home", 37 => "Left", 38 => "Up", 39 => "Right", 40 => "Down", 45 => "Insert", 46 => "Delete", 96 => "0 (ext)", 97 => "1 (ext)", 98 => "2 (ext)", 99 => "3 (ext)", 100 => "4 (ext)", 101 => "5 (ext)", 102 => "6 (ext)", 105 => "9 (ext)", 106 => "* (ext)", 107 => "+ (ext)", 104 => "8 (ext)", 103 => "7 (ext)", 110 => ". (ext)", 111 => "/ (ext)", 112 => "F1", 113 => "F2", 114 => "F3", 115 => "F4", 116 => "F5", 117 => "F6", 118 => "F7", 119 => "F8", 120 => "F9", 121 => "F10", 122 => "F11", 123 => "F12", 144 => "Num Lock", 186 => ";", 188 => ",", 190 => ".", 191 => "/", 192 => "`", 219 => "[", 220 => "|", 221 => "]", 222 => "'", 189 => "-", 187 => "+", 145 => "Scrol Lock");
    public static $ExpImpFileName;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public static function GetInstance()
    {
    }
    protected function ErrOrig()
    {
    }
    protected function LoadToCache()
    {
    }
    protected function CleanCache()
    {
    }
    protected function GetByCodeID($codeID)
    {
    }
    public function GetUIDbyHID($hkID)
    {
    }
    protected function GlueSelfToCode(&$arCode)
    {
    }
    public function GetCodeByClassName($className, $name = "", $code = "")
    {
    }
    public function GetCodeByUrl($url)
    {
    }
    public function GetTitle($strTitleObj, $forHint = \false)
    {
    }
    //if obj has unique id = b_hot-keys_code.TITLE_OBJ
    public function SetTitle($className, $forHint = \false)
    {
    }
    public function PrintJSExecs($execs, $controlName = "", $scriptTags = \true, $checkHK = \false)
    {
    }
    //On Error Throws exception+message and return false
    protected function CheckFields($arFields, $ID = \false)
    {
    }
    public function GetList($aSort = array(), $arFilter = array())
    {
    }
    public function Add($arFields)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    public function Delete($ID)
    {
    }
    //sets (copy) keys_strings from user with id=0 to userID
    public function SetDefault($userID)
    {
    }
    public function ShowHKAsChar($hotKeysString)
    {
    }
    protected function CheckKeysString($keysString)
    {
    }
    public function PrintPhpToJSVars()
    {
    }
    public function IsActive()
    {
    }
    // Top panel buttons
    public function PrintTPButton(&$arPanelButton, $parent = "")
    {
    }
    protected function IsDefaultOpt()
    {
    }
    protected function SetNotDefaultOpt()
    {
    }
    //for old stickers hotkeys compability
    protected function CheckStickers()
    {
    }
    public function PrintGlobalUrlVar()
    {
    }
    /**
     * Inserts default hot-keys combination to execute some code to all users
     * wich uses hot keys
     *
     * @param int $codeID - code ID to execute (CHotKeysCode->Add())
     * @param string $keysString - default combination of keys ("Ctrl+Shift+76")
     * @return int Count of users to wich adds hot-keys
     * */
    public function AddDefaultKeyToAll($codeID, $keysString)
    {
    }
    /**
     * Exports current user's binded hot keys and using custom codes
     * @return string exported file name
     * */
    public function Export()
    {
    }
    /**
     * Imports hot keys from file and binds them to user
     * @param string $fileName - absolute path to file with serialized data
     * @param int $userID - user's id wich recieves our hot-keys from file
     * @return int count added hot keys
     * */
    public function Import($fileName, $userID)
    {
    }
}