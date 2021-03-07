<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class Pie
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
class PieDiagram extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Base
{
    const VIEW_KEY = 'pieDiagram';
    const MAX_RENDER_REPORT_COUNT = 1;
    const DEFAULT_EMPTY_REPORT_COUNT = 1;
    /**
     * PieDiagram constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return list of compatible view type keys, to this view types can switch without reform configurations.
     *
     * @return array
     */
    public function getCompatibleViewTypes()
    {
    }
    /**
     * Get custom colors list.
     *
     * @return array
     */
    public function getCustomColorList()
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $dataFromReport Parameters prepared in report handlers.
     * @return array
     */
    public function handlerFinallyBeforePassToView($dataFromReport)
    {
    }
    /**
     * Return amchar classification type.
     *
     * @return string
     */
    protected function getAmChartType()
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
     * Always in pie diagram report color should be white.
     *
     * @param int $num Number of color which need.
     * @return string
     */
    public function getReportDefaultColor($num)
    {
    }
}