<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Class Widget
 * @method addReports(Report | Report[] $report) add report/reports to this widget.
 * @method deleteReports(Report | Report[] $report) delete report connection adn if it is ONE-TO-MANY delete Report entity.
 * @method deleteRow(DashboardRow $row) delete report connection with row.
 * @package Bitrix\Report\VisualConstructor\Entity
 */
class Widget extends \Bitrix\Report\VisualConstructor\Entity\ConfigurableModel
{
    protected $gId;
    protected $weight;
    protected $boardId;
    protected $rowId;
    protected $widgetClass;
    /**
     * @var BaseWidget $widgetHandler.
     */
    protected $widgetHandler;
    protected $viewKey;
    protected $ownerId = 0;
    protected $categoryKey = '';
    protected $isPattern = false;
    protected $parentWidgetId = 0;
    /** @var Report[] $reports */
    protected $reports = array();
    /** @var DashboardRow $row */
    protected $row;
    /** @var Widget $parentWidget */
    protected $parentWidget;
    /** @var Widget[] $childWidgets */
    protected $childWidgets = array();
    /**
     * Widget constructor.
     */
    public function __construct()
    {
    }
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
     * Delete widget if it is not pattern.
     *
     * @return bool|null
     */
    public function delete()
    {
    }
    /**
     * Delete pattern widget.
     *
     * @return bool|null
     */
    public function deletePatternWidget()
    {
    }
    /**
     * Attach report handler to widget handler.
     *
     * @param BaseReport $reportHandler Report handler.
     * @return void
     */
    public function addReportHandler(\Bitrix\Report\VisualConstructor\Handler\BaseReport $reportHandler)
    {
    }
    /**
     * @param bool $isRuntime
     *
     * @return BaseWidget
     */
    public function getWidgetHandler($isRuntime = false)
    {
    }
    /**
     * Setter for widget handler.
     * Set class name and set widget handler.
     *
     * @param BaseWidget $widgetHandler Widget handler.
     * @return void
     */
    public function setWidgetHandler(\Bitrix\Report\VisualConstructor\Handler\BaseWidget $widgetHandler)
    {
    }
    /**
     * @return Report[]
     */
    public function getReports()
    {
    }
    /**
     * Return report list, key in list get from gId.
     *
     * @return Report[]
     */
    public function getReportsGidKeyed()
    {
    }
    /**
     * @param string $reportGId
     * @return Report|null
     */
    public function getReportByGId($reportGId)
    {
    }
    /**
     * @return string
     */
    public function getBoardId()
    {
    }
    /**
     * Setter for board id.
     *
     * @param string $boardId Board id.
     * @return void
     */
    public function setBoardId($boardId)
    {
    }
    /**
     * @return string
     */
    public function getViewKey()
    {
    }
    /**
     * Setter for view key.
     *
     * @param string $viewKey View key.
     * @return void
     */
    public function setViewKey($viewKey)
    {
    }
    /**
     * construct and return filter name base on widget id.
     *
     * @return string
     */
    public function getFilterId()
    {
    }
    /**
     * Perform copy of widget with copies of nested relations.
     *
     * @return Widget
     */
    public function getCopyForCurrentUser()
    {
    }
    /**
     * Get Widget by board id.
     * Load all nested relation.
     *
     * @param string $boardId Board id.
     * @return static[]
     */
    public static function getWidgetsByBoard($boardId)
    {
    }
    /**
     * @return Widget[]
     */
    public static function getCurrentUserPatternedWidgets()
    {
    }
    /**
     * Load widget and get configurations of loaded widget.
     *
     * @param string $widgetId Widget.
     * @return Configuration[]
     */
    public static function getWidgetConfigurations($widgetId)
    {
    }
    /**
     * Load and return widget by widget id.
     *
     * @param string $widgetId Widget id.
     * @return static
     */
    public static function getWidgetById($widgetId)
    {
    }
    /**
     * Get current user widget by widget id with nested relations,
     *
     * @param string $widgetGId Widget gId.
     * @return Widget
     */
    public static function getCurrentUserWidgetByGId($widgetGId)
    {
    }
    /**
     * If parameter start with pseudo_ then create new widget.
     * Else try to load widget by gid, and change view key.
     *
     * @param array $params Parameters to build pseudo widget. [viewKey => 'number', widgetGId => 'pseudo_widget_gid'].
     * @return Widget
     */
    public static function buildPseudoWidget($params)
    {
    }
    /**
     * Load widget with nested relations by widget gId.
     *
     * @param string $widgetGId Widget gId.
     * @return Widget
     */
    public static function getWidgetByGId($widgetGId)
    {
    }
    /**
     * Load widget with nested relations by widget Id.
     *
     * @param string $widgetId Widget id.
     * @return Widget
     */
    public static function getWidgetByIdWithReports($widgetId)
    {
    }
    /**
     * Remove current user widget by gId.
     *
     * @param string $widgetGId Widget gId.
     * @return boolean
     */
    public static function removeCurrentUserWidgetByGId($widgetGId)
    {
    }
    /**
     * @return int
     */
    public function getWeight()
    {
    }
    /**
     * Setter for widget position.
     *
     * @param string $weight Position of widget in row.
     * @return void
     */
    public function setWeight($weight)
    {
    }
    /**
     * @return string
     */
    public function getWidgetClass()
    {
    }
    /**
     * Widget handler class name.
     *
     * @see BaseWidget::getClassName().
     * @param string $widgetClass Widget handler class name.
     * @return void
     */
    public function setWidgetClass($widgetClass)
    {
    }
    /**
     * @return DashboardRow
     */
    public function getRow()
    {
    }
    /**
     * Setter for row.
     *
     * @param DashboardRow $row Row Entity where place widget.
     * @return void
     */
    public function setRow(\Bitrix\Report\VisualConstructor\Entity\DashboardRow $row)
    {
    }
    /**
     * @return bool
     */
    public function isPattern()
    {
    }
    /**
     * Setter for pattern marker.
     *
     * @param bool $isPattern Marker to set is pattern or not.
     * @return void
     */
    public function setIsPattern($isPattern)
    {
    }
    /**
     * @return Widget
     */
    public function getParentWidget()
    {
    }
    /**
     * parent Widget entity.
     *
     * @param Widget $parentWidget Widget entity.
     * @return void
     */
    public function setParentWidget($parentWidget)
    {
    }
    /**
     * @return Widget[]
     */
    public function getChildWidgets()
    {
    }
    /**
     * @return mixed
     */
    public function getParentWidgetId()
    {
    }
    /**
     * Setter for parent widget id.
     *
     * @param mixed $parentWidgetId Parent widget id.
     * @return void
     */
    public function setParentWidgetId($parentWidgetId)
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
     * @param mixed $gId Value of gId.
     * @return void
     */
    public function setGId($gId)
    {
    }
    /**
     * @return string
     */
    public function getCategoryKey()
    {
    }
    /**
     * Attach widget to category.
     *
     * @see Category.
     * @param string $categoryKey Category key.
     * @return void
     */
    public function setCategoryKey($categoryKey)
    {
    }
    /**
     * @return mixed
     */
    public function getRowId()
    {
    }
    /**
     * Setter for row id.
     *
     * @param mixed $rowId Value of row id.
     * @return void
     */
    public function setRowId($rowId)
    {
    }
    /**
     * @return int
     */
    public function getOwnerId()
    {
    }
    /**
     * Attach widget to some user.
     *
     * @param int $ownerId User id.
     * @return void
     */
    public function setOwnerId($ownerId)
    {
    }
}