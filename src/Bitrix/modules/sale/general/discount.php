<?php

class CAllSaleDiscount
{
    const VERSION_OLD = \Bitrix\Sale\Internals\DiscountTable::VERSION_OLD;
    const VERSION_NEW = \Bitrix\Sale\Internals\DiscountTable::VERSION_NEW;
    const VERSION_15 = \Bitrix\Sale\Internals\DiscountTable::VERSION_15;
    const OLD_DSC_TYPE_PERCENT = 'P';
    const OLD_DSC_TYPE_FIX = 'V';
    const PREPARE_CONDITIONS = 1;
    const PREPARE_ACTIONS = 2;
    protected static $cacheDiscountHandlers = array();
    protected static $usedModules = array();
    /**
     * @deprecated strongly deprecated since sale 15.5.0.
     * @see \Bitrix\Sale\Discount
     *
     * @param array &$arOrder
     * @param array $arOptions
     * @param array &$arErrors
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function DoProcessOrder(&$arOrder, $arOptions, &$arErrors)
    {
    }
    private static function prefillDiscountFields(array &$discount, array $couponList)
    {
    }
    private static function workWithDiscountHandlers(array &$discount)
    {
    }
    public static function PrepareCurrency4Where($val, $key, $operation, $negative, $field, $arField, $arFilter)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    /*
     * @deprecated deprecated since sale 14.11.0
     * @see \Bitrix\Sale\Internals\DiscountTable::delete
     */
    public function Delete($ID)
    {
    }
    protected static function getDiscountResult(&$oldOrder, &$currentOrder, $extMode = \false)
    {
    }
    protected static function changeDiscountResult(&$oldOrder, &$order, &$discountResult)
    {
    }
    protected static function __Unpack($arOrder, $strUnpack)
    {
    }
    protected static function __ApplyActions(&$arOrder, $strActions)
    {
    }
    protected static function __ConvertOldFormat($strAction, &$arFields)
    {
    }
    protected static function __SetOldFields($strAction, &$arFields)
    {
    }
    protected static function prepareDiscountConditions(&$conditions, &$result, &$handlers, $type, $site)
    {
    }
    protected static function updateDiscountHandlers($discountID, $handlers, $update)
    {
    }
    protected static function getDiscountHandlers($discountList)
    {
    }
    /*
     * @deprecated deprecated since sale 14.11.0
     * @see \Bitrix\Sale\Internals\DiscountGroupTable::updateByDiscount
     */
    protected function updateUserGroups($discountID, $userGroups, $active, $updateData)
    {
    }
    private static function clearFields(array $fields)
    {
    }
}