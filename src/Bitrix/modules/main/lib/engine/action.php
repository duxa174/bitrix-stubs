<?php

namespace Bitrix\Main\Engine;

/**
 * Class Action
 * @package Bitrix\Main\Engine
 * @method run
 */
class Action implements \Bitrix\Main\Errorable
{
    /** @var AutoWire\Binder */
    protected $binder;
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var Controller */
    protected $controller;
    /** @var array */
    protected $config;
    /** @var string */
    protected $name;
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    /**
     * Configures action by additional params.
     * The method will be invoked by controller and $params have to set in 'configureActions'
     * @param $params
     * @return void
     */
    public function configure($params)
    {
    }
    protected function init()
    {
    }
    /**
     * Returns list of action arguments.
     * It is associative array looks like argument name => value.
     * @return array
     * @throws SystemException
     */
    public final function getArguments()
    {
    }
    /**
     * Sets list of action arguments.
     * It is associative array looks like argument name => value.
     * Be aware the method reset old values and set new arguments.
     *
     * @param array $arguments List of action arguments.
     *
     * @return AutoWire\Binder
     * @throws SystemException
     */
    public final function setArguments(array $arguments)
    {
    }
    protected function buildBinder()
    {
    }
    public function runWithSourceParametersList()
    {
    }
    /**
     * @return AutoWire\Binder
     */
    public final function getBinder()
    {
    }
    /**
     * @return Controller
     */
    public final function getController()
    {
    }
    /**
     * @return string
     */
    public final function getName()
    {
    }
    /**
     * @return array
     */
    public final function getConfig()
    {
    }
    protected function onBeforeRun()
    {
    }
    protected function onAfterRun()
    {
    }
    public final function getCurrentUser()
    {
    }
    /**
     * Converts keys of array to camel case notation.
     * @see \Bitrix\Main\Engine\Response\Converter::OUTPUT_JSON_FORMAT
     * @param mixed $data Data.
     *
     * @return array|mixed|string
     */
    public function convertKeysToCamelCase($data)
    {
    }
    /**
     * Returns the fully qualified name of this class.
     * @return string
     */
    public static final function className()
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
     * Adds list of errors to error collection.
     * @param Error[] $errors Errors.
     *
     * @return $this
     */
    protected function addErrors(array $errors)
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