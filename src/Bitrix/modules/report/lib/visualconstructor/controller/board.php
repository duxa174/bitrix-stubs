<?php

namespace Bitrix\Report\VisualConstructor\Controller;

/**
 * Class Board
 * @package Bitrix\Report\VisualConstructor\Controller
 */
class Board extends \Bitrix\Report\VisualConstructor\Controller\Base
{
    /**
     * Set user default board to his own or to default of system.
     *
     * @param string $boardKey Key for finding dashboard.
     * @return bool
     */
    public function toggleToDefaultAction($boardKey)
    {
    }
    /**
     * @param string $boardKey Board Key.
     * @return array
     */
    public function toggleModeAction($boardKey)
    {
    }
    /**
     * Return rendered add form component.
     *
     * @param array $categories Categories ids.
     * @param string $boardId Board Id for pass to add form component.
     * @return Component
     */
    public function showAddFormAction($categories, $boardId)
    {
    }
    /**
     * Handler for submit dashboard add form.
     *
     * @param array $formParams Parameters send from form.
     * @return array|bool
     */
    public function submitAddFormAction($formParams = array())
    {
    }
    /**
     * @param array $formParams Parameters send from form.
     * @return mixed
     */
    private function createWidgetFromExisting($formParams)
    {
    }
}