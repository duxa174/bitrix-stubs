<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

class Grid extends \Bitrix\Report\VisualConstructor\Views\Component\GroupedDataGrid
{
    const VIEW_KEY = 'grid';
    const MAX_RENDER_REPORT_COUNT = 15;
    const USE_IN_VISUAL_CONSTRUCTOR = false;
    public function __construct()
    {
    }
    public function handlerFinallyBeforePassToView($calculatedPerformedData)
    {
    }
    /**
     * Method to modify widget form elements.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function collectWidgetHandlerFormElements(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
}