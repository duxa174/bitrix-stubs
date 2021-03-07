<?php

namespace Bitrix\Main;

/**
 * @implements Bitrix\Main\Errorable
 */
trait ErrorableImplementation
{
    /** @var ErrorCollection */
    protected $errorCollection;
    /**
     * Return true if collection has errors.
     *
     * @return boolean
     */
    public function hasErrors()
    {
    }
    /**
     * Getting array of errors.
     *
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Returns an error with the necessary code.
     *
     * @param string|int $code The code of the error.
     *
     * @return Error|null
     */
    public function getErrorByCode($code)
    {
    }
}