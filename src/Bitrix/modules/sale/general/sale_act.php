<?php

/**
 * @deprecated deprecated since sale 16.0.10
 * @see \Bitrix\Sale\Discount\Actions
 */
class CSaleDiscountActionApply
{
    const VALUE_TYPE_FIX = \Bitrix\Sale\Discount\Actions::VALUE_TYPE_FIX;
    const VALUE_TYPE_PERCENT = \Bitrix\Sale\Discount\Actions::VALUE_TYPE_PERCENT;
    const VALUE_TYPE_SUMM = \Bitrix\Sale\Discount\Actions::VALUE_TYPE_SUMM;
    const GIFT_SELECT_TYPE_ONE = \Bitrix\Sale\Discount\Actions::GIFT_SELECT_TYPE_ONE;
    const GIFT_SELECT_TYPE_ALL = \Bitrix\Sale\Discount\Actions::GIFT_SELECT_TYPE_ALL;
    const ORDER_MANUAL_MODE_FIELD = 'ORDER_MANUAL_MODE';
    const BASKET_APPLIED_FIELD = \Bitrix\Sale\Discount\Actions::BASKET_APPLIED_FIELD;
    const EPS = \Bitrix\Sale\Discount\Actions::VALUE_EPS;
    protected static $getPercentFromBasePrice = \null;
    /**
     * Check discount calculate mode field for order.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::isManualMode
     *
     * @param array $order			Order data.
     * @return bool
     */
    public static function isManualMode(
        /** @noinspection PhpUnusedParameterInspection */
        $order
    )
    {
    }
    /**
     * Set discount calculate mode field for order.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::setUseMode
     *
     * @param array &$order			Order data.
     * @return void
     */
    public static function setManualMode(&$order)
    {
    }
    /**
     * Erase discount calculate mode field for order.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::setUseMode
     *
     * @param array &$order			Order data.
     * @return void
     */
    public static function clearManualMode(&$order)
    {
    }
    /**
     * Return true, if discount already applied by basket item.
     *
     * @deprecated deprecated since sale 16.0.10
     *
     * @param array $row			Basket row.
     * @return bool
     */
    public static function filterApplied($row)
    {
    }
    /**
     * Fill basket applied information.
     *
     * @deprecated deprecated since sale 16.0.10
     *
     * @param array &$order			Order data.
     * @param array $basket			Applied information (key - BASKET_ID, value - Y/N).
     * @return void
     */
    public static function fillBasketApplied(&$order, $basket)
    {
    }
    /**
     * Clear basket applied information.
     *
     * @deprecated deprecated since sale 16.0.10
     *
     * @param array &$order				Order data.
     * @return void
     */
    public static function clearBasketApplied(&$order)
    {
    }
    /**
     * Filter for undiscount basket items.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::filterBasketForAction
     *
     * @param array $row		Basket item.
     * @return bool
     */
    public static function ClearBasket($row)
    {
    }
    /**
     * Apply discount to delivery price.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::applyToDelivery
     *
     * @param array &$order				Order data.
     * @param float $value				Discount value.
     * @param string $unit				Value unit.
     * @param bool $extMode				Apply mode percent discount.
     * @return void
     */
    public static function ApplyDelivery(&$order, $value, $unit, $extMode = \false)
    {
    }
    /**
     * Apply discount to basket.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::applyToBasket
     *
     * @param array &$order			Order data.
     * @param callable $func		Filter function.
     * @param float $value			Discount value.
     * @param string $unit			Value unit.
     * @return void
     */
    public static function ApplyBasketDiscount(&$order, $func, $value, $unit)
    {
    }
    /**
     * Apply simple gift discount.
     *
     * @deprecated deprecated since sale 16.0.10
     * @see \Bitrix\Sale\Discount\Actions::applySimpleGift
     *
     * @param array &$order				Order data.
     * @param callable $callableFilter	Filter function.
     * @return void
     */
    public static function ApplyGiftDiscount(&$order, $callableFilter)
    {
    }
}
class CSaleActionCtrl extends \CGlobalCondCtrl
{
    public static function GetConditionShow($arParams)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
}
class CSaleCumulativeAction extends \CGlobalCondCtrl
{
    public static function GetControlID()
    {
    }
    public static function onBuildDiscountActionInterfaceControls()
    {
    }
    public static function IsGroup($strControlID = \false)
    {
    }
    public static function Generate($oneCondition, $params, $control, $subs = \false)
    {
    }
    protected static function buildSubsCode(array $subs, array $oneCondition)
    {
    }
    protected static function convertSumConfigurationDateToInt(&$periodData = array())
    {
    }
}
class CSaleActionCtrlComplex extends \CGlobalCondCtrlComplex
{
}
class CSaleActionCtrlGroup extends \CGlobalCondCtrlGroup
{
    public static function GetShowIn($arControls)
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
}
class CSaleActionGiftCtrlGroup extends \CSaleActionCtrlGroup
{
    public static function GetShowIn($arControls)
    {
    }
    public static function GetControlID()
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function GetControlDescr()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function ProvideGiftProductData(array $fields)
    {
    }
    protected static function getGifter(array $data)
    {
    }
    /**
     * Extends list of products by base product, if we have SKU in list.
     *
     * @param array $productIds
     * @return array
     */
    public static function ExtendProductIds(array $productIds)
    {
    }
}
class CSaleActionCtrlAction extends \CGlobalCondCtrlGroup
{
    public static function GetConditionShow($arParams)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function GetVisual()
    {
    }
}
class CSaleActionCtrlDelivery extends \CSaleActionCtrl
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlID()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
}
class CSaleActionGift extends \CSaleActionCtrl
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlID()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function getGiftDataByDiscount($fields)
    {
    }
}
class CSaleActionCtrlBasketGroup extends \CSaleActionCtrlAction
{
    const ACTION_TYPE_DISCOUNT = 'Discount';
    const ACTION_TYPE_EXTRA = 'Extra';
    const ACTION_TYPE_CLOSEOUT = 'Closeout';
    const VALUE_UNIT_PERCENT = 'Perc';
    const VALUE_UNIT_CURRENCY = 'CurEach';
    const VALUE_UNIT_SUMM = 'CurAll';
    public static function GetControlDescr()
    {
    }
    public static function GetControlID()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function CheckAtoms($arOneCondition, $arParams, $arControl, $boolShow)
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    public static function GetVisual()
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
}
class CSaleActionCtrlSubGroup extends \CGlobalCondCtrlGroup
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlID()
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function GetControlShow($params)
    {
    }
}
class CSaleActionCondCtrlBasketFields extends \CSaleCondCtrlBasketFields
{
    const CONTROL_ID_APPLIED_DISCOUNT = \CSaleCondCtrlBasketItemConditions::ENTITY_BASKET_POSITION_ACTION_APPLIED;
    public static function GetControlDescr()
    {
    }
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
}
class CSaleActionTree extends \CGlobalCondTree
{
    protected $arExecuteFunc = array();
    protected $executeModule = array();
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    public function Init($mode, $event, $params = array())
    {
    }
    public function Generate($arConditions, $arParams)
    {
    }
    public function GenerateLevel(&$arLevel, $arParams, $boolFirst = \false)
    {
    }
    public function GetExecuteModule()
    {
    }
    protected function fillUsedData(&$control)
    {
    }
}