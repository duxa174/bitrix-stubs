<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class Serial
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
abstract class Serial extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Base
{
    const MAX_RENDER_REPORT_COUNT = 15;
    const ENABLE_SORTING = true;
    /**
     * Serial widget base constructor.
     */
    public function __construct()
    {
    }
    /**
     * Handle all data prepared for this view.
     * Collect paremeters for pass serial amchart.
     * @see Amchart documantation.
     *
     * @param array $dataFromReport Parameters prepared in report handlers.
     * @return array
     */
    public function handlerFinallyBeforePassToView($dataFromReport)
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
     * Return amchar classification type.
     *
     * @return string
     */
    protected function getAmChartType()
    {
    }
}