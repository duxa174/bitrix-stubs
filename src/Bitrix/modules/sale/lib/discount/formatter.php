<?php

namespace Bitrix\Sale\Discount;

final class Formatter
{
    const TYPE_SIMPLE = 0x1;
    const TYPE_VALUE = 0x2;
    const TYPE_LIMIT_VALUE = 0x4;
    const TYPE_FIXED = 0x8;
    const TYPE_MAX_BOUND = 0x10;
    const TYPE_SIMPLE_GIFT = 0x20;
    const VALUE_TYPE_PERCENT = 'P';
    const VALUE_TYPE_CURRENCY = 'C';
    const VALUE_TYPE_SUMM = 'S';
    const VALUE_TYPE_SUMM_BASKET = 'B';
    const VALUE_ACTION_DISCOUNT = 'D';
    const VALUE_ACTION_EXTRA = 'E';
    const VALUE_ACTION_CUMULATIVE = 'A';
    const LIMIT_MAX = 'MAX';
    const LIMIT_MIN = 'MIN';
    private static $errors = array();
    /**
     * Prepare action or result description.
     *
     * @param int $type					Action description type.
     * @param array|string $data		Action description data.
     * @return null|array
     */
    public static function prepareRow($type, $data)
    {
    }
    /**
     * Returns format action or result description.
     *
     * @param array $action		Action description.
     * @return null|string
     */
    public static function formatRow(array $action)
    {
    }
    /**
     * Format discount result.
     *
     * @param array $actionList			Descriptions.
     * @return array|null
     */
    public static function formatList(array $actionList)
    {
    }
    /**
     * Clear formatter errors.
     *
     * @return void
     */
    public static function clearErrors()
    {
    }
    /**
     * Returns formatter errors.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Add error.
     *
     * @param string $error		Error message.
     * @return void
     */
    private static function addError($error)
    {
    }
}