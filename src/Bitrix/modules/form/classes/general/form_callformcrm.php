<?php

abstract class CAllFormCrm
{
    const LINK_AUTO = 'A';
    const LINK_MANUAL = 'M';
    private static $_ob;
    public static abstract function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array());
    public static function GetByID($ID)
    {
    }
    public static function GetByFormID($FORM_ID)
    {
    }
    public static function GetFields($LINK_ID)
    {
    }
    private static function _addField($FORM_ID, $CRM_ID, $crm_field)
    {
    }
    public static function SetForm($FORM_ID, $arParams)
    {
    }
    public static function onResultAdded($FORM_ID, $RESULT_ID)
    {
    }
    public static function AddLead($FORM_ID, $RESULT_ID, $arLink = \null)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    protected static function _getAllFormFieldsHTML($WEB_FORM_ID, $RESULT_ID, $arAnswers)
    {
    }
    protected static function _getAllFormFields($WEB_FORM_ID, $RESULT_ID, $arAnswers)
    {
    }
    protected static function CheckFields($action, &$arFields)
    {
    }
    protected static function GetFilterOperation($key)
    {
    }
    protected static function PrepareSql(&$arFields, $arOrder, &$arFilter, $arGroupBy, $arSelectFields)
    {
    }
}
class CFormCrmSender
{
    const FIELDS_CACHE_TTL = 2592000;
    private $ID;
    private $arLink;
    private $arCRMFields;
    private $arAuth;
    private $authHash;
    private $lastResult = \null;
    public function __construct($ID, $arAuth = \null)
    {
    }
    public function AddLead($arLeadFields)
    {
    }
    public function GetFields($bReload = \false)
    {
    }
    public function GetAuthHash()
    {
    }
    public function GetLastResult()
    {
    }
    private function _setAuthHash($hash)
    {
    }
    private function _cacheId()
    {
    }
    private function _query($method, $params = array())
    {
    }
}
class _CFormCrmSenderResult
{
    private $bProcess = \false;
    private $result_text;
    private $result;
    private $result_code;
    private $result_error;
    public function __construct($result_text)
    {
    }
    public function code()
    {
    }
    public function data()
    {
    }
    public function error()
    {
    }
    public function field($field)
    {
    }
    private function _process()
    {
    }
}