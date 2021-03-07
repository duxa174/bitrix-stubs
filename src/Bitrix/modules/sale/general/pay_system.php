<?php

/** @deprecated */
class CAllSalePaySystem
{
    static function DoProcessOrder(&$arOrder, $paySystemId, &$arErrors)
    {
    }
    public static function DoLoadPaySystems($personType, $deliveryId = 0, $arDeliveryMap = \null)
    {
    }
    function GetByID($id, $personTypeId = 0)
    {
    }
    protected static function getAliases()
    {
    }
    function CheckFields($ACTION, &$arFields)
    {
    }
    function Update($id, $arFields)
    {
    }
    function Delete($id)
    {
    }
    public static function getNewIdsFromOld($ids, $personTypeId = \null)
    {
    }
    public static function getPaySystemPersonTypeIds($paySystemId)
    {
    }
    public static function GetList($arOrder = array("SORT" => "ASC", "NAME" => "ASC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    private static function getAlias($key)
    {
    }
    private static function getAliasBack($value)
    {
    }
    /**
     * @param $arFields
     * @return bool|int
     * @throws Exception
     */
    public static function Add($arFields)
    {
    }
}