<?php

namespace Bitrix\Report\VisualConstructor\Views\JsComponent;

/**
 * Base class for js "components: to render in content in widgets of dashboard
 * @package Bitrix\Report\VisualConstructor\Views\JsComponent
 */
abstract class Base extends \Bitrix\Report\VisualConstructor\View
{
    /**
     * Method to modify Content which pass to widget view, in absoulte end.
     *
     * @param Widget $widget Widget entity.
     * @param bool $withCalculatedData Marker for calculate or no data in widget.
     * @return array
     */
    public function prepareWidgetContent(\Bitrix\Report\VisualConstructor\Entity\Widget $widget, $withCalculatedData = false)
    {
    }
}