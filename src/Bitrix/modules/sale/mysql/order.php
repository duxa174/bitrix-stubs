<?php

class CSaleOrder extends \CAllSaleOrder
{
    function Add($arFields)
    {
    }
    function Update($ID, $arFields, $bDateUpdate = \true)
    {
    }
    function PrepareGetListArray($key, &$arFields, &$arPropIDsTmp)
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @param array $arOptions
     * @return bool|CDBResult
     */
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array(), $arOptions = array())
    {
    }
    function GetLockStatus($ID, &$lockedBY, &$dateLock)
    {
    }
    /*
     * Change order to add stories
     *
     * @param array $arOrderOld old order fields
     * @return bool true
     */
    public function AddOrderHistory($OldFields, $NewFields)
    {
    }
}