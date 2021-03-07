<?php

/** @deprecated */
class CAllSalePaySystemAction
{
    const GET_PARAM_VALUE = 1;
    function GetByID($id)
    {
    }
    function CheckFields($ACTION, &$arFields)
    {
    }
    function Delete($id)
    {
    }
    static function SerializeParams($arParams)
    {
    }
    static function UnSerializeParams($strParams)
    {
    }
    function GetParamValue($key, $defaultValue = \null)
    {
    }
    static function alarm($itemId, $description)
    {
    }
    static function writeToEventLog($itemId, $description)
    {
    }
    public function OnEventLogGetAuditTypes()
    {
    }
    static function showAlarmMessage()
    {
    }
    function InitParamArrays($arOrder, $orderID = 0, $psParams = "", $relatedData = array(), $payment = array(), $shipment = array(), $registryType = \Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER)
    {
    }
    function IncludePrePaySystem($fileName, $bDoPayAction, &$arPaySysResult, &$strPaySysError, &$strPaySysWarning, $BASE_LANG_CURRENCY = \False, $ORDER_PRICE = 0.0, $TAX_PRICE = 0.0, $DISCOUNT_PRICE = 0.0, $DELIVERY_PRICE = 0.0)
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function getAliases()
    {
    }
    private static function getAlias($key)
    {
    }
    public static function checkRestriction($restriction, $filter)
    {
    }
    public static function getParamsByConsumer($consumer, $personTypeId)
    {
    }
    function Add($fields)
    {
    }
    function Update($id, $fields)
    {
    }
    public static function prepareParamsForBusVal($id, $fields)
    {
    }
    public static function convertPsBusVal()
    {
    }
    public static function getOldToNewHandlersMap()
    {
    }
    public static function getCodesAliases($handler)
    {
    }
}