<?php

namespace Bitrix\Report\VisualConstructor\Handler;

/**
 * Class BaseWidget class for extending to create preset widget classes
 * @package Bitrix\Report\VisualConstructor\Handler
 */
class BaseWidget extends \Bitrix\Report\VisualConstructor\Handler\Base
{
    private $widget;
    private $reportHandlerList = array();
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    /**
     * BaseWidgetHandler constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return Fields\Base[]
     */
    public function getCollectedFormElements()
    {
    }
    /**
     * Collecting form elements for configuration form.
     *
     * @return void
     */
    protected function collectFormElements()
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
    public function setWidget($widget)
    {
    }
    /**
     * @return Fields\Base[]
     */
    public function getFormElements()
    {
    }
    /**
     * Construct and return form element name.
     *
     * @param BaseValuable $element Form element.
     * @return string
     */
    protected function getNameForFormElement(\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable $element)
    {
    }
    /**
     * @return BaseReport[]
     */
    public function getReportHandlers()
    {
    }
    /**
     * Attach report handler to widget handler.
     *
     * @param BaseReport $reportHandler Report handler.
     * @return $this
     */
    public function addReportHandler(\Bitrix\Report\VisualConstructor\Handler\BaseReport $reportHandler)
    {
    }
    /**
     * Fill Widget handler entity with parameters from Widget entity.
     *
     * @param Widget $widget Widget handler.
     * @return void
     */
    public function fillWidget(\Bitrix\Report\VisualConstructor\Entity\Widget $widget)
    {
    }
    private function fillFormElementValues()
    {
    }
}