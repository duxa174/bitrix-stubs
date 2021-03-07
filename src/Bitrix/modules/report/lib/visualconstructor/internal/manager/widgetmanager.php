<?php

namespace Bitrix\Report\VisualConstructor\Internal\Manager;

/**
 * Class WidgetManager
 * @package Bitrix\Report\VisualConstructor\Internal\Manager
 */
class WidgetManager extends \Bitrix\Report\VisualConstructor\Internal\Manager\Base
{
    private static $widgetsList = array();
    private static $indices = array('widgetClassName' => array());
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
    public function getWidgetList()
    {
    }
    /**
     * @return array|bool
     */
    public function getIndices()
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