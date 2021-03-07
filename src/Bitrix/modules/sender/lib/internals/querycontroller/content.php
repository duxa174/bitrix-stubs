<?php

namespace Bitrix\Sender\Internals\QueryController;

/**
 * Class Answer
 * @package Bitrix\Sender\Internals\QueryController
 */
abstract class Content
{
    const TYPE_JSON = 'json';
    const TYPE_HTML = 'html';
    /** @var ErrorCollection $errors Errors. */
    protected $errors;
    /** @var Response $response Response. */
    protected $response;
    public static function create(\Bitrix\Sender\Internals\QueryController\Response $response, $type)
    {
    }
    /**
     * Answer constructor.
     * @param Response $response Response.
     */
    public function __construct(\Bitrix\Sender\Internals\QueryController\Response $response)
    {
    }
    /**
     * On flush callback.
     */
    public function onFlush()
    {
    }
    /**
     * @return string
     */
    public abstract function toText();
    /**
     * @param $message
     * @param null $code
     */
    public function addError($message, $code = null)
    {
    }
    /**
     * @param string|null $message Message.
     */
    public function addPermissionError($message = null)
    {
    }
    /**
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    protected function getErrorMessages()
    {
    }
}