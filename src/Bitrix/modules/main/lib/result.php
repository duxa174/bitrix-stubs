<?php

namespace Bitrix\Main;

class Result
{
    /** @var bool */
    protected $isSuccess = true;
    /** @var ErrorCollection */
    protected $errors;
    /** @var  array */
    protected $data = array();
    public function __construct()
    {
    }
    /**
     * Returns the result status.
     *
     * @return bool
     */
    public function isSuccess()
    {
    }
    /**
     * Adds the error.
     *
     * @param Error $error
     * @return $this
     */
    public function addError(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Returns an array of Error objects.
     *
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Returns the error collection.
     *
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    /**
     * Returns array of strings with error messages
     *
     * @return array
     */
    public function getErrorMessages()
    {
    }
    /**
     * Adds array of Error objects
     *
     * @param Error[] $errors
     * @return $this
     */
    public function addErrors(array $errors)
    {
    }
    /**
     * Sets data of the result.
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
    }
    /**
     * Returns data array saved into the result.
     * @return array
     */
    public function getData()
    {
    }
}