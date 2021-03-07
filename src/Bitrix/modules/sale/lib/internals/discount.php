<?php

namespace Bitrix\Sale\Internals;

/**
 * Class DiscountTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> XML_ID string(255) optional
 * <li> LID string(2) mandatory
 * <li> NAME string(255) optional
 * <li> PRICE_FROM float optional
 * <li> PRICE_TO float optional
 * <li> CURRENCY string(3) optional
 * <li> DISCOUNT_VALUE float mandatory
 * <li> DISCOUNT_TYPE string(1) mandatory default 'P'
 * <li> ACTIVE bool optional default 'Y'
 * <li> SORT int optional default 100
 * <li> ACTIVE_FROM datetime optional
 * <li> ACTIVE_TO datetime optional
 * <li> TIMESTAMP_X datetime optional
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> PRIORITY int optional default 1
 * <li> LAST_DISCOUNT bool optional default 'Y'
 * <li> VERSION int optional default 3
 * <li> CONDITIONS text optional
 * <li> CONDITIONS_LIST text optional
 * <li> UNPACK text optional
 * <li> ACTIONS text optional
 * <li> ACTIONS_LIST text optional
 * <li> APPLICATION text optional
 * <li> PREDICTION_TEXT text optional
 * <li> PREDICTIONS text optional
 * <li> PREDICTIONS_APP text optional
 * <li> USE_COUPONS bool optional default 'N'
 * <li> USE_INDEX bool optional default 'N'
 * <li> PRESET_ID string optional
 * <li> EXECUTE_MODULE string(50) mandatory default 'all'
 * <li> EXECUTE_MODE int default 0
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class DiscountTable extends \Bitrix\Main\Entity\DataManager
{
    const VERSION_OLD = 0x1;
    const VERSION_NEW = 0x2;
    const VERSION_15 = 0x3;
    const EXECUTE_MODE_GENERAL = 0;
    const EXECUTE_MODE_SEPARATELY = 2;
    protected static $deleteCoupons = false;
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
     * Returns validators for LID field.
     *
     * @return array
     */
    public static function validateLid()
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
     * Returns validators for DISCOUNT_TYPE field.
     *
     * @return array
     */
    public static function validateDiscountType()
    {
    }
    /**
     * Returns validators for EXECUTE_MODULE field.
     *
     * @return array
     */
    public static function validateExecuteModule()
    {
    }
    /**
     * Returns validators for PRESET_ID field.
     *
     * @return array
     */
    public static function validatePresetId()
    {
    }
    /**
     * Default onBeforeAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return void
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Resolves execute mode of discount. Yes, we are getting whole discount by id. But id is necessary to know and
     * we can do analyze only whole discount.
     * @param $discountId
     *
     * @return int
     */
    protected static function resolveExecuteModeByDiscountId($discountId)
    {
    }
    /**
     * Updates discount configuration. For example the method sets possibility of separately discount calculation.
     *
     * @param array $fields Fields.
     * @param array $specificFields Specific fields which based on fields and calculated.
     * @return void
     */
    protected static function updateConfigurationIfNeeded(array $fields, array $specificFields)
    {
    }
    /**
     * Updates fields without ORM logic.
     * @param $id
     * @param array $fields
     */
    protected static function updateSpecificFields($id, array $fields)
    {
    }
    /**
     * Default onBeforeUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return void
     */
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return void
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Event object.
     * @return void
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Set exist coupons flag for discount list.
     *
     * @param array $discountList			Discount ids for update.
     * @param string $use				Value for update use coupons.
     * @return void
     */
    public static function setUseCoupons($discountList, $use)
    {
    }
    /**
     * Set exist coupons flag for all discounts.
     *
     * @param string $use				Value for update use coupons for all discount.
     * @return void
     */
    public static function setAllUseCoupons($use)
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
    protected static function setUserID(&$result, $data, $keys)
    {
    }
    protected static function setShortDescription(&$result, array $data)
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
    protected static function setTimestamp(&$result, $data, $keys)
    {
    }
    /**
     * Remove values from old fields conditions and actions (for compatibility with old api).
     *
     * @param array &$result			Modified data for add/update discount.
     * @param array $data				Current data for add/update discount.
     * @return void
     */
    protected static function copyOldFields(&$result, $data)
    {
    }
    /**
     * Temporary drop iblock cache method.
     *
     * @return void
     * @throws Main\LoaderException
     */
    private static function dropIblockCache()
    {
    }
}