<?php

namespace Bitrix\Landing\Source;

class FilterEntity extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'FilterEntityTable';
    /**
     * Gets selector object.
     * @return Selector
     */
    protected static function getSourceSelector()
    {
    }
    /**
     * Gets filter row by id.
     * @param int $filterId Filter id.
     * @return array
     */
    public static function getFilter($filterId)
    {
    }
    /**
     * Store the filter for the block.
     * @param int $blockId Block id.
     * @param array $sourceParams Source params for this block.
     * @return void
     */
    public static function setFilter($blockId, array &$sourceParams = [])
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
}