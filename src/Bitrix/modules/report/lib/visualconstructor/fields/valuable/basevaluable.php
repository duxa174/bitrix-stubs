<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * Class BaseValuable
 * @package Bitrix\Report\VisualConstructor\Fields\Valuable
 */
abstract class BaseValuable extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    private $value;
    private $defaultValue;
    private $name;
    /**
     * Constructor for valuable fields.
     *
     * @param string $key Unique key.
     */
    public function __construct($key)
    {
    }
    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
    }
    /**
     * Defaul value setter.
     *
     * @param mixed $defaultValue Value which use as default.
     * @return void
     */
    public function setDefaultValue($defaultValue)
    {
    }
    /**
     * Return value if exist, or return default value.
     *
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * Value setter.
     *
     * @param mixed $value Value set as value of field.
     * @return void
     */
    public function setValue($value)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Field name setter.
     *
     * @param string $name Name which use in rendered field.
     * @return void
     */
    public function setName($name)
    {
    }
    /**
     * Normalise value field before save.
     *
     * @param mixed $config Config which will pass to db.
     * @return mixed
     */
    protected function normalise($config)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
}