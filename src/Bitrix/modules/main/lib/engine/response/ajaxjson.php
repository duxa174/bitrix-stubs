<?php

namespace Bitrix\Main\Engine\Response;

class AjaxJson extends \Bitrix\Main\Engine\Response\Json implements \Bitrix\Main\Errorable
{
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    /**
     * @var string
     */
    private $status;
    /**
     * @var ErrorCollection
     */
    private $errorCollection;
    public function __construct($data = null, $status = self::STATUS_SUCCESS, \Bitrix\Main\ErrorCollection $errorCollection = null)
    {
    }
    public static final function createSuccess($data = null)
    {
    }
    public static final function createError(\Bitrix\Main\ErrorCollection $errorCollection = null, $data = null)
    {
    }
    public static final function createDenied(\Bitrix\Main\ErrorCollection $errorCollection = null, $data = null)
    {
    }
    public final function setData($data)
    {
    }
    protected final function getErrorsToResponse()
    {
    }
    /**
     * Getting array of errors.
     * @return Error[]
     */
    public final function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error
     */
    public final function getErrorByCode($code)
    {
    }
}