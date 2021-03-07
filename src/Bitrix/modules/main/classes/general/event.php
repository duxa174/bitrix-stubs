<?php

class CAllEvent
{
    public static function CheckEvents()
    {
    }
    public static function ExecuteEvents()
    {
    }
    public static function CleanUpAgent()
    {
    }
    public static function SendImmediate($event, $lid, $arFields, $Duplicate = "Y", $message_id = "", $files = array(), $languageId = '', array $filesContent = [])
    {
    }
    public static function Send($event, $lid, $arFields, $Duplicate = "Y", $message_id = "", $files = array(), $languageId = '')
    {
    }
    public static function fieldencode($s)
    {
    }
    public static function ExtractMailFields($str)
    {
    }
    public static function GetSiteFieldsArray($site_id)
    {
    }
    public static function ReplaceTemplate($str, $ar, $bNewLineToBreak = \false)
    {
    }
    /**
     * @deprecated See \Bitrix\Main\Mail\Mail::is8Bit()
     */
    public static function Is8Bit($str)
    {
    }
    /**
     * @deprecated See \Bitrix\Main\Mail\Mail::encodeMimeString()
     */
    public static function EncodeMimeString($text, $charset)
    {
    }
    /**
     * @deprecated See \Bitrix\Mail\Mail::encodeSubject()
     */
    public static function EncodeSubject($text, $charset)
    {
    }
    /**
     * @deprecated See \Bitrix\Main\Mail\Mail::encodeHeaderFrom()
     */
    public static function EncodeHeaderFrom($text, $charset)
    {
    }
    /**
     * @deprecated See \Bitrix\Main\Mail\Mail::getMailEol()
     */
    public static function GetMailEOL()
    {
    }
    /**
     * @deprecated See \Bitrix\Main\Mail\Event::handleEvent()
     */
    public static function HandleEvent($arEvent)
    {
    }
}
class CAllEventMessage
{
    var $LAST_ERROR;
    public function CheckFields($arFields, $ID = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // New event message template
    ///////////////////////////////////////////////////////////////////
    public function Add($arFields)
    {
    }
    public function Update($ID, $arFields)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Query
    ///////////////////////////////////////////////////////////////////
    public static function GetByID($ID)
    {
    }
    public static function GetSite($event_message_id)
    {
    }
    public static function GetLang($event_message_id)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function GetListDataModifier($data)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array())
    {
    }
}
class CEventType
{
    public static function CheckFields($arFields = array(), $action = "ADD", $ID = array())
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($arID = array(), $arFields = array())
    {
    }
    public static function Delete($arID)
    {
    }
    public static function GetList($arFilter = array(), $arOrder = array())
    {
    }
    public static function GetListExFetchDataModifier($data)
    {
    }
    public static function GetListEx($arOrder = array(), $arFilter = array(), $arParams = array())
    {
    }
    ///////////////////////////////////////////////////////////////////
    // selecting type
    ///////////////////////////////////////////////////////////////////
    public static function GetByID($ID, $LID)
    {
    }
    public static function GetFilterOperation($key)
    {
    }
}
class _CEventTypeResult extends \CDBResult
{
    var $type = "type";
    var $LID = \LANGUAGE_ID;
    var $SITE_ID = \SITE_ID;
    public function __construct($res, $arParams = array())
    {
    }
    function Fetch()
    {
    }
}
class CDBResultEventMultiResult extends \CDBResult
{
    public $affectedRowsCount;
    public function AffectedRowsCount()
    {
    }
}