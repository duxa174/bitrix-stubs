<?php

namespace Bitrix\Report\VisualConstructor\Internal\Manager;

/**
 * Class ReportManager
 * @package Bitrix\Report\VisualConstructor\Internal\Manager
 */
class ReportManager extends \Bitrix\Report\VisualConstructor\Internal\Manager\Base
{
    private static $reportsList = array();
    private static $indices = array('categories' => array(), 'unit' => array(), 'dataType' => array(), 'reportClassName' => array());
    private static $called = false;
    /**
     * @return string
     */
    protected function getEventTypeKey()
    {
    }
    /**
     * @return array|bool
     */
    public function getReportList()
    {
    }
    /**
     * @return array|bool
     */
    public function getIndices()
    {
    }
    /**
     * @return bool|array
     */
    public function getIndexByCategory()
    {
    }
    /**
     * @return bool|array
     */
    public function getIndexByUnit()
    {
    }
    /**
     * @return bool|array
     */
    public function getIndexByDataType()
    {
    }
    /**
     * Call special Event end build list of result and create index list for searchable keys
     * @return void
     */
    public function call()
    {
    }
    /**
     * @return bool
     */
    private function isCalled()
    {
    }
}