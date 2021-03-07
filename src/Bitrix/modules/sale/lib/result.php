<?php

namespace Bitrix\Sale;

class Result extends \Bitrix\Main\Entity\Result
{
    /** @var  int */
    protected $id;
    protected $warnings = array();
    /** @var bool */
    protected $isSuccess = true;
    public function __construct()
    {
    }
    public function setId($id)
    {
    }
    /**
     * Returns id of added record
     * @return int
     */
    public function getId()
    {
    }
    public function __destruct()
    {
    }
    public function addData(array $data)
    {
    }
    public function get($offset)
    {
    }
    public function set($offset, $value)
    {
    }
    /**
     * @param Error[] $errors
     *
     * @return void
     */
    public function addWarnings(array $errors)
    {
    }
    /**
     * Adds the error.
     *
     * @param Error $error
     */
    public function addWarning(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Adds the error.
     *
     * @param Error $error
     * @return Result
     */
    public function addError(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Returns an array of Error objects.
     *
     * @return Error[]
     */
    public function getWarnings()
    {
    }
    /**
     * Returns array of strings with warning messages
     *
     * @return array
     */
    public function getWarningMessages()
    {
    }
    /**
     * @return bool
     */
    public function hasWarnings()
    {
    }
}
class ResultError extends \Bitrix\Main\Entity\EntityError
{
    /**
     * @param Error $error
     *
     * @return static
     */
    public static function create(\Bitrix\Main\Error $error)
    {
    }
}
class ResultWarning extends \Bitrix\Sale\ResultError
{
}
class ResultNotice extends \Bitrix\Sale\ResultError
{
}