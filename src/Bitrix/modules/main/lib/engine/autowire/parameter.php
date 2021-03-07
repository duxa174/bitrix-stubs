<?php

namespace Bitrix\Main\Engine\AutoWire;

class Parameter
{
    /** @var string */
    private $className;
    /** @var \Closure */
    private $constructor;
    /** @var \Closure */
    private $externalNameConstructor;
    public function __construct($className, \Closure $constructor, \Closure $externalNameConstructor = null)
    {
    }
    public function getPriority()
    {
    }
    public function constructValue(\ReflectionParameter $parameter, \Bitrix\Main\Result $captureResult)
    {
    }
    public function captureData(\ReflectionParameter $parameter, array $sourceParameters)
    {
    }
    protected function findParameterInSourceList($name, array $sourceParameters, &$status)
    {
    }
    public function match(\ReflectionParameter $parameter)
    {
    }
    /**
     * @return string
     */
    public function getClassName()
    {
    }
    /**
     * @param string $className
     *
     * @return Parameter
     */
    public function setClassName($className)
    {
    }
    /**
     * @return \Closure
     */
    public function getConstructor()
    {
    }
    /**
     * @param \Closure $constructor
     *
     * @return Parameter
     */
    public function setConstructor(\Closure $constructor)
    {
    }
    /**
     * @return \Closure
     */
    public function getExternalNameConstructor()
    {
    }
    /**
     * @param \Closure $externalNameConstructor
     *
     * @return Parameter
     */
    public function setExternalNameConstructor(\Closure $externalNameConstructor)
    {
    }
    protected function needToMapExternalData()
    {
    }
    public function generateExternalName()
    {
    }
}