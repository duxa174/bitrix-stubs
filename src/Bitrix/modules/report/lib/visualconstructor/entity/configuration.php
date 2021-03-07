<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Class Configuration
 * @package Bitrix\Report\VisualConstructor\Entity
 */
class Configuration extends \Bitrix\Report\VisualConstructor\Internal\Model
{
    protected $gId;
    protected $weight = 0;
    protected $value;
    protected $fieldClassName = '';
    protected $key;
    /**
     * Returns the list of pair for mapping data and object properties.
     * Key is field in DataManager, value is object property.
     *
     * @return array
     */
    public static function getMapAttributes()
    {
    }
    /**
     * Gets the fully qualified name of table class which belongs to current model.
     *
     * @return string
     */
    public static function getTableClassName()
    {
    }
    /**
     * @return int
     */
    public function getWeight()
    {
    }
    /**
     * Weight value for sorting.
     *
     * @param int $weight Weight value.
     * @return void
     */
    public function setWeight($weight)
    {
    }
    /**
     * @return mixed
     */
    public function getKey()
    {
    }
    /**
     * @param mixed $key Unique key for configuration in context.
     * @return void
     */
    public function setKey($key)
    {
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * Serialize and set value.
     *
     * @param mixed $value Value to set.
     * @return void
     */
    public function setValue($value)
    {
    }
    /**
     * @return string
     */
    public function getFieldClassName()
    {
    }
    /**
     * Set field class name.
     *
     * @see Base::getClassName()
     * @param string $fieldClassName Field class name.
     * @return void
     */
    public function setFieldClassName($fieldClassName)
    {
    }
    /**
     * Load configuration list by ids,
     * query to db and after build configuration entities list
     *
     * @param array $ids Array of id.
     * @return static[]
     */
    public static function loadByIds(array $ids)
    {
    }
    /**
     * @return string
     */
    public function getGId()
    {
    }
    /**
     * Setter for gId value.
     *
     * @param string $gId Value of gId.
     * @return void
     */
    public function setGId($gId)
    {
    }
}