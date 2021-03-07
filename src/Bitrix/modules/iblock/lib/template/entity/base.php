<?php

namespace Bitrix\Iblock\Template\Entity;

/**
 * Class Base
 *
 * @package Bitrix\Iblock\Template\Entity
 */
class Base
{
    /** @var integer  */
    protected $id = null;
    /** @var array[string]mixed  */
    protected $fields = null;
    /** @var array[string]string  */
    protected $fieldMap = array();
    /**
     * @param integer $id Entity identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Returns entity identifier.
     *
     * @return integer
     */
    public function getId()
    {
    }
    /**
     * Used to find entity for template processing.
     *
     * @param string $entity What to find.
     *
     * @return \Bitrix\Iblock\Template\Entity\Base
     */
    public function resolve($entity)
    {
    }
    /**
     * Used to initialize entity fields from some external source.
     *
     * @param array $fields Entity fields.
     *
     * @return void
     */
    public function setFields(array $fields)
    {
    }
    /**
     * Returns field value.
     *
     * @param string $fieldName Name of the field to retrieve data from.
     *
     * @return string
     */
    public function getField($fieldName)
    {
    }
    /**
     * Loads values from database.
     * Returns true on success.
     *
     * @return boolean
     */
    protected function loadFromDatabase()
    {
    }
    /**
     * Sets new field value only when is not set yet.
     * Adds mapping from field name to it's internal presentation.
     *
     * @param string $fieldName The name of the field.
     * @param string $internalName Internal name of the field.
     * @param string $value Value to be stored.
     *
     * @return void
     */
    protected function addField($fieldName, $internalName, $value)
    {
    }
}
/**
 * Class LazyValueLoader
 * Strategy class used for delaying queries to DB.
 *
 * @package Bitrix\Iblock\Template\Entity
 */
class LazyValueLoader
{
    protected $value = null;
    protected $key = null;
    /**
     * @param string|integer $key Unique identifier.
     */
    function __construct($key)
    {
    }
    /**
     * Calls load method if value was not loaded yet.
     *
     * @return mixed
     */
    public function __toString()
    {
    }
    /**
     * Calls load method if value was not loaded yet.
     *
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * Actual work method which have to retrieve data from the DB.
     *
     * @return mixed
     */
    protected function load()
    {
    }
}