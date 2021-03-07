<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Api;

class Executer
{
    private $api;
    private $scriptPath;
    public function __construct($api)
    {
    }
    /**
     * Load .vks script from file
     *
     * @param $name
     * @return bool|null|string
     */
    private function getScript($name)
    {
    }
    /**
     * Main method to call vk-script from .vks files
     *
     * @param $methodName - must be string in format "execute" + name of script file
     * @param $arguments - various array of scripts arguments
     * @return mixed response from VK
     */
    public function __call($methodName, $arguments)
    {
    }
    /**
     * Replace params names to params values from in script string.
     * Return encoded script string in JSON
     *
     * @param $script
     * @param $params
     * @return mixed
     */
    private function prepareParams($script, $params)
    {
    }
    /**
     * Decode \uXXXX from JSON-converted string, because VK has lenght limit for values.
     *
     * @param $str
     * @return mixed
     */
    private function decodeMultibyteUnicode($str)
    {
    }
}