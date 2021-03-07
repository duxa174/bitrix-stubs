<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

final class ErrorsContainer extends \Bitrix\Sale\Result
{
    protected $acceptableErrorCodes = [];
    /**
     * Adds the error.
     * @param Error $error
     */
    public function addError(\Bitrix\Main\Error $error)
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
    public function setAcceptableErrorCodes(array $errorCodes)
    {
    }
    private function isErrorAcceptable(\Bitrix\Main\Error $error)
    {
    }
}