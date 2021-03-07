<?php

namespace Bitrix\Main\ORM;

class EventResult extends \Bitrix\Main\EventResult
{
    /** @var array */
    protected $modified = array();
    /** @var string[] */
    protected $unset = array();
    /** @var EntityError[] */
    protected $errors = array();
    public function __construct()
    {
    }
    /**
     * Sets the errors array and changes the event type to ERROR
     * @param EntityError[] $errors
     */
    public function setErrors(array $errors)
    {
    }
    /**
     * @param EntityError $error
     */
    public function addError(\Bitrix\Main\ORM\EntityError $error)
    {
    }
    /**
     * @return EntityError[]|FieldError[]
     */
    public function getErrors()
    {
    }
    /**
     * Sets the array of fields to modify data in the Bitrix\Main\ORM\Event
     * @param array $fields
     */
    public function modifyFields(array $fields)
    {
    }
    public function getModified()
    {
    }
    /**
     * Sets the array of fields names to unset data in the Bitrix\Main\ORM\Event
     * @param array $fields
     */
    public function unsetFields(array $fields)
    {
    }
    /**
     * @param string $fieldName
     */
    public function unsetField($fieldName)
    {
    }
    public function getUnset()
    {
    }
}