<?php

class CSaleBasketFilter
{
    public static function ClearBasket($row)
    {
    }
    public static function AmountFilter(&$arOrder, $func)
    {
    }
    public static function AmountBaseFilter(&$order, $func)
    {
    }
    public static function CountFilter(&$arOrder, $func)
    {
    }
    public static function RowFilter(&$arOrder, $func)
    {
    }
    public static function ProductFilter(&$arOrder, $func)
    {
    }
    public static function BasketPropertyFilter($basketItem, $parameters)
    {
    }
}
class CSaleCondCtrl extends \CGlobalCondCtrl
{
}
class CSaleCondCtrlComplex extends \CGlobalCondCtrlComplex
{
}
class CSaleCondCtrlGroup extends \CGlobalCondCtrlGroup
{
    public static function GetControlDescr()
    {
    }
    public static function GetShowIn($arControls)
    {
    }
}
class CSaleCondCtrlBasketGroup extends \CSaleCondCtrlGroup
{
    public static function GetControlID()
    {
    }
    public static function GetControlDescr()
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
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return array|bool
     */
    public static function GetControls($strControlID = \false)
    {
    }
    private function __GetVisual($boolExt = \false)
    {
    }
    private static function getCodeForCumulativeGroupCondition($oneCondition, $values, $params, $control, $subs)
    {
    }
    private function __GetSubGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
    private function __GetRowGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
    private function __GetProductGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
    private function __GetAmtGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
    private function __GetAmtBaseGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
    private function __GetCntGroupCond($arOneCondition, $arValues, $arParams, $arControl, $arSubs)
    {
    }
}
class CSaleCondCtrlBasketFields extends \CSaleCondCtrlComplex
{
    const ENTITY_BASKET_POSITION_WEIGHT = 'BX:CondBsktFldSummWeight';
    public static function GetControlDescr()
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
    /**
     * @param bool|string $strControlID
     * @return array|bool
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
}
class CSaleCondCtrlBasketItemConditions extends \CGlobalCondCtrlAtoms
{
    const ENTITY_BASKET_POSITION_ACTION_APPLIED = 'CondBsktAppliedDiscount';
    public static function GetControlDescr()
    {
    }
    public static function GetAtomsEx($controlId = \false, $extendedMode = \false)
    {
    }
    public static function GetControls($controlId = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function GetConditionShow($params)
    {
    }
    public static function Parse($condition)
    {
    }
    public static function Generate($condition, $params, $control, $childrens = \false)
    {
    }
}
class CSaleCondCtrlBasketProperties extends \CGlobalCondCtrlAtoms
{
    const ENTITY_BASKET_PROPERTY = 'BX:CondBsktProp';
    const ENTITY_TYPE_NAME = 'NAME';
    const ENTITY_TYPE_CODE = 'CODE';
    public static function GetControlDescr()
    {
    }
    public static function GetAtomsEx($controlId = \false, $extendedMode = \false)
    {
    }
    public static function GetControls($controlId = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function Generate($condition, $params, $control, $childrens = \false)
    {
    }
}
class CSaleCondCtrlOrderFields extends \CSaleCondCtrlComplex
{
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
    /**
     * @param bool|string $strControlID
     * @return array|bool
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    public static function GetJSControl($arControl, $arParams = array())
    {
    }
}
class CSaleCondCtrlPastOrder extends \CSaleCondCtrlOrderFields
{
    public static function GetControlDescr()
    {
    }
    public static function onBuildDiscountConditionInterfaceControls()
    {
    }
    public static function checkPastOrder($currentOrder, $callable)
    {
    }
    private static function convertToArray(\Bitrix\Sale\Order $order)
    {
    }
    private static function getPastOrder($userId)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetControls($strControlID = \false)
    {
    }
}
class CSaleCondCtrlCommon extends \CSaleCondCtrlComplex
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return array|bool
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetShowIn($arControls)
    {
    }
}
class CSaleCondTree extends \CGlobalCondTree
{
    protected $arExecuteFunc = array();
    protected $executeModule = array();
    public function __construct()
    {
    }
    public function __destruct()
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
class CSaleCondCumulativeCtrl extends \CSaleCondCtrlComplex
{
    const TYPE_ORDER_ARCHIVED = \Bitrix\Sale\Discount\CumulativeCalculator::TYPE_ORDER_ARCHIVED;
    const TYPE_ORDER_NON_ARCHIVED = \Bitrix\Sale\Discount\CumulativeCalculator::TYPE_ORDER_NON_ARCHIVED;
    public static function onBuildDiscountConditionInterfaceControls()
    {
    }
    public static function getControlDescr()
    {
    }
    public static function getControlShow($params)
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    public static function generate($oneCondition, $params, $control, $subs = \false)
    {
    }
    private static function exportConfiguration(array $configuration)
    {
    }
    public static function getCumulativeValue($currentOrder, array $dataSumConfiguration = array())
    {
    }
    protected static function convertDataToSumConfiguration(array $dataSumConfiguration)
    {
    }
    /**
     * @param bool|string $controlId
     *
     *@return array|bool
     */
    public static function getControls($controlId = \false)
    {
    }
    public static function getShowIn($arControls)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function ConvertInt2DateTime(&$value, $format, $offset)
    {
    }
    public static function ConvertDateTime2Int(&$value, $format, $offset)
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
}