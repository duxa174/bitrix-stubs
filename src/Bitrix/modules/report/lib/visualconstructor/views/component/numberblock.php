<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * Number block for widgets with 3 numeric block.
 *
 * @package Bitrix\Report\VisualConstructor\Views
 */
class NumberBlock extends \Bitrix\Report\VisualConstructor\Views\Component\Base
{
    const VIEW_KEY = 'numberBlock';
    const MAX_RENDER_REPORT_COUNT = 3;
    const DEFAULT_EMPTY_REPORT_COUNT = 3;
    /**
     * Number block view constructor.
     */
    public function __construct()
    {
    }
    /**
     * Collect second and third report configuration block in one horizontal group.
     *
     * @param WidgetForm $form Widget form.
     * @return WidgetForm
     */
    public function prepareWidgetFormBeforeRender(\Bitrix\Report\VisualConstructor\WidgetForm $form)
    {
    }
    /**
     * Set non-displayable color field in this view type.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function collectWidgetHandlerFormElements(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * Set default colors for report configuration block if not exist.
     * Set non-displayable remove button field in this view type.
     * Attach what will calculate change event to label field.
     *
     * @param BaseReport $reportHandler Base report handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
    /**
     * Pass first report color to widget background color,.
     * In interface we modify first report color but actually we change background of all widget.
     *
     * @param Widget $widget Widget entity.
     * @param bool $withCalculatedData Marker to set calculate or no reports.
     * @return array
     */
    public function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
    /**
     * Default colors set for reports.
     *
     * @param int $num Number of color which need.
     * @return string
     */
    public function getReportDefaultColor($num)
    {
    }
}