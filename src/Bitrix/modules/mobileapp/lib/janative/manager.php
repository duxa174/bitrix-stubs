<?php

namespace Bitrix\MobileApp\Janative;

class Manager
{
    /**
     * @var array
     */
    private static $workspaces;
    /**
     * @var array|null
     */
    private static $availableComponents;
    private $extensions;
    private $initiated;
    private function __construct()
    {
    }
    /**
     * @return array
     */
    private static function getWorkspaces()
    {
    }
    /**
     * @return mixed
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    private static function fetchComponents()
    {
    }
    /**
     * @param $ext
     * @return string|string[]|null
     */
    public static function getExtensionPath($ext)
    {
    }
    public static function getExtensionResourceList($ext)
    {
    }
    /**
     * @param $componentName
     * @return float|int|string
     * @throws \Exception
     */
    public static function getComponentVersion($componentName)
    {
    }
    /**
     * @param $componentName
     * @return string
     * @throws \Exception
     */
    public static function getComponentPath($componentName)
    {
    }
    /**
     * @return mixed
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getAvailableComponents()
    {
    }
    /**
     * @param $name
     * @return Component|null
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getComponentByName($name)
    {
    }
}