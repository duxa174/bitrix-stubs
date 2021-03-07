<?php

namespace Bitrix\Main\Engine;

class Controller implements \Bitrix\Main\Errorable, \Bitrix\Main\Engine\Contract\Controllerable
{
    const SCOPE_REST = 'rest';
    const SCOPE_AJAX = 'ajax';
    const SCOPE_CLI = 'cli';
    const EVENT_ON_BEFORE_ACTION = 'onBeforeAction';
    const EVENT_ON_AFTER_ACTION = 'onAfterAction';
    const ERROR_REQUIRED_PARAMETER = 'MAIN_CONTROLLER_22001';
    const ERROR_UNKNOWN_ACTION = 'MAIN_CONTROLLER_22002';
    const EXCEPTION_UNKNOWN_ACTION = 22002;
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    /** @var Configurator */
    protected $configurator;
    /** @var null|array */
    private $configurationOfActions = null;
    /** @var string */
    private $scope;
    /** @var CurrentUser */
    private $currentUser;
    /** @var Converter */
    private $converter;
    /** @var string */
    private $filePath;
    /** @var array */
    private $sourceParametersList;
    private $unsignedParameters;
    /**
     * Returns the fully qualified name of this class.
     * @return string
     */
    public static final function className()
    {
    }
    /**
     * Constructor Controller.
     * @param Request $request
     */
    public function __construct(\Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Controller $controller
     * @param string     $actionName
     * @param array      $parameters
     *
     * @return HttpResponse|mixed
     * @throws SystemException
     */
    public function forward($controller, string $actionName, array $parameters = null)
    {
    }
    /**
     * Initializes controller.
     * This method is invoked at the end of constructor.
     * @return void
     */
    protected function init()
    {
    }
    /**
     * @return array|null
     */
    public final function getConfigurationOfActions()
    {
    }
    /**
     * Returns module id.
     * Tries to guess module id by file path and function @see getModuleId().
     *
     * @return string
     */
    public final function getModuleId()
    {
    }
    protected final function getFilePath()
    {
    }
    /**
     * Returns uri for ajax end point for the action name. It's a helper,
     * which uses relative action name without controller name.
     *
     * @param string $actionName Action name. It's a relative action name without controller name.
     * @param array $params Parameters for creating uri.
     * @param bool $absolute
     *
     * @return \Bitrix\Main\Web\Uri
     */
    public final function getActionUri($actionName, array $params = array(), $absolute = false)
    {
    }
    /**
     * @return mixed
     */
    public final function getUnsignedParameters()
    {
    }
    protected final function processUnsignedParameters()
    {
    }
    /**
     * Tries to find salt from request. It's "c" (component name) in general.
     *
     * @return string|null
     */
    protected function getSaltToUnsign()
    {
    }
    /**
     * @return CurrentUser
     */
    public final function getCurrentUser()
    {
    }
    /**
     * @param CurrentUser $currentUser
     */
    public final function setCurrentUser(\Bitrix\Main\Engine\CurrentUser $currentUser)
    {
    }
    /**
     * Converts keys of array to camel case notation.
     * @see \Bitrix\Main\Engine\Response\Converter::OUTPUT_JSON_FORMAT
     * @param mixed $data Data.
     *
     * @return array|mixed|string
     */
    public function convertKeysToCamelCase($data)
    {
    }
    /**
     * Returns list of all
     * @return array
     */
    public final function listNameActions()
    {
    }
    /**
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @return Parameter[]
     */
    public function getAutoWiredParameters()
    {
    }
    /**
     * @return Parameter|null
     */
    public function getPrimaryAutoWiredParameter()
    {
    }
    /**
     * @return Parameter[]
     */
    public final function getDefaultAutoWiredParameters()
    {
    }
    private function buildConfigurationOfActions()
    {
    }
    /**
     * @return \Bitrix\Main\HttpRequest
     */
    public final function getRequest()
    {
    }
    /**
     * @return string
     */
    public final function getScope()
    {
    }
    /**
     * @param string $scope
     *
     * @return Controller
     */
    public final function setScope($scope)
    {
    }
    /**
     * @return array
     */
    public final function getSourceParametersList()
    {
    }
    /**
     * @param array $sourceParametersList
     *
     * @return Controller
     */
    public final function setSourceParametersList($sourceParametersList)
    {
    }
    /**
     * @param       $actionName
     * @param array $sourceParametersList
     *
     * @return HttpResponse|mixed
     * @throws SystemException
     */
    public final function run($actionName, array $sourceParametersList)
    {
    }
    protected function writeToLogException(\Throwable $e)
    {
    }
    private function processExceptionInDebug(\Throwable $e)
    {
    }
    public static final function getFullEventName($eventName)
    {
    }
    /**
     * Collects debug info by Diag.
     * @return void
     */
    protected final function collectDebugInfo()
    {
    }
    /**
     * Logs debug info by Diag.
     * @throws \Bitrix\Main\SystemException
     * @return void
     */
    protected final function logDebugInfo()
    {
    }
    /**
     * Prepare params before process action.
     * @return bool
     */
    protected function prepareParams()
    {
    }
    /**
     * Common operations before process action.
     * @param Action $action
     * @return bool If method will return false, then action will not execute.
     */
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected function shouldDecodePostData(\Bitrix\Main\Engine\Action $action) : bool
    {
    }
    protected final function decodePostData() : void
    {
    }
    /**
     * Triggers the event {{static::EVENT_ON_BEFORE_ACTION}}
     * @see \Bitrix\Main\Engine\Controller::getFullEventName.
     * This method is invoked right before an action is executed.
     * In case the action should not run, event handler have to return EvenResult with type EventResult::ERROR.
     *
     * @param Action $action Action name.
     * @return bool
     */
    protected final function triggerOnBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * Common operations after process action.
     * If the method returns void or null it means that we don't want to modify $result.
     *
     * @param Action $action
     * @param $result
     *
     * @return HttpResponse|mixed|void
     */
    protected function processAfterAction(\Bitrix\Main\Engine\Action $action, $result)
    {
    }
    /**
     * Finalizes response.
     * The method will be invoked when HttpApplication will be ready to send response to client.
     * It's a final place where Controller can interact with response.
     *
     * @param Response $response
     * @return void
     */
    public function finalizeResponse(\Bitrix\Main\Response $response)
    {
    }
    protected final function triggerOnAfterAction(\Bitrix\Main\Engine\Action $action, $result)
    {
    }
    public final function generateActionMethodName($action)
    {
    }
    protected function create($actionName)
    {
    }
    protected final function buildActionInstance($actionName, array $config)
    {
    }
    protected final function existsAction($actionName)
    {
    }
    /**
     * Returns default pre-filters for action.
     * @return array
     */
    protected function getDefaultPreFilters()
    {
    }
    /**
     * Returns default post-filters for action.
     * @return array
     */
    protected function getDefaultPostFilters()
    {
    }
    /**
     * Builds filter by config. If there is no config,
     * then we use default filters @see \Bitrix\Main\Engine\Controller::getDefaultPreFilters() and
     * @see \Bitrix\Main\Engine\Controller::getDefaultPostFilters().
     * If now is POST query and there is no csrf check in config, then we add it.
     *
     * @param array|null $config
     *
     * @return array|null
     */
    protected final function buildFilters(array $config = null)
    {
    }
    protected final function appendFilters(array $filters, array $filtersToAppend)
    {
    }
    protected final function removeFilters(array $filters, array $filtersToRemove)
    {
    }
    protected final function attachFilters(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected final function getActionConfig($actionName)
    {
    }
    protected final function setActionConfig($actionName, array $config = null)
    {
    }
    protected function runProcessingThrowable(\Throwable $throwable)
    {
    }
    /**
     * Runs processing exception.
     * @param \Exception $e Exception.
     * @return void
     */
    protected function runProcessingException(\Exception $e)
    {
    }
    protected function runProcessingError(\Error $error)
    {
    }
    protected function buildErrorFromException(\Exception $e)
    {
    }
    protected function buildErrorFromPhpError(\Error $error)
    {
    }
    /**
     * Runs processing if user is not authorized.
     * @return void
     */
    protected function runProcessingIfUserNotAuthorized()
    {
    }
    /**
     * Runs processing if csrf token is invalid.
     * @return void
     */
    protected function runProcessingIfInvalidCsrfToken()
    {
    }
    public function redirectTo($url) : \Bitrix\Main\HttpResponse
    {
    }
    /**
     * Adds error to error collection.
     * @param Error $error Error.
     *
     * @return $this
     */
    protected function addError(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Adds list of errors to error collection.
     * @param Error[] $errors Errors.
     *
     * @return $this
     */
    protected function addErrors(array $errors)
    {
    }
    /**
     * Getting array of errors.
     * @return Error[]
     */
    public final function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error
     */
    public final function getErrorByCode($code)
    {
    }
}