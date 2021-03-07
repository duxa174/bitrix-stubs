<?php

namespace Bitrix\Sale\Discount\Index;

final class IndexElementTable extends \Bitrix\Main\Entity\DataManager
{
    const MAX_LENGTH_BATCH_MYSQL_QUERY = 2048;
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
     * Deletes rows by discount id.
     *
     * @param int $discountId Id of discount.
     * @return void
     */
    public static function deleteByDiscount($discountId)
    {
    }
    public static function fillByDiscount($discountId, array $indexData)
    {
    }
    /**
     * Adds rows to table.
     * @param array $items Items.
     * @internal
     */
    private static function insertBatch(array $items)
    {
    }
}