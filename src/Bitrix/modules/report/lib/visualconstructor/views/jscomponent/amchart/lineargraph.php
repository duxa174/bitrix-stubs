<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

/**
 * Classic  Linear Graph with two orientation
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
class LinearGraph extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Serial
{
    const VIEW_KEY = 'linearGraph';
    /**
     * Linear graph constructor.
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
}