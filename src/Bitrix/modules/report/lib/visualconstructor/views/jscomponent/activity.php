<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent;

/**
 * Class Activity
 * @package Bitrix\Report\VisualConstructor\Views\JsComponent
 */
class Activity extends \Bitrix\Report\VisualConstructor\Views\JsComponent\Base
{
    const VIEW_KEY = 'activity';
    const MAX_RENDER_REPORT_COUNT = 1;
    /**
     * Activity constructor.
     */
    public function __construct()
    {
    }
    /**
     * Method to modify widget form elements.
     *
     * @param BaseReport $reportHandler Widget handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @see IReportMultipleGroupedData::getMultipleGroupedData().
     * @param array $dataFromReport Calculated data from report handler.
     * @return array
     */
    public function handlerFinallyBeforePassToView($dataFromReport)
    {
    }
    /**
     * Week days labels map.
     *
     * @return array
     */
    private function getWeekDaysMap()
    {
    }
    /**
     * Get Hour list for grouping data by hour.
     *
     * @return array
     */
    private function getHourList()
    {
    }
    /**
     * Always in activity widget report color should be white.
     *
     * @param int $num Number of color which need.
     * @return string
     */
    public function getReportDefaultColor($num)
    {
    }
}