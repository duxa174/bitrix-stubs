<?php

namespace Bitrix\Catalog\Product;

class QuantityControl
{
    private static $values = array();
    const QUANTITY_CONTROL_QUANTITY = 'quantity';
    const QUANTITY_CONTROL_AVAILABLE_QUANTITY = 'available_quantity';
    const QUANTITY_CONTROL_RESERVED_QUANTITY = 'reserved_quantity';
    /**
     * @param null $productId
     */
    public static function resetAllQuantity($productId = null)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function setQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function addQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     *
     * @return float|int|null
     */
    public static function getQuantity($productId)
    {
    }
    /**
     * @param $productId
     */
    public static function resetQuantity($productId)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function setReservedQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function addReservedQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     *
     * @return float|int|null
     */
    public static function getReservedQuantity($productId)
    {
    }
    /**
     * @param $productId
     */
    public static function resetReservedQuantity($productId)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function setAvailableQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     * @param $value
     */
    public static function addAvailableQuantity($productId, $value)
    {
    }
    /**
     * @param $productId
     *
     * @return float|int|null
     */
    public static function getAvailableQuantity($productId)
    {
    }
    /**
     * @param $productId
     */
    public static function resetAvailableQuantity($productId)
    {
    }
    /**
     * @param $type
     * @param $productId
     * @param $value
     */
    private static function setValue($type, $productId, $value)
    {
    }
    /**
     * @param $type
     * @param $productId
     *
     * @return null|int|float
     */
    private static function getValue($type, $productId)
    {
    }
    /**
     * @param $type
     * @param null $productId
     */
    private static function resetValue($type, $productId = null)
    {
    }
    /**
     * @param $productId
     * @param array $values
     */
    public static function setValues($productId, array $values)
    {
    }
}