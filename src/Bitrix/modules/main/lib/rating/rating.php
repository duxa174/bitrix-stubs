<?php

namespace Bitrix\Main\Rating;

/**
 * Class RatingTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ACTIVE string(1) mandatory
 * <li> NAME string(512) mandatory
 * <li> ENTITY_ID string(50) mandatory
 * <li> CALCULATION_METHOD string(3) mandatory default 'SUM'
 * <li> CREATED datetime optional
 * <li> LAST_MODIFIED datetime optional
 * <li> LAST_CALCULATED datetime optional
 * <li> POSITION bool optional default 'N'
 * <li> AUTHORITY bool optional default 'N'
 * <li> CALCULATED bool optional default 'N'
 * <li> CONFIGS string optional
 * </ul>
 *
 * @package Bitrix\Rating
 **/
class RatingTable extends \Bitrix\Main\Entity\DataManager
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