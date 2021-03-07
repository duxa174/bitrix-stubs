<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Class Report
 * @package Bitrix\Report\VisualConstructor\Entity
 */
class Report extends \Bitrix\Report\VisualConstructor\Entity\ConfigurableModel
{
    protected $gId;
    protected $widgetId;
    protected $reportClassName;
    /** @var BaseReport $reportHandler */
    protected $reportHandler;
    protected $weight = 0;
    /**
     * @var Widget $widget
     */
    protected $widget;
    /**
     * @return string
     */
    public static function getTableClassName()
    {
    }
    /**
     * Returns the list of pair for mapping data and object properties.
     * Key is field in DataManager, value is object property.
     *
     * @return array
     */
    public static function getMapAttributes()
    {
    }
    /**
     * @return array
     */
    public static function getMapReferenceAttributes()
    {
    }
    /**
     * Load widget with nested relations by widget gId.
     *
     * @param string $reportGId Widget gId.
     * @return Report
     */
    public static function getReportByGId($reportGId)
    {
    }
    /**
     * Get copy of report entity with nested relations,
     *
     * @return Report
     */
    public function getCopy()
    {
    }
    /**
     * @return mixed
     */
    public function getWidgetId()
    {
    }
    /**
     * Connection report to widget.
     *
     * @param mixed $widgetId Widget id.
     * @return void
     */
    public function setWidgetId($widgetId)
    {
    }
    /**
     * @return string
     */
    public function getReportClassName()
    {
    }
    /**
     * Setter for report class name.
     *
     * @see BaseReport::getClassName()
     * @param string $reportClassName Report class name.
     * @return void
     */
    public function setReportClassName($reportClassName)
    {
    }
    /**
     * Find report handler by report class name,in report provider.
     * Return it if exist or return null.
     *
     * @param bool $isRuntime
     *
     * @return BaseReport|null
     */
    public function getReportHandler($isRuntime = false)
    {
    }
    /**
     * Setter for report handler.
     *
     * @param BaseReport $handler Report handler.
     * @return void
     */
    public function setReportHandler(\Bitrix\Report\VisualConstructor\Handler\BaseReport $handler)
    {
    }
    /**
     * @return mixed
     */
    public function getWeight()
    {
    }
    /**
     * Setter of Weight in report list of widget. (for sorting).
     *
     * @param mixed $weight Weight of report.
     * @return void
     */
    public function setWeight($weight)
    {
    }
    /**
     * Get Widget, if not exist try to load it from db.
     *
     * @return Widget
     */
    public function getWidget()
    {
    }
    /**
     * Attach report to widget.
     * @param Widget $widget Widget entity.
     * @return void
     */
    public function setWidget($widget)
    {
    }
    /**
     * @return mixed
     */
    public function getGId()
    {
    }
    /**
     * Setter for gId.
     *
     * @param mixed $gId Value og gId.
     * @return void
     */
    public function setGId($gId)
    {
    }
}