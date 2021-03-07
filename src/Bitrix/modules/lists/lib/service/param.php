<?php

namespace Bitrix\Lists\Service;

class Param implements \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ERROR_REQUIRED_PARAMETERS_MISSING = "ERROR_REQUIRED_PARAMETERS_MISSING";
    private $params = [];
    private $interchangeableParams = [];
    public function __construct(array $params)
    {
    }
    /**
     * Checks required input parameters.
     *
     * @param array $requiredInputParams List of keys that are required in the input parameters.
     */
    public function checkRequiredInputParams(array $requiredInputParams)
    {
    }
    /**
     * Adds a parameter to an array of parameters.
     *
     * @param array $params
     */
    public function setParam(array $params)
    {
    }
    /**
     * Returns parameters after necessary processing.
     *
     * @return array
     */
    public function getParams()
    {
    }
    private function changeKeyCaseRecursive(array $params)
    {
    }
    private function checkArrayParam(array $param)
    {
    }
    private function checkParam($param)
    {
    }
    private function setParamError($param)
    {
    }
}