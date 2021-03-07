<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * Preview block field, contains all exist miniature and functionality to see preview, can toggle to other view type
 * @package Bitrix\Report\VisualConstructor\Fields\Valuable
 */
class PreviewBlock extends \Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable
{
    const JS_EVENT_ON_VIEW_SELECT = 'onSelect';
    protected $widget;
    /**
     * Preview block field constructor.
     * Default view type is linear graph.
     *
     * @param $key
     */
    public function __construct($key)
    {
    }
    /**
     * Load field component with label or previewblock template.
     * Pass available view types list.
     * And prepared widget params to render in preview block.
     *
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\Entity\Widget
     */
    public function getWidget()
    {
    }
    /**
     * Preview widget setter.
     *
     * @param \Bitrix\Report\VisualConstructor\Entity\Widget $widget Widget will render in preview block.
     * @return void
     */
    public function setWidget(\Bitrix\Report\VisualConstructor\Entity\Widget $widget)
    {
    }
    /**
     * @return \Bitrix\Report\VisualConstructor\View[]
     */
    private function getAvailableViews()
    {
    }
    /**
     * @return array
     */
    private function getAvailableViewList()
    {
    }
}