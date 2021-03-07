<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * Label Field included text field for title
 * @package Bitrix\Report\VisualConstructor\Fields\Valuable
 */
class LabelField extends \Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable
{
    private $mode;
    const JS_EVENT_ON_CHANGE = 'onChange';
    /**
     * Label field constructor.
     *
     * @param string $key Unique key.
     * @param string $mode Mode for render (small or big).
     */
    public function __construct($key, $mode = 'small')
    {
    }
    /**
     * Load field component with label or biglabel template.
     *
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return string
     */
    public function getMode()
    {
    }
    /**
     * Mode setter.
     *
     * @param string $mode Mode value(small or big).
     * @return void
     */
    public function setMode($mode)
    {
    }
}