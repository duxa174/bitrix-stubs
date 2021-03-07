<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class DonutDiagram
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
class DonutDiagram extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\PieDiagram
{
    const VIEW_KEY = 'donutDiagram';
    const MAX_RENDER_REPORT_COUNT = 1;
    /**
     * Pie diagram constructor.
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
}