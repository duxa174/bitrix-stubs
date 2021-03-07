<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Class Funnel
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
class Funnel extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\PieDiagram
{
    const VIEW_KEY = 'funnel';
    /**
     * Funnel view type constructor. set label and miniature src.
     *
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
     * Return amchar classification type.
     *
     * @return string
     */
    protected function getAmChartType()
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
}