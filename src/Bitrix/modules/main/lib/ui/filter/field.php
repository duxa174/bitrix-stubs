<?php

namespace Bitrix\Main\UI\Filter;

/**
 * Class Field
 * @package Bitrix\Main\UI\Filter
 */
class Field
{
    /**
     * Prepares data of string field
     * @param string $name
     * @param string $defaultValue
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    public static function string($name, $defaultValue = "", $label = "", $placeholder = "")
    {
    }
    /**
     * @param string $name
     * @param string $defaultValue
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    public static function textarea($name, $defaultValue = "", $label = "", $placeholder = "")
    {
    }
    /**
     * Prepares data of custom field
     * @param string $name
     * @param string $value
     * @param string $label
     * @param string $placeholder
     * @param bool $style
     * @return array
     */
    public static function custom($name, $value, $label = "", $placeholder = "", $style = false)
    {
    }
    /**
     * Prepares data of custom_entity field
     * @param string $name
     * @param string $label
     * @param string $placeholder
     * @param bool $multiple
     * @return array
     */
    public static function customEntity($name, $label = "", $placeholder = "", $multiple = false)
    {
    }
    /**
     * Prepares data of date field
     * @param string $name
     * @param string $type
     * @param array $values
     * @param string $label
     * @param string $placeholder
     * @param bool $enableTime
     * @param array $exclude
     * @param array $include
     * @param boolean $allowYearsSwithcer
     * @param array $messages
     * @return array
     */
    public static function date($name, $type = \Bitrix\Main\UI\Filter\DateType::NONE, $values = [], $label = "", $placeholder = "", $enableTime = false, $exclude = [], $include = [], $allowYearsSwithcer = false, $messages = [])
    {
    }
    /**
     * Prepares data of number field
     * @param string $name
     * @param string $type
     * @param array $values
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    public static function number($name, $type = \Bitrix\Main\UI\Filter\NumberType::SINGLE, $values = array(), $label = "", $placeholder = "")
    {
    }
    /**
     * Prepares data of select field
     * @param string $name
     * @param array $items
     * @param array $defaultValue
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    public static function select($name, $items, array $defaultValue = array(), $label = "", $placeholder = "")
    {
    }
    /**
     * Prepares data of multiselect field
     * @param string $name
     * @param array $items
     * @param array $defaultValues
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    public static function multiSelect($name, $items, $defaultValues = array(), $label = "", $placeholder = "")
    {
    }
    public static function customDate($options = array())
    {
    }
    /**
     * Gets months list
     * @return array
     */
    protected static function getMonthsList()
    {
    }
    /**
     * Gets years list
     * @return array
     * @throws \Bitrix\Main\ObjectException
     */
    protected static function getYearsList()
    {
    }
    /**
     * Gets days list
     * @return array
     */
    protected static function getDaysList()
    {
    }
    /**
     * Prepares data of user field
     * @param string $name
     * @param string $label
     * @param string $placeholder
     * @param bool $multiple
     * @param array $params
     * @param bool $lightweight
     * @return array
     */
    public static function destSelector($name, $label = "", $placeholder = "", $multiple = false, $params = array(), $lightweight = false, $filterName = '')
    {
    }
    protected static function getMessage($messages, $messageId)
    {
    }
}