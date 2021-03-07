<?php

namespace Bitrix\MobileApp\Janative\Entity;

class Extension extends \Bitrix\MobileApp\Janative\Entity\Base
{
    protected static $modificationDates = [];
    protected static $dependencies = [];
    /**
     * Extension constructor.
     * @param $identifier
     * @throws \Exception
     */
    public function __construct($identifier)
    {
    }
    /**
     * Returns content of extension without depending extensions
     * @return string
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public function getContent()
    {
    }
    public function getIncludeExpression($callbackName = "onExtensionsLoaded")
    {
    }
    /**
     * Returns list of dependencies by name of extensions
     * @param $name
     * @param array $list
     * @param array $alreadyResolved
     * @return array
     * @throws \Exception
     */
    public static function getResolvedDependencyList($name, &$list = [], &$alreadyResolved = [])
    {
    }
    protected function onBeforeModificationDateSave(&$value)
    {
    }
    /**
     * @return array
     * @throws \Exception
     */
    protected function resolveDependencies()
    {
    }
}