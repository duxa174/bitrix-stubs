<?php

class CAllSaleOrderUserPropsValue
{
    function GetByID($ID)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteAll($ID)
    {
    }
    function Update($ID, $arFields)
    {
    }
    protected static function getPropertyValueFieldSelectSql($tableAlias = 'PV', $propTableAlias = 'P')
    {
    }
    protected static function getLocationTableJoinSql($tableAlias = 'PV', $propTableAlias = 'P')
    {
    }
    protected static function translateLocationIDToCode($id, $orderPropId)
    {
    }
    protected static function addPropertyValueField($tableAlias = 'V', &$arFields, &$arSelectFields)
    {
    }
    //	protected static function getList15($arOrder = array(), $arFilter = array(), $arGroupBy = false, $arNavStartParams = false, $arSelectFields = array())
    //	{
    //		$query = new \Bitrix\Sale\Compatible\OrderQueryLocation(Bitrix\Sale\Internals\UserPropsValueTable::getEntity());
    //		$query->addLocationRuntimeField('DEFAULT_VALUE');????
    //		$query->addAliases(array(
    //			// for GetList
    //			'PROP_ID'              => 'PROPERTY.ID',
    //			'PROP_PERSON_TYPE_ID'  => 'PROPERTY.PERSON_TYPE_ID',
    //			'PROP_NAME'            => 'PROPERTY.NAME',
    //			'PROP_TYPE'            => 'PROPERTY.TYPE',
    //			'PROP_REQUIED'         => 'PROPERTY.REQUIRED',
    //			'PROP_DEFAULT_VALUE'   => 'PROPERTY.DEFAULT_VALUE',
    //			'PROP_SORT'            => 'PROPERTY.SORT',
    //			'PROP_USER_PROPS'      => 'PROPERTY.USER_PROPS',
    //			'PROP_IS_LOCATION'     => 'PROPERTY.IS_LOCATION',
    //			'PROP_PROPS_GROUP_ID'  => 'PROPERTY.PROPS_GROUP_ID',
    //			'PROP_DESCRIPTION'     => 'PROPERTY.DESCRIPTION',
    //			'PROP_IS_EMAIL'        => 'PROPERTY.IS_EMAIL',
    //			'PROP_IS_PROFILE_NAME' => 'PROPERTY.IS_PROFILE_NAME',
    //			'PROP_IS_PAYER'        => 'PROPERTY.IS_PAYER',
    //			'PROP_IS_LOCATION4TAX' => 'PROPERTY.IS_LOCATION4TAX',
    //			'PROP_IS_ZIP'          => 'PROPERTY.IS_ZIP',
    //			'PROP_CODE'            => 'PROPERTY.CODE',
    //			'PROP_ACTIVE'          => 'PROPERTY.ACTIVE',
    //			'PROP_UTIL'            => 'PROPERTY.UTIL',
    //
    //
    //
    //			"PROP_SIZE1" => array("FIELD" => "P.SIZE1", "TYPE" => "int", "FROM" => "INNER JOIN b_sale_order_props P ON (UP.ORDER_PROPS_ID = P.ID)"),
    //			"PROP_SIZE2" => array("FIELD" => "P.SIZE2", "TYPE" => "int", "FROM" => "INNER JOIN b_sale_order_props P ON (UP.ORDER_PROPS_ID = P.ID)"),
    //
    //			"VARIANT_ID" => array("FIELD" => "PV.ID", "TYPE" => "int", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //			"VARIANT_ORDER_PROPS_ID" => array("FIELD" => "PV.ORDER_PROPS_ID", "TYPE" => "int", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //			"VARIANT_NAME" => array("FIELD" => "PV.NAME", "TYPE" => "string", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //			"VARIANT_VALUE" => array("FIELD" => "PV.VALUE", "TYPE" => "string", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //			"VARIANT_SORT" => array("FIELD" => "PV.SORT", "TYPE" => "int", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //			"VARIANT_DESCRIPTION" => array("FIELD" => "PV.DESCRIPTION", "TYPE" => "string", "FROM" => "LEFT JOIN b_sale_order_props_variant PV ON (UP.ORDER_PROPS_ID = PV.ORDER_PROPS_ID AND UP.VALUE = PV.VALUE)"),
    //
    //			"USER_VALUE_NAME" => array("FIELD" => "PV.NAME", "TYPE" => "string"),
    //			"TYPE" => array("FIELD" => "P.TYPE", "TYPE" => "string", "FROM" => "INNER JOIN b_sale_order_props P ON (UP.ORDER_PROPS_ID = P.ID)"),
    //			"SORT" => array("FIELD" => "P.SORT", "TYPE" => "int", "FROM" => "INNER JOIN b_sale_order_props P ON (UP.ORDER_PROPS_ID = P.ID)"),
    //			"CODE" => array("FIELD" => "P.CODE", "TYPE" => "string", "FROM" => "INNER JOIN b_sale_order_props P ON (UP.ORDER_PROPS_ID = P.ID)"),
    //
    //		));
    //	}
}