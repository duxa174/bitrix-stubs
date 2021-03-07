<?php

namespace Bitrix\Main\DI;

final class ServiceLocator implements \Psr\Container\ContainerInterface
{
    /** @var string[][] */
    private $services = [];
    /** @var mixed[] */
    private $instantiated = [];
    /** @var self */
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public static function getInstance() : self
    {
    }
    /**
     * Adds service to locator.
     * @param string $code
     * @param mixed $service
     */
    public function addInstance(string $code, $service) : void
    {
    }
    /**
     * Adds service with lazy initialization.
     * @param string $code
     * @param array $configuration
     * @throws SystemException
     * @return void
     */
    public function addInstanceLazy(string $code, $configuration) : void
    {
    }
    /**
     * Registers services by module settings, which is stored in {moduleName}/.settings.php.
     * @param string $moduleName
     * @throws SystemException
     */
    public function registerByModuleSettings(string $moduleName) : void
    {
    }
    /**
     * Registers services by project settings, which is stored .settings.php.
     * @throws SystemException
     */
    public function registerByGlobalSettings() : void
    {
    }
    /**
     * Checks whether the service with code exists.
     * @param string $code
     * @return bool
     */
    public function has($code) : bool
    {
    }
    /**
     * Returns services by code.
     * @param string $code
     * @return mixed
     * @throws ObjectNotFoundException|\Psr\Container\NotFoundExceptionInterface
     */
    public function get($code)
    {
    }
    private function buildNotFoundException(string $code)
    {
    }
    private function buildBadRegistrationExceptions(string $code)
    {
    }
}