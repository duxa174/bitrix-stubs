<?php

namespace Bitrix\Lists\Internals\Error;

final class ErrorCollection extends \Bitrix\Main\ErrorCollection
{
    /**
     * Adds one error to collection.
     * @param Error $error Error object.
     * @return void
     */
    public function addOne(\Bitrix\Lists\Internals\Error\Error $error)
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
     * Returns array of errors with the necessary code.
     * @param string $code Code of error.
     * @return Error[]
     */
    public function getErrorsByCode($code)
    {
    }
}