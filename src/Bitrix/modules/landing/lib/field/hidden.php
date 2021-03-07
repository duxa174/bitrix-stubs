<?php

namespace Bitrix\Landing\Field;

class Hidden extends \Bitrix\Landing\Field
{
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
     * Gets true, if current value is empty.
     * @return bool
     */
    public function isEmptyValue()
    {
    }
}