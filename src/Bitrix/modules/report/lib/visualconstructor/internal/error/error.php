<?php

namespace Bitrix\Report\VisualConstructor\Internal\Error;

/**
 * Class Error
 * @package Bitrix\Report\VisualConstructor\Internal\Error
 */
class Error extends \Bitrix\Main\Error
{
    /** @var mixed */
    protected $data;
    /**
     * Creates a new Error.
     * @param string     $message Message of the error.
     * @param int|string $code Code of the error.
     * @param mixed|null $data Data.
     */
    public function __construct($message, $code = 0, $data = null)
    {
    }
    /**
     * @return mixed
     */
    public function getData()
    {
    }
}