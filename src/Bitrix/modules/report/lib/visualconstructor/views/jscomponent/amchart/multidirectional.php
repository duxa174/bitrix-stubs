<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class MultiDirectional.
 * Construct 2 directional linear graph,
 * First report in first direction, second in second sdirection.
 *
 * @package Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart
 */
class MultiDirectional extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Serial
{
    const VIEW_KEY = 'multiDirectional';
    const MAX_RENDER_REPORT_COUNT = 2;
    const DEFAULT_EMPTY_REPORT_COUNT = 2;
    /**
     * Multidirecional graoph constructor.
     */
    public function __construct()
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
     * Method to modify widget form elements.
     *
     * @param BaseReport $reportHandler Widget handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
}