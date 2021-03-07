<?php

namespace Bitrix\Main\Engine\AutoWire;

class ExactParameter extends \Bitrix\Main\Engine\AutoWire\Parameter
{
    /** @var string */
    private $parameterName;
    public function __construct($className, $parameterName, \Closure $constructor)
    {
    }
    protected function validateConstructor(\Closure $constructor)
    {
    }
    public function captureData(\ReflectionParameter $parameter, array $sourceParameters)
    {
    }
    /**
     * @return \ReflectionParameter[]
     * @throws \ReflectionException
     */
    private function fetchParametersToMapExternalNamesFromClosure()
    {
    }
    public function match(\ReflectionParameter $parameter)
    {
    }
    /**
     * @return string
     */
    public function getParameterName()
    {
    }
    public function getPriority()
    {
    }
}