<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Button field render input with type button.
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class Button extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    const JS_EVENT_ON_CLICK = 'onClick';
    /**
     * Button constructor.
     *
     * @param string $id Unique id.
     */
    public function __construct($id)
    {
    }
    /**
     * Load field component with button template.
     *
     * @return void
     */
    public function printContent()
    {
    }
}