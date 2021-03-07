<?php

namespace Bitrix\Report\VisualConstructor\Controller;

/**
 * Class Widget
 * @package Bitrix\Report\VisualConstructor\Controller
 */
class Widget extends \Bitrix\Report\VisualConstructor\Controller\Base
{
    public function configureActions()
    {
    }
    /**
     * Action return configuration form by widget gid, and board gid.
     *
     * @param string $widgetId Widget gId.
     * @param string $boardId Board key.
     * @return Component|bool
     */
    public function showConfigurationFormAction($widgetId, $boardId)
    {
    }
    /**
     * Configuration form save handler.
     *
     * @param array $formParams Parameters form form to save widget configurations.
     * @return array|bool
     */
    public function saveConfigurationFormAction($formParams)
    {
    }
    /**
     * Create widget from form params action and save it;
     *
     * @param array $formParams Parameters from form.
     * @return array [widgetId => 'Gid of new created widget'].
     */
    public function addWidgetFromConfigurationFormAction($formParams)
    {
    }
    /**
     * @param $params
     * @return \Bitrix\Report\VisualConstructor\Entity\Widget|bool
     */
    private function createWidgetByParams($params)
    {
    }
    /**
     * Build create or configuration form.
     *
     * @param array $params Parameters to create form.
     * @return Component|bool
     */
    public function buildFormAction($params)
    {
    }
    /**
     * This action call when try to change to other view type of existing widget.
     * If new view key do not compatible with core view type return false, else true.
     *
     * @param array $params Parameters like [newViewKey => 'linearGraph', oldViewKey => 'column'].
     * @return array|bool
     */
    public function checkIsCompatibleWithSelectedViewAction($params)
    {
    }
    /**
     * Construct widget for show preview.
     *
     * @param array $params Form params will be apply in preview widget.
     * @return array|bool
     */
    public function constructPseudoWidgetAction($params)
    {
    }
    /**
     * @param ConfigurableModel $model
     * @param Base $handler
     * @param $formConfigurations
     */
    private function setConfigurableEntityConfiguration(\Bitrix\Report\VisualConstructor\Entity\ConfigurableModel $model, \Bitrix\Report\VisualConstructor\Handler\Base $handler, $formConfigurations)
    {
    }
    /**
     * Check is report id is pseudo.
     *
     * @param string $reportId Report id.
     * @return bool
     */
    private function isReportPseudo($reportId)
    {
    }
    /**
     * @param $widget
     * @param array $configuration
     */
    private function addReportToWidget(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $configuration)
    {
    }
    /**
     * Load widget params for rendering.
     *
     * @param string $widgetId Widget gId.
     * @return array|false
     */
    public function loadAction($widgetId)
    {
    }
    /**
     * Load widget by board Id.
     *
     * @param string $boardId Board id.
     * @return array
     */
    public function loadByBoardIdAction($boardId)
    {
    }
    /**
     * Widget update action.
     * Call whan save configuration form.
     *
     * @param string $boardKey Board key.
     * @param string $widgetId Widget gId.
     * @param array $params Form parameters to apply in update of widget.
     * @return string Saved widget gId.
     */
    public function updateAction($boardKey, $widgetId, $params)
    {
    }
    /**
     * Remove widget from board action.
     *
     * @param array $params Parameters like [boardId => 'some_board_id', widgetId => 'some_widget_gId'].
     * @return bool
     */
    public function removeAction($params)
    {
    }
    /**
     * Remove pattern widget.
     * Delete only current user pattern widget.
     *
     * @param string $widgetId Widget id.
     * @return void
     */
    public function removePatternAction($widgetId)
    {
    }
}