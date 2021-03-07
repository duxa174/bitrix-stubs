<?php

namespace Bitrix\Landing\Field;

class Text extends \Bitrix\Landing\Field
{
    /**
     * Max length of the field.
     * @var int
     */
    protected $maxlength;
    /**
     * Placeholder for input.
     * @var string
     */
    protected $placeholder;
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
     * Set value to the field.
     * @param string $value Value.
     * @return void
     */
    public function setValue($value)
    {
    }
}