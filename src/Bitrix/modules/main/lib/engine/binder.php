<?php

namespace Bitrix\Main\Engine;

/**
 * Class Binder
 * @package Bitrix\Main\Engine
 * @deprecated
 * @see \Bitrix\Main\Engine\AutoWire\Binder
 */
class Binder
{
    const ANY_PARAMETER_NAME = -1;
    const STATUS_FOUND = true;
    const STATUS_NOT_FOUND = false;
    const EVENT_ON_BUILD_AUTO_WIRED_CLASSES = 'onBuildAutoWiredClasses';
    private $instance;
    private $method;
    /** @var array */
    private $methodParams;
    /** @var array */
    private $args;
    private $listSourceParameters;
    /** @var \ReflectionFunctionAbstract */
    private $reflectionFunctionAbstract;
    /** @var array */
    private static $autoWiredHandlers = null;
    /**
     * Binder constructor.
     * @param mixed  $instance Instance of the class that contains the method.
     * @param string $method Name of the method.
     * @param array  $listSourceParameters List of parameters source which we want to bind.
     */
    public function __construct($instance, $method, array $listSourceParameters)
    {
    }
    private static function registerDefaultAutoWirings()
    {
    }
    public static final function buildForFunction($callable, array $listSourceParameters)
    {
    }
    public static final function buildForMethod($instance, $method, array $listSourceParameters)
    {
    }
    public static final function registerParameter($className, \Closure $constructObjectByClassAndId)
    {
    }
    public static final function registerParameterDependsOnName($className, \Closure $constructObjectByClassAndId, \Closure $constructIdParameterName = null)
    {
    }
    /**
     * Builds instance of reflection method.
     * @return void
     */
    private function buildReflectionMethod()
    {
    }
    private function buildReflectionFunction()
    {
    }
    protected final function collectAutoWiredClasses()
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
    /**
     * Invokes method with binded parameters.
     * return @mixed
     */
    public final function invoke()
    {
    }
    private function processException($exception)
    {
    }
    private function extractParameterClassName($message)
    {
    }
    private function getParameterValue(\ReflectionParameter $parameter)
    {
    }
    /**
     * @param array $listSourceParameters
     */
    public function setListSourceParameters($listSourceParameters)
    {
    }
    private function findParameterInSourceList($name, &$status)
    {
    }
    private function bindParams()
    {
    }
    private function getAutoWiredHandler(\ReflectionClass $class)
    {
    }
    private function isAutoWiredClass(\ReflectionClass $class)
    {
    }
}