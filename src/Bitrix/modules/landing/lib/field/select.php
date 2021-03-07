<?php

namespace Bitrix\Landing\Field;

class Select extends \Bitrix\Landing\Field
{
    /**
     * Select options.
     * @var array
     */
    protected $options = array();
    /**
     * Multiple list.
     * @var bool
     */
    protected $multiple = false;
    /**
     * Class constructor.
     * @param string $code Field code.
     * @param array $params Field params.
     */
    public function __construct($code, array $params = array())
    {
    }
    /**
     * Gets true, if current value is empty.
     * @return bool
     */
    public function isEmptyValue()
    {
    }
    /**
     * Multiple or not current field.
     * @return bool
     */
    public function isMulti()
    {
    }
    /**
     * Vew field.
     * @param array $params Array params:
     * name - field name
     * class - css-class for this element
     * additional - some additional params as is.
     * @return void
     */
    public function viewForm(array $params = array())
    {
    }
    /**
     * Creates select name in correct format.
     * @return string $nameFormat Formatted name.
     * @return string
     */
    public function getName($nameFormat)
    {
    }
    /**
     * Get options as array
     * @return array
     */
    public function getOptions()
    {
    }
}