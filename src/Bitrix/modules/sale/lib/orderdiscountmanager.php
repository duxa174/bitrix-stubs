<?php

namespace Bitrix\Sale;

/**
 * Class OrderDiscountManager
 * @package Bitrix\Sale
 *
 * @deprecated
 * @see OrderDiscount
 */
class OrderDiscountManager extends \Bitrix\Sale\OrderDiscount
{
    /** @deprecated */
    const DESCR_TYPE_SIMPLE = \Bitrix\Sale\Discount\Formatter::TYPE_SIMPLE;
    /** @deprecated */
    const DESCR_TYPE_VALUE = \Bitrix\Sale\Discount\Formatter::TYPE_VALUE;
    /** @deprecated */
    const DESCR_TYPE_LIMIT_VALUE = \Bitrix\Sale\Discount\Formatter::TYPE_LIMIT_VALUE;
    /** @deprecated */
    const DESCR_TYPE_FIXED = \Bitrix\Sale\Discount\Formatter::TYPE_FIXED;
    /** @deprecated */
    const DESCR_TYPE_MAX_BOUND = \Bitrix\Sale\Discount\Formatter::TYPE_MAX_BOUND;
    /** @deprecated */
    const DESCR_VALUE_TYPE_PERCENT = \Bitrix\Sale\Discount\Formatter::VALUE_TYPE_PERCENT;
    /** @deprecated */
    const DESCR_VALUE_TYPE_CURRENCY = \Bitrix\Sale\Discount\Formatter::VALUE_TYPE_CURRENCY;
    /** @deprecated */
    const DESCR_VALUE_TYPE_SUMM = \Bitrix\Sale\Discount\Formatter::VALUE_TYPE_SUMM;
    /** @deprecated */
    const DESCR_VALUE_TYPE_SUMM_BASKET = \Bitrix\Sale\Discount\Formatter::VALUE_TYPE_SUMM_BASKET;
    /** @deprecated */
    const DESCR_VALUE_ACTION_DISCOUNT = \Bitrix\Sale\Discount\Formatter::VALUE_ACTION_DISCOUNT;
    /** @deprecated */
    const DESCR_VALUE_ACTION_EXTRA = \Bitrix\Sale\Discount\Formatter::VALUE_ACTION_EXTRA;
    /** @deprecated */
    const DESCR_VALUE_ACTION_ACCUMULATE = \Bitrix\Sale\Discount\Formatter::VALUE_ACTION_CUMULATIVE;
    /** @deprecated */
    const DESCR_VALUE_ACTION_CUMULATIVE = \Bitrix\Sale\Discount\Formatter::VALUE_ACTION_CUMULATIVE;
    /** @deprecated */
    const DESCR_LIMIT_MAX = \Bitrix\Sale\Discount\Formatter::LIMIT_MAX;
    /** @deprecated */
    const DESCR_LIMIT_MIN = \Bitrix\Sale\Discount\Formatter::LIMIT_MIN;
    /**
     * Load applied discount list
     * @deprecated
     * @see OrderDiscount::loadResultFromDb
     *
     * @param int $order				Order id.
     * @param bool $extendedMode		Get full information by discount - unused.
     * @param array|bool $basketList	Correspondence between basket ids and basket codes.
     * @param array $basketData			Basket data.
     * @return Result
     */
    public static function loadResultFromDatabase($order, $extendedMode = false, $basketList = false, $basketData = array())
    {
    }
    /**
     * Prepare discount description.
     *
     * @deprecated
     * @see Discount\Formatter::prepareRow
     *
     * @param int $type					Description type.
     * @param array|string $data		Description data.
     * @return Result
     */
    public static function prepareDiscountDescription($type, $data)
    {
    }
    /**
     * Format discount description.
     *
     * @deprecated
     * @see Discount\Formatter::formatRow
     *
     * @param array $data		Discount description.
     * @return Result
     */
    public static function formatDiscountDescription($data)
    {
    }
    /**
     * Return string discount description.
     *
     * @deprecated
     * @see Discount\Formatter::formatRow
     *
     * @param array $data			Description.
     * @return bool|string
     */
    public static function formatDescription($data)
    {
    }
    /**
     * Format discount result.
     *
     * @deprecated
     * @see Discount\Formatter::formatList
     *
     * @param array $data			Description data.
     * @return array|bool
     */
    public static function formatArrayDescription($data)
    {
    }
    /**
     * Create simple description for unknown discount.
     *
     * @deprecated
     * @see Discount\Result\CompatibleFormat::createResultDescription
     *
     * @param float $newPrice			New price.
     * @param float $oldPrice			Old price.
     * @param string $currency			Currency.
     * @return array
     */
    public static function createSimpleDescription($newPrice, $oldPrice, $currency)
    {
    }
    /**
     * Return basket code for discount rule.
     * @deprecated
     *
     * @param array $rule			Discount rule.
     * @param bool $translate		Use entity id or basket id.
     * @param array|bool $basketList		Convert table basket id to basket code.
     * @return string
     */
    protected static function getBasketCodeByRule(array $rule, $translate, $basketList)
    {
    }
    /**
     * Returns formatter errors.
     *
     * @param Result $result        Result object.
     * @return void
     */
    private static function transferFormatterErrors(\Bitrix\Sale\Result $result)
    {
    }
}