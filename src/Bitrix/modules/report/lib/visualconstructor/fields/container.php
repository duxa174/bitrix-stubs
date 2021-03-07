<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Class Container
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class Container extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    /**
     * @var Base[] $elements
     */
    private $elements = array();
    /**
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * Setter for name.
     *
     * @param string $name Name value.
     * @return void
     */
    public function setName($name)
    {
    }
    /**
     * Add element before target element.
     *
     * @param Base $newField Element to insert to container.
     * @param Base $targetField Element before which will insert.
     * @return void
     */
    public function addElementBefore(\Bitrix\Report\VisualConstructor\Fields\Base $newField, \Bitrix\Report\VisualConstructor\Fields\Base $targetField)
    {
    }
    /**
     * Add element ager target element.
     *
     * @param Base $newField Element to insert to container.
     * @param Base $targetField Element after which will insert.
     * @return void
     */
    public function addElementAfter(\Bitrix\Report\VisualConstructor\Fields\Base $newField, \Bitrix\Report\VisualConstructor\Fields\Base $targetField)
    {
    }
    /**
     * @param Base $element Element insert to container.
     * @return void
     */
    public function addElement(\Bitrix\Report\VisualConstructor\Fields\Base $element)
    {
    }
    /**
     * @return Base[]
     */
    public function getElements()
    {
    }
    /**
     * Find element in container elemen list.
     *
     * @param string $key Unique key for find element in container.
     * @return Base|null
     */
    public function getElement($key)
    {
    }
    /**
     * Set multiple elements to container.
     *
     * @param Base[] $elements Element list.
     * @return void
     */
    public function setElements($elements)
    {
    }
}