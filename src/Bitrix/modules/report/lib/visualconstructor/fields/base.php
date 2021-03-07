<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Class Base
 * @package Bitrix\Report\VisualConstructor\Fields
 */
abstract class Base
{
    const FIELDS_COMPONENT_NAME = 'bitrix:report.visualconstructor.config.fields';
    private $key;
    private $classList = array();
    private $dataAttributes = array();
    private $id;
    private $label = '';
    private $isDisplayLabel = true;
    private $prefix;
    private $postfix;
    private $weight = 0;
    private $assets = array();
    private $js = array();
    private $css = array();
    private $inline = array();
    private $jsEvents = array();
    private $jsEventListeners = array();
    private $form;
    private $compatibleViewTypes;
    private $inlineStyle;
    private $display = true;
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    /**
     * @return Base
     */
    public function getPrefix()
    {
    }
    /**
     * Setter for string which render before field content.
     *
     * @param string|Base $prefix String for render before content.
     * @return void
     */
    public function setPrefix($prefix)
    {
    }
    /**
     * @return Base
     */
    public function getPostfix()
    {
    }
    /**
     * Setter for string which render after field content.
     *
     * @param string|Base $postfix String for render after content.
     * @return void
     */
    public function setPostfix($postfix)
    {
    }
    /**
     * @return array
     */
    public function getAssets()
    {
    }
    /**
     * Attach js, css, or inline assets to field.
     *
     * @param array $assets Array of assets which attach to field.
     * @return void
     */
    public function addAssets($assets)
    {
    }
    /**
     * @return Form
     */
    public function getForm()
    {
    }
    /**
     * Setter for form context.
     *
     * @param Form $form Form where render field.
     * @return void
     */
    public function setForm($form)
    {
    }
    /**
     * Check is displayable this field, if yes collect all assets,
     * And print content.
     *
     * @return void
     */
    public function render()
    {
    }
    /**
     * Print field html/string ore somthing else printable.
     *
     * @return void
     */
    public abstract function printContent();
    /**
     * @return array
     */
    public function getJsEventListeners()
    {
    }
    /**
     * @return array
     */
    public function getJsEvents()
    {
    }
    /**
     * Add js event handler to field on some event which fire on $field in first parameter of this function.
     *
     * @param self|null $field Field which fire event.
     * @param string $eventKey Event key which listen this field.
     * @param array $jsParams JS parameters which pass to handler.
     * @return $this
     */
    public function addJsEventListener(\Bitrix\Report\VisualConstructor\Fields\Base $field = null, $eventKey, $jsParams)
    {
    }
    /**
     * @return string
     */
    public function getLabel()
    {
    }
    /**
     * Setter for field label.
     *
     * @param string $label String to set as label for field.
     * @return void
     */
    public function setLabel($label)
    {
    }
    /**
     * @return array
     */
    public function getCompatibleViewTypes()
    {
    }
    /**
     * Setter of compatible widget view types.
     *
     * @param array $compatibleViewTypes Compatible widget view type list.
     * @return void
     */
    public function setCompatibleViewTypes($compatibleViewTypes)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Setter for id.
     *
     * @param string $id Unique id.
     * @return void
     */
    public function setId($id)
    {
    }
    /**
     * @return int
     */
    public function getWeight()
    {
    }
    /**
     * Setter for Weight.
     *
     * @param int $weight Integer of weightof Field.
     * @return void
     */
    public function setWeight($weight)
    {
    }
    /**
     * Add to class list class string.
     *
     * @param string $class Class string.
     * @return void
     */
    public function addClass($class)
    {
    }
    /**
     * @return array
     */
    public function getClasses()
    {
    }
    /**
     * Get data attribute by key.
     *
     * @param string $key Key for data attribute which will return.
     * @return mixed|null
     */
    public function getDataAttribute($key)
    {
    }
    /**
     * @return array
     */
    public function getDataAttributes()
    {
    }
    /**
     * Set Data attributes by array of pair key => values.
     *
     * @param array $dataAttributes Array of pair key=>value.
     * @return void
     */
    public function setDataAttributes($dataAttributes)
    {
    }
    /**
     * @param string $key Key for data attribute. ('role').
     * @param string $value Value for data attribute. ('widget').
     * @return void
     */
    public function addDataAttribute($key, $value)
    {
    }
    /**
     * Conver id property to string for render as html in element.
     *
     * @return string
     */
    public function getRenderedIdAttribute()
    {
    }
    /**
     * @return string
     */
    public function getKey()
    {
    }
    /**
     * Seter for key.
     *
     * @param string $key Unique key for field.
     * @return void
     */
    public function setKey($key)
    {
    }
    /**
     * Convert class list property collection to string for render as html in field element.
     *
     * @return string
     */
    public function getRenderedClassAttributes()
    {
    }
    /**
     * Conver data atttribute property collection to string for render as html in field element.
     *
     * @return string
     */
    public function getRenderedDataAttributes()
    {
    }
    /**
     * Convert inline style propery collection to string for render as html.
     *
     * @return string
     */
    public function getRenderedInlineStyle()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayLabel()
    {
    }
    /**
     * Setter for display mode of label of field.
     *
     * @param bool $isDisplayLabel True if label must render else false.
     * @return void
     */
    public function setIsDisplayLabel($isDisplayLabel)
    {
    }
    /**
     * Add inline style by key and value.
     *
     * @param string $key Key of inline style. ('background-color').
     * @param string $value Value Of inline style. ('red').
     * @return void
     */
    public function addInlineStyle($key, $value)
    {
    }
    /**
     * @return array
     */
    public function getInlineStyle()
    {
    }
    /**
     * Setter dor inline style.
     *
     * @param array $inlineStyle Inline style string.
     * @return void
     */
    public function setInlineStyle($inlineStyle)
    {
    }
    /**
     * @return bool
     */
    public function isDisplay()
    {
    }
    /**
     * Setter for display mode.
     *
     * @param bool $display Render or not this field marker.
     * @return void
     */
    public function setDisplay($display)
    {
    }
    /**
     * Include component for field.
     *
     * @param string $templateName Template name string.
     * @param array $params Parameters pass to component.
     * @return void
     */
    protected function includeFieldComponent($templateName, $params = array())
    {
    }
}