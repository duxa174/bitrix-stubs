<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart;

class ColumnLogarithmic extends \Bitrix\Report\VisualConstructor\Views\JsComponent\AmChart\Column
{
    const VIEW_KEY = "columnLogarithmic";
    const ENABLE_SORTING = false;
    /**
     * Column view type constructor constructor.
     */
    public function __construct()
    {
    }
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