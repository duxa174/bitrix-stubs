<?php

namespace Bitrix\MobileApp\Janative\Entity;

abstract class Base
{
    protected static $modificationDates = [];
    protected static $dependencies = [];
    protected $path;
    protected $namespace;
    protected $baseFileName;
    public $name;
    public function getModificationTime()
    {
    }
    public function getDependencies()
    {
    }
    public function getPath()
    {
    }
    public function getRelativePathToFile()
    {
    }
    public function getLangMessages()
    {
    }
    public function getDependencyList()
    {
    }
    /**
     * @param $ext
     * @return array
     * @throws FileNotFoundException
     */
    private static function expandDependency($ext)
    {
    }
    public function getLangDefinitionExpression()
    {
    }
    protected abstract function onBeforeModificationDateSave(&$value);
    protected abstract function resolveDependencies();
}