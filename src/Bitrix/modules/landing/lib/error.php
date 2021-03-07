<?php

namespace Bitrix\Landing;

class Error
{
    /**
     * Current errors.
     * @var array
     */
    protected $errors = array();
    /**
     * Add error to the current collection.
     * @param string $code Error code.
     * @param string $message Error message.
     * @return void
     */
    public function addError($code, $message = '')
    {
    }
    /**
     * Copy Error from one to this.
     * @param \Bitrix\Landing\Error $error Error.
     * @return void
     */
    public function copyError(\Bitrix\Landing\Error $error)
    {
    }
    /**
     * Returns first error frm errors stack.
     * @return \Bitrix\Main\Error|null
     */
    public function getFirstError()
    {
    }
    /**
     * Get current errors.
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Exist or not errors.
     * @return boolean
     */
    public function isEmpty()
    {
    }
    /**
     * Collect errors from result.
     * @param \Bitrix\Main\Result $result Result.
     * @return void
     */
    public function addFromResult($result)
    {
    }
}