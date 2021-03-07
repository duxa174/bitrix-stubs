<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Row entity for operate with dashboard row table and with it's references
 *
 * @method addWidgets(Widget | Widgets[] $widget) add widget/widgets to this row
 * @method deleteReports(Widget | Widgets[] $widget) delete widget connection and if it is ONE-TO-MANY delete Widget entity
 */
class DashboardRow extends \Bitrix\Report\VisualConstructor\Internal\Model
{
    protected $gId;
    protected $boardId;
    protected $weight;
    protected $layoutMap = '';
    /**@var Widget[] $widgets * */
    protected $widgets = array();
    /**@var Dashboard $dashboard * */
    protected $dashboard;
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
     * @return DashboardRow
     */
    public function getCopyForCurrentUser()
    {
    }
    /**
     * @return Widget[]
     */
    public function getWidgets()
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
     * @return int
     */
    public function getWeight()
    {
    }
    /**
     * Setter of Weight in rows list of dashboard. (for sorting).
     *
     * @param mixed $weight Weight of report.
     * @return void
     */
    public function setWeight($weight)
    {
    }
    /**
     * Load Rows list by board id and rows gIds.
     *
     * @param array $gIds Collection of gIds.
     * @param string $boardId Board id.
     * @return static[]
     */
    public static function getRowsByGIdsAndBoardId(array $gIds, $boardId)
    {
    }
    /**
     * Load and return rows list by board id.
     *
     * @param string $boardId Board id.
     * @return static[]
     */
    public static function getRowsWithWidgetsByBoard($boardId)
    {
    }
    /**
     * Load and return row by gId.
     *
     * @param string $gId Row gId.
     * @return static
     */
    public static function loadByGId($gId)
    {
    }
    /**
     * Laod current users row by row gId.
     *
     * @param string $rowGId Value of row gId.
     * @return DashboardRow
     */
    public static function getCurrentUserRowByGId($rowGId)
    {
    }
    /**
     * Get rows with nested widgets and reprts.
     *
     * @param string $boardId Board id.
     * @return static[]
     */
    public static function getRowsWithReportsByBoard($boardId)
    {
    }
    /**
     * @return array
     */
    public function getLayoutMap()
    {
    }
    /**
     * Serialize and set layout map array.
     *
     * @param array $layoutMap Layout map.
     * @return void
     */
    public function setLayoutMap($layoutMap)
    {
    }
    /**
     * @return Dashboard
     */
    public function getDashboard()
    {
    }
    /**
     * @return string
     */
    public function getGId()
    {
    }
    /**
     * Setter for gId value.
     *
     * @param string $gId Value of gId.
     * @return void
     */
    public function setGId($gId)
    {
    }
}