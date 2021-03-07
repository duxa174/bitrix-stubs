<?php

namespace Bitrix\Translate;

/**
 * @implements Translate\IErrorable
 */
trait Error
{
    /** @var Main\ErrorCollection */
    protected $errorCollection;
    /**
     * Adds error to error collection.
     *
     * @param Main\Error $error Error.
     *
     * @return $this
     */
    public final function addError(\Bitrix\Main\Error $error) : self
    {
    }
    /**
     * Adds list of errors to error collection.
     *
     * @param Main\Error[] $errors Errors.
     *
     * @return $this
     */
    public final function addErrors(array $errors) : self
    {
    }
    /**
     * Getting array of errors.
     *
     * @return Main\Error[]
     */
    public final function getErrors() : array
    {
    }
    /**
     * Getting once error with the necessary code.
     *
     * @param string|int $code Code of error.
     *
     * @return Main\Error|null
     */
    public final function getErrorByCode($code) : ?\Bitrix\Main\Error
    {
    }
    /**
     * Returns last error from list.
     *
     * @return Main\Error|null
     */
    public final function getLastError() : ?\Bitrix\Main\Error
    {
    }
    /**
     * Returns first error from list.
     *
     * @return Main\Error|null
     */
    public final function getFirstError() : ?\Bitrix\Main\Error
    {
    }
    /**
     * Checks if error occurred.
     *
     * @return boolean
     */
    public final function hasErrors() : bool
    {
    }
    /**
     * Returns an error with the necessary code.
     * @param string|int $code The code of the error.
     *
     * @return boolean
     */
    public final function hasError($code) : bool
    {
    }
}