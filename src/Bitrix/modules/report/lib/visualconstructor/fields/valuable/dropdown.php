<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * Drop down field rendered standard drop down
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class DropDown extends \Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable
{
    const JS_EVENT_ON_CHANGE = 'onChange';
    private $options = array();
    /**
     * Drop down field constructor.
     *
     * @param string $key Unique key.
     */
    public function __construct($key)
    {
    }
    /**
     * Load field component with baseselect template.
     *
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return array
     */
    public function getDefaultOptions()
    {
    }
    /**
     * Add option to end of option list.
     *
     * @param string $key Key for option.
     * @param string $value Value For option.
     * @return $this
     */
    public function addOption($key, $value)
    {
    }
    /**
     * Add options to end of options list.
     *
     * @param array $options Key value pair array.
     * @return void
     */
    public function addOptions($options)
    {
    }
    /**
     * @return array
     */
    public function getOptions()
    {
    }
    /**
     * Options list setter.
     *
     * @param array $options Key value pair array.
     * @return void
     */
    public function setOptions($options)
    {
    }
}