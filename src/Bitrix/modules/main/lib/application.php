<?php

namespace Bitrix\Main;

/**
 * Base class for any application.
 */
abstract class Application
{
    const JOB_PRIORITY_NORMAL = 100;
    const JOB_PRIORITY_LOW = 50;
    /**
     * @var Application
     */
    protected static $instance = null;
    protected $isBasicKernelInitialized = false;
    protected $isExtendedKernelInitialized = false;
    /**
     * Execution context.
     *
     * @var Context
     */
    protected $context;
    /** @var Router */
    protected $router;
    /** @var Route */
    protected $currentRoute;
    /**
     * Pool of database connections.
     * @var Data\ConnectionPool
     */
    protected $connectionPool;
    /**
     * Managed cache instance.
     * @var \Bitrix\Main\Data\ManagedCache
     */
    protected $managedCache;
    /**
     * Tagged cache instance.
     * @var \Bitrix\Main\Data\TaggedCache
     */
    protected $taggedCache;
    /** @var SessionInterface */
    protected $session;
    /** @var SessionInterface */
    protected $kernelSession;
    /** @var CompositeSessionManager */
    protected $compositeSessionManager;
    /** @var Data\LocalStorage\SessionLocalStorageManager */
    protected $sessionLocalStorageManager;
    /*
     * @var \SplPriorityQueue
     */
    protected $backgroundJobs;
    /**
     * Creates new application instance.
     */
    protected function __construct()
    {
    }
    /**
     * Returns current instance of the Application.
     *
     * @return Application
     */
    public static function getInstance()
    {
    }
    /**
     * Does minimally possible kernel initialization.
     */
    public function initializeBasicKernel()
    {
    }
    /**
     * Does full kernel initialization. Should be called somewhere after initializeBasicKernel().
     *
     * @param array $params Parameters of the current request (depends on application type)
     */
    public function initializeExtendedKernel(array $params)
    {
    }
    private function initializeSessions()
    {
    }
    private function initializeSessionLocalStorage()
    {
    }
    /**
     * @return Router
     */
    public function getRouter() : \Bitrix\Main\Routing\Router
    {
    }
    /**
     * @param Router $router
     */
    public function setRouter(\Bitrix\Main\Routing\Router $router) : void
    {
    }
    /**
     * @return Route
     */
    public function getCurrentRoute() : \Bitrix\Main\Routing\Route
    {
    }
    /**
     * @param Route $currentRoute
     */
    public function setCurrentRoute(\Bitrix\Main\Routing\Route $currentRoute) : void
    {
    }
    /**
     * Initializes context of the current request.
     * Should be implemented in subclass.
     * @param array $params
     */
    protected abstract function initializeContext(array $params);
    /**
     * Starts request execution. Should be called after initialize.
     * Should be implemented in subclass.
     */
    public abstract function start();
    /**
     * Runs controller and its action and sends response to the output.
     *
     * It's a stub method and we can't mark it as abstract because there is compatibility.
     * @return void
     */
    public function run()
    {
    }
    /**
     * Ends work of application.
     * Sends response and then terminates execution.
     * If there is no $response the method will use Context::$response.
     *
     * @param int $status
     * @param Response|null $response
     *
     * @return void
     */
    public function end($status = 0, \Bitrix\Main\Response $response = null)
    {
    }
    protected function handleResponseBeforeSend(\Bitrix\Main\Response $response) : void
    {
    }
    /**
     * Terminates application by invoking exit().
     * It's the right way to finish application.
     *
     * @param int $status
     * @return void
     */
    public function terminate($status = 0)
    {
    }
    /**
     * Exception handler can be initialized through the Config\Configuration (.settings.php file).
     *
     * 'exception_handling' => array(
     *		'value' => array(
     *			'debug' => true,        // output exception on screen
     *			'handled_errors_types' => E_ALL & ~E_STRICT & ~E_NOTICE,    // catchable error types, printed to log
     *			'exception_errors_types' => E_ALL & ~E_NOTICE & ~E_STRICT,  // error types from catchable which throws exceptions
     *			'ignore_silence' => false,      // ignore @
     *			'assertion_throws_exception' => true,       // assertion throws exception
     *			'assertion_error_type' => 256,
     *			'log' => array(
     *              'class_name' => 'MyLog',        // custom log class, must extends ExceptionHandlerLog; can be omited, in this case default Diag\FileExceptionHandlerLog will be used
     *              'extension' => 'MyLogExt',      // php extension, is used only with 'class_name'
     *              'required_file' => 'modules/mylog.module/mylog.php'     // included file, is used only with 'class_name'
     *				'settings' => array(        // any settings for 'class_name'
     *					'file' => 'bitrix/modules/error.log',
     *					'log_size' => 1000000,
     *				),
     *			),
     *		),
     *		'readonly' => false,
     *	),
     *
     */
    protected function initializeExceptionHandler()
    {
    }
    public function createExceptionHandlerLog()
    {
    }
    public function createExceptionHandlerOutput()
    {
    }
    /**
     * Creates database connection pool.
     */
    protected function createDatabaseConnection()
    {
    }
    protected function initializeCache()
    {
    }
    /**
     * @return \Bitrix\Main\Diag\ExceptionHandler
     */
    public function getExceptionHandler()
    {
    }
    /**
     * Returns database connections pool object.
     *
     * @return Data\ConnectionPool
     */
    public function getConnectionPool()
    {
    }
    /**
     * Returns context of the current request.
     *
     * @return Context
     */
    public function getContext()
    {
    }
    /**
     * Modifies context of the current request.
     *
     * @param Context $context
     */
    public function setContext(\Bitrix\Main\Context $context)
    {
    }
    /**
     * Static method returns database connection for the specified name.
     * If name is empty - default connection is returned.
     *
     * @static
     * @param string $name Name of database connection. If empty - default connection.
     * @return Data\Connection|DB\Connection
     */
    public static function getConnection($name = "")
    {
    }
    /**
     * Returns new instance of the Cache object.
     *
     * @return Data\Cache
     */
    public function getCache()
    {
    }
    /**
     * Returns manager of the managed cache.
     *
     * @return Data\ManagedCache
     */
    public function getManagedCache()
    {
    }
    /**
     * Returns manager of the managed cache.
     *
     * @return Data\TaggedCache
     */
    public function getTaggedCache()
    {
    }
    public final function getSessionLocalStorageManager() : \Bitrix\Main\Data\LocalStorage\SessionLocalStorageManager
    {
    }
    public final function getLocalSession($name) : \Bitrix\Main\Data\LocalStorage\SessionLocalStorage
    {
    }
    public final function getKernelSession() : \Bitrix\Main\Session\SessionInterface
    {
    }
    public final function getSession() : \Bitrix\Main\Session\SessionInterface
    {
    }
    public final function getCompositeSessionManager() : \Bitrix\Main\Session\CompositeSessionManager
    {
    }
    /**
     * Returns UF manager.
     *
     * @return \CUserTypeManager
     */
    public static function getUserTypeManager()
    {
    }
    /**
     * Returns true id server is in utf-8 mode. False - otherwise.
     *
     * @return bool
     */
    public static function isUtfMode()
    {
    }
    /**
     * Returns server document root.
     *
     * @return null|string
     */
    public static function getDocumentRoot()
    {
    }
    /**
     * Returns personal root directory (relative to document root)
     *
     * @return null|string
     */
    public static function getPersonalRoot()
    {
    }
    /**
     * Resets accelerator if any.
     */
    public static function resetAccelerator()
    {
    }
    /**
     * Adds a job to do after the response was sent.
     * @param callable $job
     * @param array $args
     * @param int $priority
     * @return $this
     */
    public function addBackgroundJob(callable $job, array $args = [], $priority = self::JOB_PRIORITY_NORMAL)
    {
    }
    protected function runBackgroundJobs()
    {
    }
    public function isExtendedKernelInitialized() : bool
    {
    }
}