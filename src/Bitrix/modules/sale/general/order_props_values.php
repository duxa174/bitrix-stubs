<?php

class CAllSaleOrderPropsValue
{
    function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetByID($ID)
    {
    }
    function GetOrderProps($ORDER_ID)
    {
    }
    function GetOrderRelatedProps($ORDER_ID, $arFilter = array())
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    /**
     * @param $id
     * @param $value
     *
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     */
    private static function correctValueToMultiple($id, $value)
    {
    }
    public static function translateLocationIDToCode($id, $orderPropId)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteByOrder($orderID)
    {
    }
}
/** @deprecated */
final class CSaleOrderPropsValueAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    private $fieldProxy = array();
    function __construct(array $select)
    {
    }
    public function addFieldProxy($field)
    {
    }
    public function adapt(array $newProperty)
    {
    }
    public static $allFields = array('ORDER_ID' => 1, 'ORDER_PROPS_ID' => 1, 'NAME' => 1, 'VALUE' => 1, 'CODE' => 1);
}