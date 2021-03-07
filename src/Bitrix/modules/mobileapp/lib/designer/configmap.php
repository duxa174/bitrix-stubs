<?php

namespace Bitrix\MobileApp\Designer;

class ConfigMap
{
    const VERSION = 1.1;
    private static $configMap;
    private static $configDescription;
    /**
     * @return array|mixed
     * @throws \Bitrix\Main\SystemException
     */
    function __construct()
    {
    }
    private function createMap()
    {
    }
    public function getMap()
    {
    }
    /**
     * Gets full description of the all parameters recursively
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    public function getDescriptionConfig()
    {
    }
    public function getParamDescription($name, $type)
    {
    }
    public function getParamsByGroups()
    {
    }
    /**
     * Gets parameters by passed type
     * @param $paramType
     * @return array
     */
    public function getParamsByType($paramType)
    {
    }
    /**
     * Gets all parameters with type "image"
     * @return array
     */
    public function getImageParams()
    {
    }
    /**
     * Gets all parameters with group types
     * @return mixed
     * @throws \Bitrix\Main\SystemException
     */
    public function getGroupParams()
    {
    }
    /**
     * Checks if parameter with passed $paramName is group
     * @param $paramName
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    public function isGroup($paramName)
    {
    }
    /**
     * Returns group of the parameter by its name
     * @param $paramName
     * @return string
     */
    public function getGroupByParam($paramName)
    {
    }
    /**
     * Gets lang messages
     * @return array
     */
    public function getLangMessages()
    {
    }
    /**
     * Checks if parameter with passed name is exists in the map
     * @param $paramName
     * @return bool
     */
    public function has($paramName)
    {
    }
    /**
     * Gets list of values for parameter
     * @param $paramName
     * @return mixed
     * @throws \Bitrix\Main\SystemException
     */
    private function getValueList($paramName)
    {
    }
    private function getLimits($paramName)
    {
    }
}