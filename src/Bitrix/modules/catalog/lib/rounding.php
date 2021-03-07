<?php

namespace Bitrix\Catalog;

/**
 * Class RoundingTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CATALOG_GROUP_ID int mandatory
 * <li> PRICE double mandatory
 * <li> ROUND_TYPE int mandatory
 * <li> ROUND_PRECISION double mandatory
 * <li> CREATED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> MODIFIED_BY int optional
 * <li> TIMESTAMP_X datetime optional
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class RoundingTable extends \Bitrix\Main\Entity\DataManager
{
    const ROUND_MATH = 0x1;
    const ROUND_UP = 0x2;
    const ROUND_DOWN = 0x4;
    /** @var int clear rounding cache flag */
    protected static $clearCache = 0;
    /** @var array price type list for clear */
    protected static $priceTypeIds = array();
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
     * Default onBeforeAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for add.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for add.
     * @return void
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onBeforeUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return void
     */
    public static function onUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return void
     */
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for delete.
     * @return void
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for delete.
     * @return void
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Returns current allow mode for cache clearing.
     *
     * @return bool
     */
    public static function isAllowedClearCache()
    {
    }
    /**
     * Allow clear cache after multiuse add/update/delete.
     *
     * @return void
     */
    public static function allowClearCache()
    {
    }
    /**
     * Disallow clear cache before multiuse add/update/delete.
     *
     * @return void
     */
    public static function disallowClearCache()
    {
    }
    /**
     * Clear price type ids.
     *
     * @return void
     */
    public static function clearPriceTypeIds()
    {
    }
    /**
     * Set price type list for cache clearing.
     *
     * @param string|int|array $priceTypes		Price types for cache clearing.
     * @return void
     */
    public static function setPriceTypeIds($priceTypes)
    {
    }
    /**
     * Clear managed cache.
     *
     * @return void
     */
    public static function clearCache()
    {
    }
    /**
     * Delete rules by price type.
     *
     * @param string|int $priceType		Price type id.
     * @return void
     */
    public static function deleteByPriceType($priceType)
    {
    }
    /**
     * Return round types.
     *
     * @param bool $full		Get types with description.
     * @return array
     */
    public static function getRoundTypes($full = false)
    {
    }
    /**
     * Fill user id fields.
     *
     * @param array &$result			Modified data for add/update discount.
     * @param array $data				Current data for add/update discount.
     * @param array $keys				List with checked keys (userId info).
     * @return void
     */
    protected static function setUserId(array &$result, array $data, array $keys)
    {
    }
    /**
     * Fill datetime fields.
     *
     * @param array &$result			Modified data for add/update discount.
     * @param array $data				Current data for add/update discount.
     * @param array $keys				List with checked keys (datetime info).
     * @return void
     */
    protected static function setTimestamp(array &$result, array $data, array $keys)
    {
    }
}