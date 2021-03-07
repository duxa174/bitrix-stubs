<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmCharts4;

/**
 * Class Serial
 * @package Bitrix\Report\VisualConstructor\Views\AmCharts4
 */
abstract class Serial extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmCharts4\Base
{
    const MAX_RENDER_REPORT_COUNT = 15;
    const ENABLE_SORTING = true;
    const USE_IN_VISUAL_CONSTRUCTOR = false;
    /**
     * Serial widget base constructor.
     */
    public function __construct()
    {
    }
    /**
     * Handle all data prepared for this view.
     * Collect parameters for pass serial amchart.
     * @param array $dataFromReport Parameters prepared in report handlers.
     * @return array
     * @see Amchart documantation.
     *
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