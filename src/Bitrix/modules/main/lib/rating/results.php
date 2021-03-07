<?php

namespace Bitrix\Main\Rating;

/**
 * Class ResultsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> RATING_ID int mandatory
 * <li> ENTITY_TYPE_ID string(50) mandatory
 * <li> ENTITY_ID int mandatory
 * <li> CURRENT_VALUE double optional
 * <li> PREVIOUS_VALUE double optional
 * <li> CURRENT_POSITION int optional
 * <li> PREVIOUS_POSITION int optional
 * <li> RATING reference to {@link \Bitrix\Main\Rating\RatingTable}
 * </ul>
 *
 * @package Bitrix\Main\Rating
 **/
class ResultsTable extends \Bitrix\Main\Entity\DataManager
{
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
    public static function add(array $data)
    {
    }
    public static function update($primary, array $data)
    {
    }
    public static function delete($primary)
    {
    }
}