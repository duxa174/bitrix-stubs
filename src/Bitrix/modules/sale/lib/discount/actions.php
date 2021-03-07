<?php

namespace Bitrix\Sale\Discount;

class Actions
{
    const VALUE_TYPE_FIX = 'F';
    const VALUE_TYPE_PERCENT = 'P';
    const VALUE_TYPE_SUMM = 'S';
    const VALUE_TYPE_CLOSEOUT = 'C';
    const GIFT_SELECT_TYPE_ONE = 'one';
    const GIFT_SELECT_TYPE_ALL = 'all';
    const BASKET_APPLIED_FIELD = 'DISCOUNT_APPLIED';
    const VALUE_EPS = 1.0E-5;
    const MODE_CALCULATE = 0x1;
    const MODE_MANUAL = 0x2;
    const MODE_MIXED = 0x4;
    const APPLY_COUNTER_START = -1;
    const PERCENT_FROM_CURRENT_PRICE = 0x1;
    const PERCENT_FROM_BASE_PRICE = 0x2;
    const RESULT_ENTITY_BASKET = 0x1;
    const RESULT_ENTITY_DELIVERY = 0x2;
    const RESULT_ENTITY_ORDER = 0x4;
    const APPLY_RESULT_MODE_COUNTER = 0x1;
    const APPLY_RESULT_MODE_DESCR = 0x2;
    const APPLY_RESULT_MODE_SIMPLE = 0x4;
    const ACTION_TYPE_DISCOUNT = 'D';
    const ACTION_TYPE_EXTRA = 'E';
    protected static $useMode = self::MODE_CALCULATE;
    protected static $applyCounter = self::APPLY_COUNTER_START;
    protected static $actionResult = array();
    protected static $actionDescription = array();
    protected static $applyResult = array();
    protected static $applyResultMode = self::APPLY_RESULT_MODE_COUNTER;
    protected static $storedData = array();
    protected static $useBasketFilter = true;
    protected static $percentValueMode = self::PERCENT_FROM_CURRENT_PRICE;
    protected static $currencyId = '';
    protected static $siteId = '';
    private static $compatibleBasketFields = array('DISCOUNT_PRICE', 'PRICE', 'VAT_VALUE', 'PRICE_DEFAULT');
    /**
     * Check for zero value.
     *
     * @param float|int $value Price or discount value.
     * @return float|int
     */
    public static function roundZeroValue($value)
    {
    }
    /**
     * Rounded value with sale rules.
     *
     * @param float|int $value Value.
     * @param string $currency Currency.
     * @return float
     */
    public static function roundValue(
        $value,
        /** @noinspection PhpUnusedParameterInspection */
        $currency
    )
    {
    }
    /**
     * Set use actions mode.
     *
     * @param int $mode Use mode.
     * @param array $config Config.
     * @return void
     */
    public static function setUseMode($mode, array $config = array())
    {
    }
    /**
     * Returns current use actions mode.
     *
     * @return int
     */
    public static function getUseMode()
    {
    }
    /**
     * Check calculate mode.
     *
     * @return bool
     */
    public static function isCalculateMode()
    {
    }
    /**
     * Check manual mode.
     *
     * @return bool
     */
    public static function isManualMode()
    {
    }
    /**
     * Check mixed mode.
     *
     * @return bool
     */
    public static function isMixedMode()
    {
    }
    /**
     * Check current use actions mode.
     *
     * @param array $list
     * @return bool
     */
    public static function checkUseMode(array $list)
    {
    }
    /**
     * Return calculate mode for percent discount.
     *
     * @return int
     */
    public static function getPercentMode()
    {
    }
    /**
     * Return calculate currency.
     *
     * @return string
     */
    public static function getCurrency()
    {
    }
    /**
     * Clear apply counter.
     *
     * @return void
     */
    public static function clearApplyCounter()
    {
    }
    /**
     * Return current apply counter.
     *
     * @return int
     */
    public static function getApplyCounter()
    {
    }
    /**
     * Increment current apply counter. Use BEFORE discount action apply.
     *
     * @return void
     */
    public static function increaseApplyCounter()
    {
    }
    /**
     * Disable basket filter for mixed apply mode.
     *
     * @return void
     */
    public static function disableBasketFilter()
    {
    }
    /**
     * Enable basket filter for mixed apply mode.
     *
     * @return void
     */
    public static function enableBasketFilter()
    {
    }
    /**
     * Return is enabled basket filter mixed apply mode.
     *
     * @return bool
     */
    public static function usedBasketFilter()
    {
    }
    /**
     * Fill compatible fields for old public api.
     *
     * @param array &$order Order data.
     * @return void
     */
    public static function fillCompatibleFields(array &$order)
    {
    }
    /**
     * Basket filter.
     *
     * @param array $item Basket item.
     * @return bool
     */
    public static function filterBasketForAction(array $item)
    {
    }
    /**
     * Return all actions description.
     *
     * @return array
     */
    public static function getActionDescription()
    {
    }
    /**
     * Return all actions results.
     *
     * @return array
     */
    public static function getActionResult()
    {
    }
    /**
     * Set apply result format mode.
     *
     * @param int $mode			Apply result mode.
     * @return void
     */
    public static function setApplyResultMode($mode)
    {
    }
    /**
     * Return apply result format mode.
     *
     * @return int
     */
    public static function getApplyResultMode()
    {
    }
    /**
     * Set apply result list.
     *
     * @param array $applyResult Apply data.
     * @return void
     */
    public static function setApplyResult(array $applyResult)
    {
    }
    /**
     * Fill data to store for discount.
     *
     * @param array $data   Data.
     * @return void
     */
    public static function setStoredData(array $data)
    {
    }
    /**
     * Return stored data after discount calculation.
     *
     * @return array
     */
    public static function getStoredData()
    {
    }
    /**
     * Fill action data to store.
     *
     * @param array $data   Action data to store.
     * @return void
     */
    public static function setActionStoredData(array $data)
    {
    }
    /**
     * Return stored action.
     *
     * @return array|null
     */
    public static function getActionStoredData()
    {
    }
    /**
     * Clear actions description and result.
     *
     * @return void
     */
    public static function clearAction()
    {
    }
    /**
     * Basket action.
     *
     * @param array &$order Order data.
     * @param array $action Action detail
     *    keys are case sensitive:
     *        <ul>
     *        <li>float|int VALUE                Discount value.
     *        <li>char UNIT                    Discount type.
     *        <li>string CURRENCY                Currency discount (optional).
     *        <li>char MAX_BOUND                Max bound (optional).
     *        </ul>.
     * @param callable $filter Filter for basket items.
     * @return void
     */
    public static function applyToBasket(array &$order, array $action, $filter)
    {
    }
    /**
     * Cumulative action.
     *
     * @param array &$order				Order data.
     * @param array $ranges
     * @param array $configuration
     * @param callable|null $filter
     * @return void
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function applyCumulativeToBasket(array &$order, array $ranges, array $configuration = array(), $filter = null)
    {
    }
    private static function wrapFilterToFindMoreProfitableForCumulative($filter, $unit, $value, $limitValue, $maxBound)
    {
    }
    /**
     * Delivery action.
     *
     * @param array &$order Order data.
     * @param array $action Action detail
     *    keys are case sensitive:
     *        <ul>
     *        <li>float|int VALUE                Discount value.
     *        <li>char UNIT                    Discount type.
     *        <li>string CURRENCY                Currency discount (optional).
     *        <li>char MAX_BOUND                Max bound.
     *        </ul>.
     * @return void
     */
    public static function applyToDelivery(array &$order, array $action)
    {
    }
    /**
     * Simple gift action.
     *
     * @param array &$order			Order data.
     * @param callable $filter		Filter.
     * @throws Main\ArgumentOutOfRangeException
     * @return void
     */
    public static function applySimpleGift(array &$order, $filter)
    {
    }
    /**
     * Return basket item for action apply.
     *
     * @param array $basket Basket.
     * @param mixed $filter Filter.
     * @param array $action Prepare data.
     * @return mixed
     */
    public static function getBasketForApply(array $basket, $filter, $action = array())
    {
    }
    /**
     * Save action description.
     *
     * @param int $type Action object type.
     * @param array $description Description.
     * @return void
     */
    public static function setActionDescription($type, $description)
    {
    }
    /**
     * Save result.
     *
     * @param int $entity			Action object type.
     * @param array $actionResult	Result description.
     * @return void
     */
    public static function setActionResult($entity, array $actionResult)
    {
    }
    /**
     * @param int $entity			Entity id.
     * @param array $entityParams	Entity params (optional).
     * @return void
     */
    public static function clearEntityActionResult($entity, array $entityParams = array())
    {
    }
    /**
     * Return percent value.
     *
     * @param array $basket Basket.
     * @param int|float $value Value.
     * @return float
     */
    public static function getPercentByValue($basket, $value)
    {
    }
    /**
     * Calculate percent price.
     *
     * @param array $basketRow Basket item.
     * @param float $percent Percent value.
     * @return float
     */
    public static function percentToValue($basketRow, $percent)
    {
    }
    public static function getActionConfiguration(array $discount)
    {
    }
    protected static function getActionStructure(array $discount)
    {
    }
    /**
     * Return check result for error mode.
     *
     * @param array $action			Action description.
     * @param array $resultDescr	Result description.
     * @return bool
     */
    protected static function compareBasketResultDescr(array $action, $resultDescr)
    {
    }
    /**
     * Calculate simple discount result.
     *
     * @param int|float $value				Discount value.
     * @param string $unit					Discount value type.
     * @param array $basketRow				Basket item.
     * @param int|float|null $limitValue	Max discount value.
     * @param bool $maxBound				Allow set price to 0, if discount more than price.
     *
     * @return array
     */
    protected static function calculateDiscountPrice($value, $unit, array $basketRow, $limitValue, $maxBound)
    {
    }
    /**
     * Fill price fields in basket item.
     *
     * @param array &$basketRow		Basket item fields.
     * @param int|float $price		New price.
     * @param int|float $discount	Value of the discount change.
     * @return void
     */
    protected static function fillDiscountPrice(array &$basketRow, $price, $discount)
    {
    }
}