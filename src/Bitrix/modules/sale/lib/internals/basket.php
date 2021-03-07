<?php

namespace Bitrix\Sale\Internals;

class BasketTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @param $id
     * @return Main\Entity\DeleteResult
     * @throws Main\ArgumentException
     */
    public static function deleteBundle($id)
    {
    }
    /**
     * @param $id
     * @return Main\Entity\DeleteResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function deleteWithItems($id)
    {
    }
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for CURRENCY field.
     *
     * @return array
     */
    public static function validateCurrency()
    {
    }
    /**
     * Returns validators for LID field.
     *
     * @return array
     */
    public static function validateLid()
    {
    }
    /**
     * Returns validators for DISCOUNT_NAME field.
     *
     * @return array
     */
    public static function validateDiscountName()
    {
    }
    /**
     * Returns validators for DISCOUNT_VALUE field.
     *
     * @return array
     */
    public static function validateDiscountValue()
    {
    }
    /**
     * Returns validators for DISCOUNT_COUPON field.
     *
     * @return array
     */
    public static function validateDiscountCoupon()
    {
    }
}