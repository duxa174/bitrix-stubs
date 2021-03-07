<?php

namespace Bitrix\Report\VisualConstructor\Helper;

/**
 * Class Report
 * @package Bitrix\Report\VisualConstructor\Helper
 */
class Report
{
    /**
     * Build Pseudo report in context of widget.
     *
     * @param string $reportHandlerClassName Report handler class name.
     * @param \Bitrix\Report\VisualConstructor\Entity\Widget $widget Widget entity.
     * @param bool $isPseudo Marker to set built widget will be pseudo or no.
     * @return BaseReport|null
     */
    public static function buildReportHandlerForWidget($reportHandlerClassName, \Bitrix\Report\VisualConstructor\Entity\Widget $widget, $isPseudo = false)
    {
    }
}