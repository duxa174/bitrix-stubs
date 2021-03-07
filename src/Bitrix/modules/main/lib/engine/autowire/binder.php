<?php

namespace Bitrix\Main\Engine\AutoWire;

final class Binder
{
    const STATUS_FOUND = true;
    const STATUS_NOT_FOUND = false;
    private $instance;
    private $method;
    /** @var array */
    private $configuration = [];
    /** @var \SplObjectStorage|Parameter[] */
    private static $globalAutoWiredParameters;
    /** @var Parameter[] */
    private $autoWiredParameters = [];
    /** @var \ReflectionFunctionAbstract */
    private $reflectionFunctionAbstract;
    /** @var array */
    private $methodParams = null;
    /** @var array */
    private $args = null;
    public function __construct($instance, $method, $configuration = [])
    {
    }
    public static final function buildForFunction($callable, $configuration = [])
    {
    }
    public static final function buildForMethod($instance, $method, $configuration = [])
    {
    }
    private function buildReflectionMethod()
    {
    }
    private function buildReflectionFunction()
    {
    }
    /**
     * @return mixed
     */
    public function getInstance()
    {
    }
    /**
     * @return mixed
     */
    public function getMethod()
    {
    }
    /**
     * @return array
     */
    public function getConfiguration()
    {
    }
    /**
     * @param array $configuration
     *
     * @return Binder
     */
    public function setConfiguration($configuration)
    {
    }
    /**
     * @param Parameter[] $parameters
     *
     * @return $this
     */
    public function setAutoWiredParameters(array $parameters)
    {
    }
    public function appendAutoWiredParameter(\Bitrix\Main\Engine\AutoWire\Parameter $parameter)
    {
    }
    /**
     * Register globally auto wired parameter. The method was added in backwards compatibility reason.
     * @param Parameter $parameter
     * @return void
     */
    public static function registerGlobalAutoWiredParameter(\Bitrix\Main\Engine\AutoWire\Parameter $parameter)
    {
    }
    /**
     * @param Parameter $parameter
     * @return void
     */
    public static function unRegisterGlobalAutoWiredParameter(\Bitrix\Main\Engine\AutoWire\Parameter $parameter) : void
    {
    }
    private function getPriorityByParameter(\Bitrix\Main\Engine\AutoWire\Parameter $parameter)
    {
    }
    /**
     * @return Parameter[]
     */
    public function getAutoWiredParameters()
    {
    }
    public function setSourcesParametersToMap(array $parameters)
    {
    }
    public function getSourcesParametersToMap()
    {
    }
    public function appendSourcesParametersToMap(array $parameter)
    {
    }
    /**
     * Invokes method with binded parameters.
     * return @mixed
     */
    public final function invoke()
    {
    }
    /**
     * Returns list of method params.
     * @return array
     */
    public final function getMethodParams()
    {
    }
    /**
     * Sets list of method params.
     * @param array $params List of parameters.
     *
     * @return $this
     */
    public final function setMethodParams(array $params)
    {
    }
    /**
     * Returns list of method params which possible use in call_user_func_array().
     * @return array
     */
    public final function getArgs()
    {
    }
    private function bindParams()
    {
    }
    /**
     * @param \ReflectionParameter $reflectionParameter
     *
     * @return \SplPriorityQueue|Parameter[]
     */
    private function getAutoWiredByClass(\ReflectionParameter $reflectionParameter)
    {
    }
    /**
     * @return Parameter[]
     */
    private function getAllAutoWiredParameters()
    {
    }
    private function getParameterValue(\ReflectionParameter $parameter)
    {
    }
    private function findParameterInSourceList($name, &$status)
    {
    }
}