<?php

namespace Bitrix\Main;

class ErrorCollection extends \Bitrix\Main\Type\Dictionary
{
    /**
     * Constructor ErrorCollection.
     * @param Error[] $values Initial errors in the collection.
     */
    public function __construct(array $values = null)
    {
    }
    /**
     * Adds an array of errors to the collection.
     * @param Error[] $errors
     * @return void
     */
    public function add(array $errors)
    {
    }
    /**
     * Returns an error with the necessary code.
     * @param string|int $code The code of the error.
     * @return Error|null
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * Adds an error to the collection.
     * @param Error $error An error object.
     * @param mixed $offset Offset in the array.
     * @return void
     */
    public function setError(\Bitrix\Main\Error $error, $offset = null)
    {
    }
    /**
     * \ArrayAccess thing.
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }
}