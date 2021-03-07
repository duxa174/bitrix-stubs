<?php

namespace Bitrix\Report\VisualConstructor\Internal\Error;

/**
 * Class ErrorCollection
 * @package Bitrix\Report\VisualConstructor\Internal\Error
 */
final class ErrorCollection extends \Bitrix\Main\ErrorCollection
{
    /**
     * Adds one error to collection.
     * @param Error $error Error object.
     * @return void
     */
    public function addOne(\Bitrix\Report\VisualConstructor\Internal\Error\Error $error)
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
     * Adds errors from entity which implements IErrorable.
     * @param IErrorable $entity Entity which implements IErrorable.
     * @return void
     */
    public function addFromEntity(\Bitrix\Report\VisualConstructor\Internal\Error\IErrorable $entity)
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