<?php

/**
 * Class CAllSaleDelivery
 * @deprecated
 */
class CAllSaleDelivery
{
    const CONN_ENTITY_NAME = 'Bitrix\\Sale\\Delivery\\DeliveryLocation';
    /**
     * @param $val
     * @param $key
     * @param $operation
     * @param $negative
     * @param $field
     * @param $arField
     * @param $arFilter
     * @return bool|string
     * @deprecated
     * @internal
     */
    public static function PrepareLocation24Where($val, $key, $operation, $negative, $field, &$arField, &$arFilter)
    {
    }
    /**
     * @param $arOrder
     * @param $deliveryCode
     * @param $arErrors
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     * @internal
     * @deprecated
     */
    static function DoProcessOrder(&$arOrder, $deliveryCode, &$arErrors)
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\Delivery\Services\Manager
     */
    public static function DoLoadDelivery($location, $locationZip, $weight, $price, $currency, $siteId = \null, $arShoppingCart = array())
    {
    }
    /**
     * @deprecated Use \Bitrix\Sale\Delivery\Services\Table::getById().
     */
    public static function GetByID($ID)
    {
    }
    /**
     * @param array $arFilter
     * @return bool|CDBResult
     * @deprecated
     */
    function GetLocationList($arFilter = array())
    {
    }
    /**
     * @deprecated
     * @internal
     */
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    /**
     * @param $ID
     * @param $locations
     * @internal
     * @deprecated
     */
    public static function SetDeliveryLocationPro($ID, $locations)
    {
    }
    /**
     * @deprecated
     */
    public static function Update($oldId, $arFields, $arOptions = array())
    {
    }
    /**
     * @deprecated
     */
    public static function Delete($ID)
    {
    }
    /**
     * The function select delivery and paysystem
     *
     * @param array $arFilter - array to filter
     * @return object $dbRes - object result
     * @deprecated
     */
    public static function GetDelivery2PaySystem($arFilter = array())
    {
    }
    /**
     * The function updates delivery and paysystem
     *
     * @param int $ID - code delivery
     * @param array $arFields - paysytem
     * @return int $ID - code delivery
     * @deprecated
     */
    static function UpdateDeliveryPay($ID, $arFields)
    {
    }
    /**
     * @param $fieldName
     * @param $filter
     * @return bool
     */
    protected static function getFilterValue($fieldName, $filter)
    {
    }
    /**
     * @param $fieldName
     * @param $filter
     * @return bool
     */
    protected static function isFieldInFilter($fieldName, $filter)
    {
    }
    /**
     * @param $fieldName
     * @param $filter
     * @return bool
     */
    protected static function isFieldInFilter2($fieldName, $filter)
    {
    }
    /**
     * @param $name
     * @return bool
     */
    protected static function hasNewServiceField($name)
    {
    }
    /**
     * @param array $filter
     * @return array
     */
    protected static function convertFilterOldToNew(array $filter = array())
    {
    }
    /**
     * @param $groupBy
     * @return array
     */
    protected static function convertGroupOldToNew($groupBy)
    {
    }
    /**
     * @param array $selectFields
     * @return array
     */
    protected static function convertSelectOldToNew(array $selectFields = array())
    {
    }
    /**
     * @param $fieldName
     * @param array $select
     * @return bool
     */
    protected static function isFieldSelected($fieldName, array $select)
    {
    }
    /**
     * @param array $restriction
     * @param array $filter
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected static function checkRestrictionFilter(array $restriction, array $filter)
    {
    }
    /**
     * @param array $service
     * @param array $restriction
     * @param array $selectedFields
     * @return array
     */
    protected static function getSelectedRestrictionField(array $service, array $restriction, array $selectedFields)
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool $arGroupBy
     * @param bool $arNavStartParams
     * @param array $arSelectFields
     * @return \CDBResult
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    public static function GetList($arOrder = array("SORT" => "ASC", "NAME" => "ASC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array('*'))
    {
    }
    /**
     * @param $arFields
     * @param array $arOptions
     * @return bool|int
     * @throws Exception
     * @deprecated
     */
    static function Add($arFields, $arOptions = array())
    {
    }
    protected static function createD2LTable()
    {
    }
    /**
     * @param bool|false $renameTable
     * @return \Bitrix\Sale\Result
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     * @internal
     */
    public static function convertToNew($renameTable = \false)
    {
    }
    /**
     * @param bool|false $renameTable
     * @return string
     * @internal
     */
    public static function convertToNewAgent($renameTable = \false)
    {
    }
    /**
     * @return string
     * @internal
     */
    public static function convertPSRelationsAgent()
    {
    }
    /**
     * @return \Bitrix\Sale\Result
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentException
     * @internal
     */
    public static function convertPSRelations()
    {
    }
    /**
     * @param Shipment $shipment
     * @return array Old order.
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function convertOrderNewToOld(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $oldOrder
     * @return Shipment
     * @internal
     */
    public static function convertOrderOldToNew(array $oldOrder)
    {
    }
    /**
     * @return string
     * @throws Exception
     * @internal
     */
    public static function createNoDeliveryServiceAgent()
    {
    }
    /**
     * @param string $code Delivery service code.
     * @return int Delivery id.
     */
    public static function getIdByCode($code)
    {
    }
    /**
     * @param int $id Delivery service id.
     * @return string Delivery service code.
     */
    public static function getCodeById($id)
    {
    }
}