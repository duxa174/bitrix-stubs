<?php

namespace Bitrix\Sale\Internals;

/**
 * Class OrderRoundTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> APPLY_BLOCK_COUNTER int mandatory
 * <li> ORDER_ROUND string(1) mandatory
 * <li> ENTITY_TYPE int mandatory
 * <li> ENTITY_ID int mandatory
 * <li> ENTITY_VALUE string(255) optional
 * <li> APPLY string(1) mandatory
 * <li> ROUND_RULE string mandatory
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class OrderRoundTable extends \Bitrix\Main\Entity\DataManager
{
    const ENTITY_TYPE_BASKET_ITEM = 0x1;
    /** @deprecated */
    const ENTITY_TYPE_BASKET = self::ENTITY_TYPE_BASKET_ITEM;
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
     * Returns validators for ENTITY_VALUE field.
     *
     * @return array
     */
    public static function validateEntityValue()
    {
    }
    /**
     * Delete data by order.
     *
     * @param int $order		Order id.
     * @return bool
     */
    public static function clearByOrder($order)
    {
    }
}