<?php

namespace Bitrix\Catalog\Helpers;

/**
 * Class Tools
 * Provides various useful methods for data.
 *
 * @package Bitrix\Catalog\Helpers
 */
class Tools
{
    /**
     * Check existing keys in array.
     *
     * @param array $fields			Source array.
     * @param array $keyList		Key list for search.
     * @param bool $checkNull		Checked null values.
     * @return bool
     */
    public static function checkExistKeys(array $fields, array $keyList, $checkNull = false)
    {
    }
    /**
     * Return missing key list.
     *
     * @param array $fields			Source array.
     * @param array $keyList		Key list for search.
     * @param bool $checkNull		Checked null values.
     * @return array
     */
    public static function getMissingKeys(array $fields, array $keyList, $checkNull = false)
    {
    }
    /**
     * Return keys status in fields.
     *
     * @param array $fields			Source array.
     * @param array $keyList		Key list for search.
     * @param bool $checkNull		Checked null values.
     * @return array|bool
     */
    public static function prepareKeys(array $fields, array $keyList, $checkNull = false)
    {
    }
    /**
     * Callback for array_filter - clear null fields.
     *
     * @param mixed $value		Clear value.
     * @return bool
     */
    public static function clearNullFields($value)
    {
    }
}