<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmCharts4;

/**
 * Base class for AmChart widget
 * @package Bitrix\Report\VisualConstructor\Views\AmChart
 */
abstract class Base extends \Bitrix\Report\VisualConstructor\Views\JsComponent\Base
{
    /**
     * Base constructor. for all AmChart diagrams.
     */
    public function __construct()
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $data Parameters prepared in report handlers.
     * @return array
     */
    public function handlerFinallyBeforePassToView($data)
    {
    }
    /**
     * Set non-displayable color field.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function collectWidgetHandlerFormElements(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Return amchar classification type.
     *
     * @return string
     */
    protected abstract function getAmChartType();
}