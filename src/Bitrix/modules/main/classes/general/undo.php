<?php

class CUndo
{
    public static function Add($params = array())
    {
    }
    public static function Escape($ID)
    {
    }
    public static function GetList($Params = array())
    {
    }
    public static function Delete($ID)
    {
    }
    public static function CleanUpOld()
    {
    }
    public static function ShowUndoMessage($ID)
    {
    }
    public static function CheckNotifyMessage()
    {
    }
}
class CAutoSave
{
    /*'ID', 'COPY_ID', 'ENTITY_ID', 'mid', 'WEB_FORM_ID', 'CONTRACT_ID', 'COURSE_ID', 'IBLOCK_SECTION_ID', 'IBLOCK_ID', 'CHANNEL_ID', 'VOTE_ID', 'DICTIONARY_ID', 'CHAPTER_ID', 'LESSON_ID', */
    private $formId = '';
    private $autosaveId = '';
    private $bInited = \false;
    private $bSkipRestore = \false;
    private static $bAllowed = \null;
    private static $arImportantParams = array('LANG' => 1, 'SITE' => 1, 'PATH' => 1, 'TYPE' => 1, 'EVENT_NAME' => 1, 'SHOW_ERROR' => 1, 'NAME' => 1, 'FULL_SRC' => 1, 'ACTION' => 1, 'LOGICAL' => 1, 'ADMIN' => 1, 'ADDITIONAL' => 1, 'NEW' => 1, 'MODE' => 1, 'CONDITION' => 1, 'QUESTION_TYPE' => 1);
    public function __construct()
    {
    }
    public function Init($admin = \true)
    {
    }
    public function checkRestore()
    {
    }
    public function Reset()
    {
    }
    public function Set($data)
    {
    }
    public function Restore($arFields)
    {
    }
    public function GetID()
    {
    }
    private static function _GetFormID()
    {
    }
    public static function _Restore($arFields)
    {
    }
    public static function Allowed()
    {
    }
}