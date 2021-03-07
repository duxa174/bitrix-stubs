<?php

namespace Bitrix\Forum\Internals\Error;

final class ErrorCollection extends \Bitrix\Main\Type\Dictionary
{
    /**
     * Constructor ErrorCollection.
     * @param array $values Errors which need to add in collection.
     * @throws ArgumentTypeException
     */
    public function __construct(array $values = null)
    {
    }
    /**
     * Adds array of errors to collection.
     * @param Error[] $errors Array of errors.
     * @return void
     */
    public function add(array $errors)
    {
    }
    /**
     * Adds one error to collection.
     * @param Error $error Error object.
     * @return void
     */
    public function addOne(\Bitrix\Forum\Internals\Error\Error $error)
    {
    }
    /**
     * Adds errors from Main\Entity\Result.
     * @param Result $result Result after action in Entity.
     * @return void
     */
    public function addFromResult(\Bitrix\Main\Entity\Result $result)
    {
    }
    /**
     * Returns true if collection has errors.
     * @return bool
     */
    public function hasErrors()
    {
    }
    /**
     * Getting array of errors with the necessary code.
     * @param string $code Code of error.
     * @return Error[]
     */
    public function getErrorsByCode($code)
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error[]
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * Offset to set error.
     * @param Error $offset Offset.
     * @param string|int $value Error.
     * @throws ArgumentTypeException
     * @return void
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * @param $value
     * @throws ArgumentTypeException
     */
    private function checkType($value)
    {
    }
}