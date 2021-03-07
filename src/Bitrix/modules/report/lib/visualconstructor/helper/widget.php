<?php

namespace Bitrix\Report\VisualConstructor\Helper;

/**
 * Class Widget
 * @package Bitrix\Report\VisualConstructor\Helper
 */
class Widget
{
    const LAZY_LOAD_MODE = true;
    /**
     * Build Widget content pas to preparing in view controller.
     *
     * @param WidgetEntity $widget Widget Entity.
     * @param bool $withCalculatedData Marker define calculate or not data in reports.
     * @return array
     */
    public static function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
    /**
     * @param View $view View Controller.
     * @param WidgetEntity $widget Widget Entity.
     * @return null
     */
    public static function getCalculatedPerformedData($view, $widget)
    {
    }
    /**
     * Load all dashboard by board key.
     * Prepare it for render.
     *
     * @param string $boardKey Board key.
     * @return array
     */
    public static function prepareBoardWithEntitiesByBoardId($boardKey)
    {
    }
    /**
     * Load dashboard for user.
     * Try load dashboard for user. if not exist return default dashboard.
     * @param string $boardKey Board key.
     * @return DashboardEntity|null
     */
    private static function getDashboard($boardKey)
    {
    }
    /**
     * Construct widget by params.
     *
     * @param array $params Parameters to construct widget.
     * @return WidgetEntity
     * @throws ArgumentException
     */
    public static function constructPseudoWidgetByParams($params)
    {
    }
    /**
     * Construct Pseudo widget by form params, to render preview in previewBlock.
     *
     * @param array $params Parameters to construct new widget.
     * @return WidgetEntity
     * @throws ArgumentException
     */
    public static function constructNewPseudoWidgetByParams($params)
    {
    }
    /**
     * Get copy from core widget. set net gId. and save.
     *
     * @param WidgetEntity $widget Entity of core widget.
     * @param string $categoryKey kay of Category to attach pattern widget.
     *
     * @return WidgetEntity
     */
    public static function saveWidgetAsCurrentUserPattern(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $categoryKey = '')
    {
    }
}