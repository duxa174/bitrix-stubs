<?php

namespace Bitrix\Report\VisualConstructor;

/**
 * Class Form
 * @package Bitrix\Report\VisualConstructor
 */
class Form implements \Bitrix\Report\VisualConstructor\Internal\Error\IErrorable
{
    private $id;
    private $name;
    private $action;
    private $method;
    private $class = array();
    private $prefix = '';
    private $postfix = '';
    private $dataAttributes = array();
    private $fields = array();
    private $errors = array();
    /**
     * Add field to form.
     *
     * @param Base|mixed $field Field to add.
     * @return $this
     */
    public function add($field)
    {
    }
    /**
     * Add field before target field.
     *
     * @param Base $newField Field to add.
     * @param Base $targetField Target field before which to add.
     * @return void
     */
    public function addFieldBefore($newField, $targetField)
    {
    }
    /**
     * Add field after target field.
     *
     * @param Base $newField Field to add.
     * @param Base $targetField Target field after which to add.
     * @return void
     */
    public function addFieldAfter($newField, $targetField)
    {
    }
    /**
     * Try to convert to Html field.
     * @param mixed $options String or int for convert.
     * @return Html
     * @throws ArgumentException
     */
    private function convertToField($options)
    {
    }
    /**
     * @return Base[]
     */
    public function getFields()
    {
    }
    /**
     * @param string $key Unique key.
     * @return Base|null
     */
    public function getField($key)
    {
    }
    /**
     * Collect all elements.
     * Print form html.
     *
     * @return void
     */
    public function render()
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * @return string
     */
    public function getPrefix()
    {
    }
    /**
     * @param string $prefix String to set as prefix of form.
     * @return $this
     */
    public function setPrefix($prefix)
    {
    }
    /**
     * @return string
     */
    public function getPostfix()
    {
    }
    /**
     * @param string $postfix String to set as postfix fo form.
     * @return Form
     */
    public function setPostfix($postfix)
    {
    }
    /**
     * @param string $className String to add as class name of form.
     * @return void
     */
    public function addClass($className)
    {
    }
    /**
     * @return array
     */
    public function getClass()
    {
    }
    /**
     * @param array $class Array of strings to set as class names.
     * @return void
     */
    public function setClass($class)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @param string $name Name value.
     * @return void
     */
    public function setName($name)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @param string $id Id value.
     * @return void
     */
    public function setId($id)
    {
    }
    /**
     * Action url where to ubmit form.
     *
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * @param string $action Url where to send form on submit.
     * @return $this
     */
    public function setAction($action)
    {
    }
    /**
     * @return string
     */
    public function getMethod()
    {
    }
    /**
     * @param string $method Get or post.
     * @return $this
     */
    public function setMethod($method)
    {
    }
    /**
     * @return array
     */
    public function getDataAttributes()
    {
    }
    /**
     * @param array $dataAttributes Data attributes key value pair array.
     * @return $this
     */
    public function setDataAttributes($dataAttributes)
    {
    }
    /**
     * @param string $key Key for add data attribute. ('role').
     * @param string $value Value for add data attribute. ('remove button').
     * @return void
     */
    public function addDataAttribute($key, $value = '')
    {
    }
}