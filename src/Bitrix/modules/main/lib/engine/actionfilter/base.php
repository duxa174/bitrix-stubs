<?php

namespace Bitrix\Main\Engine\ActionFilter;

abstract class Base implements \Bitrix\Main\Errorable
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var Action */
    protected $action;
    /**
     * Returns the fully qualified name of this class.
     * @return string
     */
    public static final function className()
    {
    }
    /**
     * Constructor Controller.
     */
    public function __construct()
    {
    }
    public final function bindAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * @return Action
     */
    public final function getAction()
    {
    }
    /**
     * List allowed values of scopes where the filter should work.
     * @return array
     */
    public function listAllowedScopes()
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
    public function onAfterAction(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Adds error to error collection.
     * @param Error $error Error.
     *
     * @return $this
     */
    protected function addError(\Bitrix\Main\Error $error)
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