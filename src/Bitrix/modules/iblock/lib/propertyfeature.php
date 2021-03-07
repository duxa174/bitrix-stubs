<?php

namespace Bitrix\Iblock;

/**
 * Class PropertyFeatureTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PROPERTY_ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> FEATURE_ID string(100) mandatory
 * <li> IS_ENABLED bool optional default 'N'
 * <li> PROPERTY reference to {@link \Bitrix\Iblock\PropertyTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class PropertyFeatureTable extends \Bitrix\Main\ORM\Data\DataManager
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
    /**
     * Returns validators for MODULE_ID field.
     *
     * @return array
     */
    public static function validateModuleId()
    {
    }
    /**
     * Returns validators for FEATURE_ID field.
     *
     * @return array
     */
    public static function validateFeatureId()
    {
    }
    /**
     * Delete all features for property.
     *
     * @param int $property		Property Id.
     * @return void
     */
    public static function deleteByProperty($property)
    {
    }
}