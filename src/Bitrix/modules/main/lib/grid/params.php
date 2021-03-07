<?php

namespace Bitrix\Main\Grid;

class Params
{
    /**
     * Gets first a Boolean value from $values or gets a default value
     * @param array $values
     * @param $defaultValue
     *
     * @return bool|*
     */
    public static function prepareBoolean(array $values = array(), $defaultValue)
    {
    }
    /**
     * Gets first a String value from $values or gets a default value
     * @param array $values
     * @param $defaultValue
     *
     * @return string|*
     */
    public static function prepareString(array $values = array(), $defaultValue)
    {
    }
    /**
     * Gets first a Array value from $values or gets a default value
     * @param array $values
     * @param $defaultValue
     *
     * @return array|*
     */
    public static function prepareArray(array $values = array(), $defaultValue)
    {
    }
    /**
     * Gets first a Integer value from $values or gets a default value
     * @param array $values
     * @param $defaultValue
     *
     * @return int|string
     */
    public static function prepareInt(array $values = array(), $defaultValue)
    {
    }
    public static function ensureString(array $params, $name)
    {
    }
    public static function ensureNotEmptyString(array $params, $name)
    {
    }
    public static function ensureArray(array $params, $name)
    {
    }
    public static function ensureNotEmptyArray(array $params, $name)
    {
    }
}