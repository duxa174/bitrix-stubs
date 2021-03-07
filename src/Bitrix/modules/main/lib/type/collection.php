<?php

namespace Bitrix\Main\Type;

class Collection
{
    /**
     * Sorting array by column.
     * You can use short mode: Collection::sortByColumn($arr, 'value'); This is equal Collection::sortByColumn($arr, array('value' => SORT_ASC))
     *
     * Pay attention: if two members compare as equal, their relative order in the sorted array is undefined. The sorting is not stable.
     *
     * More example:
     * Collection::sortByColumn($arr, array('value' => array(SORT_NUMERIC, SORT_ASC), 'attr' => SORT_DESC), array('attr' => 'strlen'), 'www');
     *
     * @param array        $array
     * @param string|array $columns
     * @param string|array $callbacks
     * @param null         $defaultValueIfNotSetValue If value not set - use $defaultValueIfNotSetValue (any cols)
     * @param bool         $preserveKeys If false numeric keys will be re-indexed. If true - preserve.
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function sortByColumn(array &$array, $columns, $callbacks = '', $defaultValueIfNotSetValue = null, $preserveKeys = false)
    {
    }
    /**
     * Takes all arguments by pairs..
     * Odd arguments are arrays.
     * Even arguments are keys to lookup in these arrays.
     * Keys may be arrays. In this case function will try to dig deeper.
     * Returns first not empty element of a[k] pair.
     *
     * @param array $a array to analyze
     * @param string|int $k key to lookup
     * @param mixed $a,... unlimited array/key pairs to go through
     * @return mixed|string
     */
    public static function firstNotEmpty()
    {
    }
    /**
     * Convert array values to int, return unique values > 0. Optionally sorted array.
     *
     * @param array &$map	Array for normalize.
     * @param bool $sorted	If sorted true, result array will be sorted.
     * @return void
     */
    public static function normalizeArrayValuesByInt(&$map, $sorted = true)
    {
    }
    /**
     * Check array is associative.
     *
     * @param $array - Array for check.
     * @return bool
     */
    public static function isAssociative(array $array)
    {
    }
}