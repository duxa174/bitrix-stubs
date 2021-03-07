<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * Class Number
 * @package Bitrix\Report\VisualConstructor\Views
 */
class Number extends \Bitrix\Report\VisualConstructor\Views\Component\Base
{
    const VIEW_KEY = 'number';
    const MAX_RENDER_REPORT_COUNT = 1;
    /**
     * Number constructor.
     */
    public function __construct()
    {
    }
    /**
     * Method to modify report form elements.
     *
     * @param BaseReport $reportHandler Report handler.
     * @return void
     */
    public function collectReportHandlerFormElements($reportHandler)
    {
    }
    /**
     * Method to modify Content which pass to widget view, in absolute end.
     * Set widget color from report color.
     * In interface we choose color for report, but actually change widget background color.
     *
     * @param Widget $widget Widget entity.
     * @param bool $withCalculatedData Marker for calculate or not reports.
     * @return array
     */
    public function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
}