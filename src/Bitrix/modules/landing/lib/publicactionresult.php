<?php

namespace Bitrix\Landing;

class PublicActionResult
{
    /**
     * Instance of Error.
     * @var \Bitrix\Landing\Error
     */
    protected $error = null;
    /**
     * Result of Public Action.
     * @var mixed
     */
    protected $result = null;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Result is success.
     * @return boolean
     */
    public function isSuccess()
    {
    }
    /**
     * Set Error of Public Action.
     * @param \Bitrix\Landing\Error $error Error.
     * @return void
     */
    public function setError(\Bitrix\Landing\Error $error)
    {
    }
    /**
     * Get error collection
     * @return \Bitrix\Landing\Error
     */
    public function getError()
    {
    }
    /**
     * Set some result of Public Action.
     * @param mixed $result Some result.
     * @return void
     */
    public function setResult($result)
    {
    }
    /**
     * Get result of Public Action.
     * @return mixed
     */
    public function getResult()
    {
    }
    /**
     * Sanitizes data's keys, if data is array.
     * @param mixed $data Some data.
     * @param bool $sanitizeValue Sanitize value of key too.
     * @return mixed
     */
    public function sanitizeKeys($data, $sanitizeValue = false)
    {
    }
}