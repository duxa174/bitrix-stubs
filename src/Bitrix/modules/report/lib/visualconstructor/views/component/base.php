<?php

namespace Bitrix\Report\VisualConstructor\Views\Component;

/**
 * Base class for component content type for widgets in report dashboard.
 *
 * @package Bitrix\Report\VisualConstructor\Views\Component
 */
abstract class Base extends \Bitrix\Report\VisualConstructor\View
{
    private $componentName;
    private $componentTemplateName = '';
    private $componentParameters;
    /**
     * Base component type view constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return mixed
     */
    public function getComponentName()
    {
    }
    /**
     * Setter for component name.
     *
     * @param string $componentName Component name.
     * @return void
     */
    public function setComponentName($componentName)
    {
    }
    /**
     * @return string
     */
    public function getComponentParameters()
    {
    }
    /**
     * Component parameters setter.
     *
     * @param array $componentParameters Parameters which pass to component.
     * @return void
     */
    public function setComponentParameters($componentParameters)
    {
    }
    /**
     * @param $key
     * @param $value
     */
    public function addComponentParameters($key, $value)
    {
    }
    /**
     * Handle all data prepared for this view.
     *
     * @param array $calculatedPerformedData Performed data from report handler.
     * @return array
     */
    public function handlerFinallyBeforePassToView($calculatedPerformedData)
    {
    }
    /**
     * Method to modify Content which pass to widget view, in absolute end.
     *
     * @param Widget $widget Widget entity.
     * @param bool $withCalculatedData Marker for calculate or no data in widget.
     * @return array
     */
    public function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
    /**
     * Get calculated and format data.
     *
     * @param Widget $widget Widget Entity.
     * @param bool $withCalculatedData Marker for calculate or no data in widget.
     * @return array|null
     */
    protected function getCalculatedPerformedData(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData)
    {
    }
    /**
     * @param $componentName
     * @param array $params
     * @return mixed
     */
    private function includeComponent()
    {
    }
    /**
     * @return string
     */
    public function getComponentTemplateName()
    {
    }
    /**
     * @param string $componentTemplateName
     */
    public function setComponentTemplateName($componentTemplateName)
    {
    }
}