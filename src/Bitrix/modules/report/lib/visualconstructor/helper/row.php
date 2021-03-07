<?php

namespace Bitrix\Report\VisualConstructor\Helper;

/**
 * Helper functions for Row entity
 * @package Bitrix\Report\VisualConstructor\Helper
 */
class Row
{
    /**
     * Build row layout map with passed positions.
     *
     * @param array $positions Array of available positions in built Row layout map.
     * @return array
     */
    public static function getDefaultRowLayoutMap($positions)
    {
    }
    /**
     * Row fabric generate row with layout where exist cells with ids from $positions array.
     *
     * @param array $params Parameters like [cellIds => ['cell_1', 'cell_2'], weight => 5].
     * @return DashboardRow
     * @throws ArgumentException
     */
    public static function getRowDefaultEntity($params)
    {
    }
}