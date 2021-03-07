<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * NumberBlock with formula, this view type create widget type like number block except last report, last report will change with formula
 * @package Bitrix\Report\VisualConstructor\Views\Component
 */
class NumberBlockWithFormula extends \Bitrix\Report\VisualConstructor\Views\Component\NumberBlock
{
    const VIEW_KEY = 'numberBlockAAA';
    const MAX_RENDER_REPORT_COUNT = 3;
    const DEFAULT_EMPTY_REPORT_COUNT = 3;
    /**
     * Number block with formula constructor constructor.
     */
    public function __construct()
    {
    }
    /**
     * When building new widget, add default Report handlers to widget.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return BaseWidget
     */
    public function addDefaultReportHandlersToWidgetHandler(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Set non-displayable calculate and report category fields.
     *
     * @param BaseReport $reportHandler Report handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
}