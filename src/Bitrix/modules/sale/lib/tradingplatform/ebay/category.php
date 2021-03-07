<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class CategoryTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> NAME int mandatory
 * <li> CATEGORY_ID int mandatory
 * <li> PARENT_ID int mandatory
 * <li> LEVEL int mandatory
 * <li> CONDITION_ID_VALUES string(255) optional
 * <li> CONDITION_ID_DEFINITION_URL string(255) optional
 * <li> ITEM_SPECIFIC_ENABLED string(1) optional
 * <li> VARIATIONS_ENABLED string(1) optional
 * <li> PRODUCT_CREATION_ENABLED string(1) optional
 * <li> LAST_UPDATE string(1) optional
 * </ul>
 *
 * @package Bitrix\Sale\TradingPlatform\Ebay
 **/
class CategoryTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param string $ebayCategoryId Ebay category Id.
     * @return array Ebay category parents chain till top level.
     */
    public static function getCategoryParents($ebayCategoryId)
    {
    }
    /**
     * Overrides parent update  to sate update date to current.
     * @param mixed $primary Primary key.
     * @param array $data Data fields.
     * @return Entity\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    public static function validateName()
    {
    }
}