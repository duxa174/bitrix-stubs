<?php

namespace Bitrix\Landing\Internals;

class FilterEntityTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Apply the block to the filter.
     * @param int $filterId Filter id.
     * @param int $blockId Block id.
     * @return void
     */
    public static function applyBlock($filterId, $blockId)
    {
    }
    /**
     * Remove the block from all filters.
     * @param int $blockId Block id.
     * @return void
     */
    public static function removeBlock($blockId)
    {
    }
    /**
     * Remove not used filters.
     * @return void
     */
    protected static function actualFilters()
    {
    }
}