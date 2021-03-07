<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Html element which can fire some js event
 *
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class ComplexHtml extends \Bitrix\Report\VisualConstructor\Fields\Html
{
    const JS_EVENT_ON_CLICK = 'onClick';
    /**
     * Construct html element and set id for it.
     * After js listeners will listen events element by id.
     *
     * @param string $id Unique id for complex html field.
     * @param string $contentHtml String which place into complex html node.
     */
    public function __construct($id, $contentHtml = '')
    {
    }
    /**
     * Print complex html component content.
     *
     * @return void
     */
    public function printContent()
    {
    }
}