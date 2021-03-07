<?php

namespace Bitrix\MobileApp\Janative\Entity;

class Component extends \Bitrix\MobileApp\Janative\Entity\Base
{
    const VERSION = 2;
    protected static $modificationDates = [];
    protected static $dependencies = [];
    private $version;
    /**
     * Component constructor.
     * @param null $path
     * @throws \Exception
     */
    public function __construct($path = null)
    {
    }
    public function getPath()
    {
    }
    /**
     * @param $name
     * @param string $namespace
     * @return Component|null
     * @throws \Exception
     */
    public static function createInstanceByName($name, $namespace = "bitrix")
    {
    }
    public function getResult()
    {
    }
    /**
     * @param bool $resultOnly
     * @param bool $loadExtensionsSeparately
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\IO\FileNotFoundException
     * @throws \Bitrix\Main\LoaderException
     */
    public function execute($resultOnly = false, $loadExtensionsSeparately = false)
    {
    }
    public function getInfo()
    {
    }
    protected function onBeforeModificationDateSave(&$value)
    {
    }
    public function getVersion()
    {
    }
    public function getPublicPath()
    {
    }
    /**
     * @return array|null
     */
    public function resolveDependencies()
    {
    }
    private function getExtensionsContent($lazyLoad = false)
    {
    }
}