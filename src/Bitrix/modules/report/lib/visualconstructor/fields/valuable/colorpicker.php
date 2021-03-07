<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * ColorPicker field whit preview
 *
 * @package Bitrix\Report\VisualConstructor\Fields\Valuable
 */
class ColorPicker extends \Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable
{
    const JS_EVENT_ON_SELECT = 'onSelect';
    private $mode;
    private $pickerFieldHidden = false;
    /**
     * Color picker constructor.
     *
     * @param string $key Unique key.
     * @param string $mode Mode which define in which template will render this field.
     */
    public function __construct($key, $mode = 'simple')
    {
    }
    /**
     * Load field component with simplecolorpicker or colorpicker template.
     * And print it.
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
     * @param string $mode Mode value.
     * @return void
     */
    public function setMode($mode)
    {
    }
    /**
     * Check is color picker is hidden.
     * In this mode color picker will not dislay in form, but input field will exist.
     *
     * @return bool
     */
    public function isPickerFieldHidden()
    {
    }
    /**
     * Setter for hide marker.
     *
     * @param bool $pickerFieldHidden Marker hidden or not picker field.
     * @return void
     */
    public function setPickerFieldHidden($pickerFieldHidden)
    {
    }
}