<?php

namespace Bitrix\Report\VisualConstructor\Handler;

/**
 * Class Base
 * @package Bitrix\Report\VisualConstructor\Handler
 */
abstract class Base
{
    protected $configurations = array();
    protected $view;
    /**
     * @var BaseFormElement[]
     */
    protected $formElementsList = array();
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    /**
     * @return BaseFormElement[]
     */
    public function getCollectedFormElements()
    {
    }
    /**
     * @param string $key Unique key to fine element in form elements list.
     * @return BaseFormElement|BaseValuable|null
     */
    public function getFormElementFromCollected($key)
    {
    }
    /**
     * Collecting form elements for configuration form.
     *
     * @return void
     */
    protected abstract function collectFormElements();
    /**
     * @param BaseValuable $element
     */
    private function addToConfiguration(\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable $element)
    {
    }
    /**
     * Add form element to end of elements list.
     *
     * @param BaseFormElement $element Element to add to form.
     * @return void
     */
    public function addFormElement(\Bitrix\Report\VisualConstructor\Fields\Base $element)
    {
    }
    /**
     * Add form element before target element.
     *
     * @param BaseFormElement $newElement Element to add to form.
     * @param BaseFormElement $targetElement Element before which need to add.
     * @return void
     */
    public function addFormElementBefore(\Bitrix\Report\VisualConstructor\Fields\Base $newElement, \Bitrix\Report\VisualConstructor\Fields\Base $targetElement)
    {
    }
    /**
     * Add form element after target element.
     *
     * @param BaseFormElement $newElement Element to add to form.
     * @param BaseFormElement $targetElement Element after which need to add.
     * @return void
     */
    public function addFormElementAfter(\Bitrix\Report\VisualConstructor\Fields\Base $newElement, \Bitrix\Report\VisualConstructor\Fields\Base $targetElement)
    {
    }
    /**
     * Insert element to start of form elements list.
     *
     * @param BaseFormElement $newElement Element which need to insert to start of form.
     * @return void
     */
    public function addFormElementToStart(\Bitrix\Report\VisualConstructor\Fields\Base $newElement)
    {
    }
    /**
     * Analog of add form element.
     *
     * @param BaseFormElement $newElement Element which need to insert to end of form.
     * @return void
     */
    public function addFormElementToEnd(\Bitrix\Report\VisualConstructor\Fields\Base $newElement)
    {
    }
    /**
     * Setter to set form elements multiply.
     *
     * @param BaseFormElement[] $formElementList Form elements to set in form.
     * @return void
     */
    public function setFormElements($formElementList)
    {
    }
    /**
     * @param BaseValuable|string $formElement Form element which need to update.
     * @param mixed $value New value for form element.
     * @return bool
     */
    public function updateFormElementValue($formElement, $value)
    {
    }
    /**
     * @return BaseFormElement[]
     */
    public function getFormElements()
    {
    }
    /**
     * In form elements list find form element with key $fieldKey.
     *
     * @param string $fieldKey Unique key to find form element.
     * @return BaseFormElement|\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable|null
     */
    public function getFormElement($fieldKey)
    {
    }
    /**
     * Returns value of the form element with given key.
     *
     * @param string $fieldKey The key of the field.
     * @return mixed|null
     */
    public function getFormElementValue($fieldKey)
    {
    }
    /**
     * Find form element by attribute key value pair.
     *
     * @param string $attributeKey Attribute key to find in form elements list.
     * @param string $value Value of attribute name for needle form element.
     * @return BaseFormElement|null
     */
    public function getFormElementByDataAttribute($attributeKey, $value)
    {
    }
    /**
     * Remove from form elements list form element.
     *
     * @param BaseFormElement $element Element to remove.
     * @return bool
     */
    public function removeFormElement(\Bitrix\Report\VisualConstructor\Fields\Base $element)
    {
    }
    /**
     * @param Configuration[] $configurations Configuration list to set.
     * @return void
     */
    public function setConfigurations($configurations)
    {
    }
    /**
     * @return Configuration[]
     */
    public function getConfigurations()
    {
    }
    /**
     * @return Configuration[]
     */
    public function getConfigurationsGidKeyed()
    {
    }
    /**
     * TODO@ optimise this
     * @param string $key Unique key to find configuration.
     * @return Configuration|null
     */
    public function getConfiguration($key)
    {
    }
    /**
     * Construct form element, to render in form.
     *
     * @param BaseValuable $element Form element.
     * @return string
     */
    protected function getNameForFormElement(\Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable $element)
    {
    }
    /**
     * @return View|null
     */
    public function getView()
    {
    }
    /**
     * @param View $view View entity to set of handler.
     * @return void
     */
    public function setView(\Bitrix\Report\VisualConstructor\View $view)
    {
    }
}