<?php

namespace Bitrix\Main\Engine;

final class Crawler
{
    /** @var  Crawler */
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of Crawler
     * @return Crawler
     */
    public static function getInstance()
    {
    }
    public function listActionsByModule($module)
    {
    }
    private function getActionsFromControllers($namespace)
    {
    }
    private function getFilesUnderNamespace($namespace)
    {
    }
    private function getNamespaces($module)
    {
    }
    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return Controller
     */
    private function constructController(\ReflectionClass $reflectionClass)
    {
    }
}