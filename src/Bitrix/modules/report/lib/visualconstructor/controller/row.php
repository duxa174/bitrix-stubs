<?php

namespace Bitrix\Report\VisualConstructor\Controller;

/**
 * Class Row
 * @package Bitrix\Report\VisualConstructor\Controller
 */
class Row extends \Bitrix\Report\VisualConstructor\Controller\Base
{
    /**
     * Add row to board.
     *
     * @param array $params Parameters for adding row to board.
     * @return array|bool
     */
    public function addAction($params)
    {
    }
    /**
     * Adjust rows weights. for saving rows sorting.
     *
     * @param string $boardKey Board key.
     * @param array $rows Row parameters like [gid => [weight => 1]].
     * @return array|bool
     */
    public function adjustWeightsAction($boardKey, $rows)
    {
    }
    /**
     * Delete row action.
     *
     * @param array $params Parameters like [boardId => 'some_board_id', rowId => 'some_sow_gid'].
     * @return int|bool
     */
    public function deleteAction($params)
    {
    }
}