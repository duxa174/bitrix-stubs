<?php

namespace Bitrix\Report\VisualConstructor;

/**
 * Special form class wor widget configurations.
 * @package Bitrix\Report\VisualConstructor
 */
class WidgetForm extends \Bitrix\Report\VisualConstructor\Form
{
    private $view;
    private $widget;
    private $reportsInWidgetCount;
    private $boarId;
    /**
     * Construct widget form by view and widget
     * @param View $view
     * @param Widget $widget
     */
    public function __construct(\Bitrix\Report\VisualConstructor\View $view, \Bitrix\Report\VisualConstructor\Entity\Widget $widget)
    {
    }
    /**
     * @return void
     */
    public function render()
    {
    }
    /**
     * Building configuration form.
     *
     * @param View $view View controller.
     * @param Widget $widget Widget entity.
     * @param array $params Parameters need for build form.
     * @return static
     */
    public static function build(\Bitrix\Report\VisualConstructor\View $view, \Bitrix\Report\VisualConstructor\Entity\Widget $widget, $params)
    {
    }
    private function addWidgetConfigurationFormFullContent()
    {
    }
    private function addWidgetConfigurationsBlock()
    {
    }
    private function addReportsConfigurationsBlock()
    {
    }
    private function addReportAddButtonBlock()
    {
    }
    /**
     * @return Fields\Base[]
     */
    private function getWidgetConfigurationFields()
    {
    }
    /**
     * @return Fields\Base[]
     */
    private function getReportConfigurationFields()
    {
    }
    /**
     * @return View
     */
    public function getView()
    {
    }
    /**
     * @param View $view View controller.
     * @return void
     */
    public function setView(\Bitrix\Report\VisualConstructor\View $view)
    {
    }
    /**
     * @return Widget
     */
    public function getWidget()
    {
    }
    /**
     * @param Widget $widget Widget entity.
     * @return void
     */
    public function setWidget(\Bitrix\Report\VisualConstructor\Entity\Widget $widget)
    {
    }
    /**
     * @return string
     */
    public function getBoarId()
    {
    }
    /**
     * @param string $boarId Board id.
     * @return void
     */
    public function setBoarId($boarId)
    {
    }
}