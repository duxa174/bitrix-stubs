<?php

namespace Bitrix\Main;

/**
 * Class Loader loads required files, classes and modules. It is the only class which is included directly.
 * @package Bitrix\Main
 */
class Loader
{
    /**
     * Can be used to prevent loading all modules except main and fileman
     */
    const SAFE_MODE = false;
    const BITRIX_HOLDER = "bitrix";
    const LOCAL_HOLDER = "local";
    protected static $safeModeModules = ["main" => true, "fileman" => true];
    protected static $loadedModules = ["main" => true];
    protected static $semiloadedModules = [];
    protected static $modulesHolders = ["main" => self::BITRIX_HOLDER];
    protected static $sharewareModules = [];
    /**
     * Custom autoload paths.
     * @var array [namespace => path]
     */
    protected static $namespaces = [];
    /**
     * Returned by includeSharewareModule() if module is not found
     */
    const MODULE_NOT_FOUND = 0;
    /**
     * Returned by includeSharewareModule() if module is installed
     */
    const MODULE_INSTALLED = 1;
    /**
     * Returned by includeSharewareModule() if module works in demo mode
     */
    const MODULE_DEMO = 2;
    /**
     * Returned by includeSharewareModule() if the trial period is expired
     */
    const MODULE_DEMO_EXPIRED = 3;
    protected static $autoLoadClasses = [];
    /**
     * @var bool Controls throwing exception by requireModule method
     */
    protected static $requireThrowException = true;
    /** @deprecated   */
    const ALPHA_LOWER = "qwertyuioplkjhgfdsazxcvbnm";
    /** @deprecated   */
    const ALPHA_UPPER = "QWERTYUIOPLKJHGFDSAZXCVBNM";
    /**
     * Includes a module by its name.
     *
     * @param string $moduleName Name of the included module
     * @return bool Returns true if module was included successfully, otherwise returns false
     * @throws LoaderException
     */
    public static function includeModule($moduleName)
    {
    }
    /**
     * Includes module by its name, throws an exception in case of failure
     *
     * @param $moduleName
     *
     * @return bool
     * @throws LoaderException
     */
    public static function requireModule($moduleName)
    {
    }
    private static function includeModuleInternal($path)
    {
    }
    /**
     * Includes shareware module by its name.
     * Module must initialize constant <module name>_DEMO = Y in include.php to define demo mode.
     * include.php must return false to define trial period expiration.
     * Constants is used because it is easy to obfuscate them.
     *
     * @param string $moduleName Name of the included module
     * @return int One of the following constant: Loader::MODULE_NOT_FOUND, Loader::MODULE_INSTALLED, Loader::MODULE_DEMO, Loader::MODULE_DEMO_EXPIRED
     */
    public static function includeSharewareModule($moduleName)
    {
    }
    public static function clearModuleCache($moduleName)
    {
    }
    /**
     * Returns document root
     *
     * @return string Document root
     */
    public static function getDocumentRoot()
    {
    }
    /**
     * Registers classes for auto loading.
     * All the frequently used classes should be registered for auto loading (performance).
     * It is not necessary to register rarely used classes. They can be found and loaded dynamically.
     *
     * @param string $moduleName Name of the module. Can be null if classes are not part of any module
     * @param array $classes Array of classes with class names as keys and paths as values.
     * @throws LoaderException
     */
    public static function registerAutoLoadClasses($moduleName, array $classes)
    {
    }
    /**
     * Registers namespaces with custom paths.
     * e.g. ('Bitrix\Main\Dev', '/home/bitrix/web/site/bitrix/modules/main/dev/lib')
     *
     * @param string $namespace A namespace prefix.
     * @param string $path An absolute path.
     */
    public static function registerNamespace($namespace, $path)
    {
    }
    /**
     * Unregisters a namespace.
     * @param string $namespace
     */
    public static function unregisterNamespace($namespace)
    {
    }
    /**
     * Registers an additional autoload handler.
     * @param callable $handler
     */
    public static function registerHandler(callable $handler)
    {
    }
    /**
     * PSR-4 compatible autoloader.
     * https://www.php-fig.org/psr/psr-4/
     *
     * @param $className
     */
    public static function autoLoad($className)
    {
    }
    /**
     * @param $className
     *
     * @throws LoaderException
     */
    public static function requireClass($className)
    {
    }
    /**
     * Checks if file exists in /local or /bitrix directories
     *
     * @param string $path File path relative to /local/ or /bitrix/
     * @param string|null $root Server document root, default self::getDocumentRoot()
     * @return string|bool Returns combined path or false if the file does not exist in both dirs
     */
    public static function getLocal($path, $root = null)
    {
    }
    /**
     * Checks if file exists in personal directory.
     * If $_SERVER["BX_PERSONAL_ROOT"] is not set than personal directory is equal to /bitrix/
     *
     * @param string $path File path relative to personal directory
     * @return string|bool Returns combined path or false if the file does not exist
     */
    public static function getPersonal($path)
    {
    }
    /**
     * Changes requireModule behavior
     *
     * @param bool $requireThrowException
     */
    public static function setRequireThrowException($requireThrowException)
    {
    }
}
class LoaderException extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
    }
}