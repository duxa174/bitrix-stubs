<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * Class Number
 * @package Bitrix\Report\VisualConstructor\Views
 */
class GroupedDataGrid extends \Bitrix\Report\VisualConstructor\Views\Component\Base
{
    const VIEW_KEY = 'tripleDataWithProgress';
    const MAX_RENDER_REPORT_COUNT = 8;
    /**
     * Number constructor.
     */
    public function __construct()
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $calculatedPerformedData Calculated data from report handler.
     * @return array
     */
    public function handlerFinallyBeforePassToView($calculatedPerformedData)
    {
    }
    /**
     * Method to modify widget form elements.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function collectWidgetHandlerFormElements(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Method to modify report form elements.
     *
     * @param BaseReport $reportHandler Report handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
    /**
     * Always in this report color should be gray.
     *
     * @param int $num Number of color which need.
     * @return string
     */
    public function getReportDefaultColor($num)
    {
    }
}