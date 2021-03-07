<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmCharts4;

/**
 * Class Column
 * @package Bitrix\Report\VisualConstructor\Views\AmCharts4
 */
class Column extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmCharts4\Serial
{
    const VIEW_KEY = 'amcharts4_column';
    const USE_IN_VISUAL_CONSTRUCTOR = false;
    /**
     * Column view type constructor constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return list of compatible view type keys, to this view types can switch without reform configurations.
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
}