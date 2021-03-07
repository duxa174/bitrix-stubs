<?php

class CList
{
    /** @var CListFieldList */
    var $fields = \null;
    var $new_ids = array();
    protected $iblock_id = 0;
    function __construct($iblock_id)
    {
    }
    function is_field($type_id)
    {
    }
    function is_readonly($field_id)
    {
    }
    function GetFields()
    {
    }
    function GetAllTypes()
    {
    }
    function GetAvailableTypes($ID = "")
    {
    }
    function DeleteField($field_id)
    {
    }
    function AddField($arFields)
    {
    }
    function GetNewID($TEMP_ID)
    {
    }
    function UpdateField($field_id, $arFields)
    {
    }
    function Save()
    {
    }
    public static function UpdatePropertyList($prop_id, $list)
    {
    }
    function ActualizeDocumentAdminPage($url)
    {
    }
    function OnGetDocumentAdminPage($arElement)
    {
    }
    function OnSearchGetURL($arFields)
    {
    }
    function getUrlByIblockId($IBLOCK_ID)
    {
    }
}