<?php

namespace Bitrix\Main\UI\Filter;

/**
 * Class NumberType. Subtypes of number field
 * @package Bitrix\Main\UI\Filter
 */
class NumberType
{
    const SINGLE = "exact";
    // =
    const RANGE = "range";
    // <= =>
    const MORE = "more";
    // >
    const LESS = "less";
    // <
    /**
     * Gets number field types list
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Returns postfix for request.
     * @return string
     */
    public static function getPostfix()
    {
    }
    /**
     * Search in plain array data that can belongs to this type.
     * @param array $data
     * @param array $filterFields
     * @return array
     */
    public static function getLogicFilter(array $data, array $filterFields)
    {
    }
}