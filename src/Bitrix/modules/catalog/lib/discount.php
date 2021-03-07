<?php

namespace Bitrix\Catalog;

/**
 * Class DiscountTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> XML_ID string(255) optional
 * <li> SITE_ID string(2) mandatory
 * <li> TYPE int mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> ACTIVE_FROM datetime optional
 * <li> ACTIVE_TO datetime optional
 * <li> RENEWAL bool optional default 'N'
 * <li> NAME string(255) optional
 * <li> SORT int optional default 100
 * <li> MAX_DISCOUNT double optional
 * <li> VALUE_TYPE string(1) mandatory default 'P'
 * <li> VALUE double mandatory default 0.0000
 * <li> CURRENCY string(3) mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> COUNT_PERIOD string(1) mandatory default 'U'
 * <li> COUNT_SIZE int mandatory
 * <li> COUNT_TYPE bool optional default 'Y'
 * <li> COUNT_FROM datetime optional
 * <li> COUNT_TO datetime optional
 * <li> ACTION_SIZE int mandatory
 * <li> ACTION_TYPE bool optional default 'Y'
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> PRIORITY int optional default 1
 * <li> LAST_DISCOUNT bool optional default 'Y'
 * <li> VERSION int optional default 1
 * <li> NOTES string(255) optional
 * <li> CONDITIONS string optional
 * <li> UNPACK string optional
 * <li> USE_COUPONS bool optional default 'N'
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> RESTRICTION reference to {@link \Bitrix\Catalog\DiscountRestriction}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class DiscountTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_DISCOUNT = 0;
    const TYPE_DISCOUNT_SAVE = 1;
    const VALUE_TYPE_PERCENT = 'P';
    const VALUE_TYPE_FIX = 'F';
    const VALUE_TYPE_SALE = 'S';
    const COUNT_PERIOD_TYPE_ALL = 'U';
    const COUNT_PERIOD_TYPE_INTERVAL = 'D';
    const COUNT_PERIOD_TYPE_PERIOD = 'P';
    const COUNT_TYPE_SIZE_DAY = 'D';
    const COUNT_TYPE_SIZE_MONTH = 'M';
    const COUNT_TYPE_SIZE_YEAR = 'Y';
    const ACTION_PERIOD_TYPE_ALL = 'U';
    const ACTION_PERIOD_TYPE_INTERVAL = 'D';
    const ACTION_PERIOD_TYPE_PERIOD = 'P';
    const ACTION_TYPE_SIZE_DAY = 'D';
    const ACTION_TYPE_SIZE_MONTH = 'M';
    const ACTION_TYPE_SIZE_YEAR = 'Y';
    const ACTUAL_VERSION = 2;
    const OLD_VERSION = 1;
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for XML_ID field.
     *
     * @return array
     */
    public static function validateXmlId()
    {
    }
    /**
     * Returns validators for SITE_ID field.
     *
     * @return array
     */
    public static function validateSiteId()
    {
    }
    /**
     * Returns validators for TYPE field.
     *
     * @return array
     */
    public static function validateType()
    {
    }
    /**
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
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
     * Returns validators for NOTES field.
     *
     * @return array
     */
    public static function validateNotes()
    {
    }
    /**
     * Check TYPE field.
     *
     * @param int $value					Current field value.
     * @param int|array $primary			Primary key.
     * @param array $row					Current data.
     * @param Main\Entity\Field $field		Field object.
     * @return bool|string
     */
    public static function checkType($value, $primary, array $row, \Bitrix\Main\Entity\Field $field)
    {
    }
    /**
     * Add discount.
     *
     * @param array $data			Discount data.
     * @return Main\Entity\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates discount by primary key.
     *
     * @param mixed $primary		Discount primary key.
     * @param array $data			Discount data.
     * @return Main\Entity\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Deletes discount by primary key.
     *
     * @param mixed $primary		Discount primary key.
     * @return Main\Entity\DeleteResult
     */
    public static function delete($primary)
    {
    }
    /**
     * Convert discount data to other currency (sale currency).
     *
     * @param array &$discount				Discout data.
     * @param string $currency				New currency.
     * @return void
     */
    public static function convertCurrency(&$discount, $currency)
    {
    }
    /**
     * Set exist coupons flag for discount list.
     *
     * @param array|int $discountList		Discount ids for update.
     * @param string $use					Value for update use coupons.
     * @return void
     */
    public static function setUseCoupons($discountList, $use)
    {
    }
}