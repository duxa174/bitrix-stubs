<?php

/** @deprecated */
class CSaleOrderProps
{
    /*
     * Checks order properties' values on the basis of order properties' restrictions
     *
     * @param array $arOrder - order data
     * @param array $arOrderPropsValues - array of order properties values to be checked
     * @param array $arErrors
     * @param array $arWarnings
     * @param int $paysystemId - id of the paysystem, will be used to get order properties related to this paysystem
     * @param int $deliveryId - id of the delivery sysetm, will be used to get order properties related to this delivery system
     */
    static function DoProcessOrder(&$arOrder, $arOrderPropsValues, &$arErrors, &$arWarnings, $paysystemId = 0, $deliveryId = "", $arOptions = array())
    {
    }
    /*
     * Updates/adds order properties' values
     *
     * @param array $orderId
     * @param array $personTypeId
     * @param array $arOrderProps - array of order properties values
     * @param array $arErrors
     */
    static function DoSaveOrderProps($orderId, $personTypeId, $arOrderProps, &$arErrors, $paysystemId = 0, $deliveryId = "")
    {
    }
    function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetByID($ID)
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
    function Delete($ID)
    {
    }
    function GetRealValue($propertyID, $propertyCode, $propertyType, $value, $lang = \false)
    {
    }
    /*
     * Get order property relations
     *
     * @param array $arFilter with keys: PROPERTY_ID, ENTITY_ID, ENTITY_TYPE
     * @return dbResult
     */
    function GetOrderPropsRelations($arFilter = array())
    {
    }
    /*
     * Update order property relations
     *
     * @param int $ID - property id
     * @param array $arEntityIDs - array of IDs entities (payment or delivery systems)
     * @param string $entityType - P/D (payment or delivery systems)
     * @return dbResult
     */
    function UpdateOrderPropsRelations($ID, $arEntityIDs, $entityType)
    {
    }
    public static function PrepareRelation4Where($val, $key, $operation, $negative, $field, &$arField, &$arFilter)
    {
    }
}
/** @deprecated */
final class CSaleOrderPropsAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    private $select;
    private $fieldProxy = array();
    function __construct(\Bitrix\Sale\Compatible\OrderQuery $query, array $select)
    {
    }
    public function addFieldProxy($field)
    {
    }
    public function adapt(array $newProperty)
    {
    }
    static function getOldValue($value, $type)
    {
    }
    public static function convertNewToOld(array $property)
    {
    }
    // M I G R A T I O N
    static function convertOldToNew(array $property)
    {
    }
    static $allFields = array('PERSON_TYPE_ID' => 1, 'NAME' => 1, 'TYPE' => 1, 'REQUIRED' => 1, 'DEFAULT_VALUE' => 1, 'SORT' => 1, 'USER_PROPS' => 1, 'IS_LOCATION' => 1, 'PROPS_GROUP_ID' => 1, 'DESCRIPTION' => 1, 'IS_EMAIL' => 1, 'IS_PROFILE_NAME' => 1, 'IS_PAYER' => 1, 'IS_LOCATION4TAX' => 1, 'IS_FILTERED' => 1, 'CODE' => 1, 'IS_ZIP' => 1, 'IS_PHONE' => 1, 'ACTIVE' => 1, 'UTIL' => 1, 'INPUT_FIELD_LOCATION' => 1, 'MULTIPLE' => 1, 'IS_ADDRESS' => 1, 'SETTINGS' => 1);
    static function migrate()
    {
    }
}