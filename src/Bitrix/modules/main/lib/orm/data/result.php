<?php

namespace Bitrix\Main\ORM\Data;

class Result extends \Bitrix\Main\Result
{
    /** @var bool  */
    protected $wereErrorsChecked = false;
    /** @var EntityObject */
    protected $object;
    public function __construct()
    {
    }
    /**
     * @return EntityObject
     */
    public function getObject()
    {
    }
    /**
     * @param EntityObject $object
     */
    public function setObject($object)
    {
    }
    /**
     * Returns result status
     * Within the core and events should be called with internalCall flag
     *
     * @param bool $internalCall
     *
     * @return bool
     */
    public function isSuccess($internalCall = false)
    {
    }
    /**
     * Returns an array of Error objects
     *
     * @return EntityError[]|FieldError[]
     */
    public function getErrors()
    {
    }
    /**
     * Returns array of strings with error messages
     *
     * @return array
     */
    public function getErrorMessages()
    {
    }
    public function __destruct()
    {
    }
}