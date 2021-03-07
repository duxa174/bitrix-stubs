<?php

namespace Bitrix\Report\Internals;

abstract class Controller
{
    const EVENT_ON_BEFORE_ACTION = 'onBeforeAction';
    const ERROR_REQUIRED_PARAMETER = 'REPORT_CONTROLLER_22001';
    const ERROR_UNKNOWN_ACTION = 'REPORT_CONTROLLER_22002';
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    const STATUS_NEED_AUTH = 'need_auth';
    const STATUS_INVALID_SIGN = 'invalid_sign';
    const STATUS_RESTRICTION = 'restriction';
    /** @var string */
    protected $action;
    /** @var  array */
    protected $actionDescription;
    /** @var  string */
    protected $realActionName;
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  \Bitrix\Main\HttpRequest */
    protected $request;
    /**
     * Constructor Controller.
     */
    public function __construct()
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
     * Terminates controller and application.
     * This method replaces "die()" or "exit()" and ensures life cycle of application.
     * @return void
     */
    protected function end()
    {
    }
    /**
     * Executes controller by specific action.
     * This method contains all steps of life cycle controller.
     * @return void
     */
    public function exec()
    {
    }
    /**
     * Triggers the event {{static::EVENT_ON_BEFORE_ACTION . $action}}.
     * This method is invoked right before an action is executed.
     * In case the action should not run, event handler have to return EvenResult with type EventResult::ERROR.
     *
     * @param string $action Action name.
     * @return bool
     */
    protected function triggerOnBeforeAction($action)
    {
    }
    /**
     * Gets current user.
     * @return array|bool|\CAllUser|\CUser
     */
    protected function getUser()
    {
    }
    /**
     * Sends JSON response and terminates controller.
     * @param mixed $response
     * @param null|array $params
     * @return void
     */
    protected function sendJsonResponse($response, $params = null)
    {
    }
    /**
     * Sends JSON response with status "error" and with errors and terminates controller.
     * @return void
     */
    protected function sendJsonErrorResponse()
    {
    }
    /**
     * Sends JSON response with status "denied" and terminates controller.
     * @param string $message Message.
     * @return void
     */
    protected function sendJsonAccessDeniedResponse($message = '')
    {
    }
    /**
     * Sends JSON response with status "invalid_sign" and terminates controller.
     * @param string $message Message.
     * @return void
     */
    protected function sendJsonInvalidSignResponse($message = '')
    {
    }
    /**
     * Sends JSON response with status "success" and mixed data, and terminates controller.
     * @param array $response Data to response.
     * @return void
     */
    protected function sendJsonSuccessResponse(array $response = array())
    {
    }
    /**
     * Sends response and terminates controller.
     * Automatically restart buffer.
     * @param mixed $response Mixed data to response.
     * @return void
     */
    protected function sendResponse($response)
    {
    }
    /**
     * Getting array of errors.
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error[]
     */
    public function getErrorByCode($code)
    {
    }
    /**
     * Resolves action and description of action, which need to run.
     * @see listActions().
     * @return $this
     */
    protected function resolveAction()
    {
    }
    //todo refactor BaseComponent + Controller normalizeListOfAction, resolveAction.
    //you can use composition in BaseComponent
    /**
     * Normalizes list of action to general view.
     * @param array $listOfActions List of action (@see listActions()).
     * @return array
     */
    protected function normalizeListOfAction(array $listOfActions)
    {
    }
    /**
     * Normalizes action description.
     *
     * Default description:
     * array(
     *			'method' => array('GET'), //allowed methods to run action.
     *			'name' => $action, //action which will run
     *			'check_csrf_token' => false, // check csrf token
     *			'redirect_on_auth' => true, // if user doesn't authorize then will redirect on login page.
     *			'close_session' => false, //execute session_close() before action.
     *	)
     *
     * @param string $action Action name.
     * @param array|string $description Action description.
     * @return array
     */
    protected function normalizeActionDescription($action, $description)
    {
    }
    /**
     * Checks action by settings in description.
     * This method may terminate controller and application.
     * @return void
     */
    protected function checkAction()
    {
    }
    /**
     * Lists all actions by controller. This listing may contains description in short-style.
     *
     * If you set
     * array(
     *  'showTest'
     * )
     *
     * Then action 'showTest' has default description @see normalizeActionDescription()
     * and execute method processActionShowTest.
     *
     * If you set
     * array(
     *  'showFoo' => 'showBar'
     * )
     *
     * Then action 'showFoo' has default description @see normalizeActionDescription()
     * and execute method processActionShowBar.
     *
     * If you set
     * array(
     *  'showFoo' => array(
     *		'method' => array('GET', 'POST'), //allowed GET and POST methods to run action.
     *		'name' => 'showFoo', //execute method processActionShowFoo
     *		'check_csrf_token' => true, // check csrf token and run @see runProcessingIfInvalidCsrfToken()
     *		'redirect_on_auth' => true, // if user doesn't authorize then will redirect on login page.
     *		'close_session' => false, //execute session_close() before action.
     *  )
     * )
     *
     * @return array
     */
    protected function listActions()
    {
    }
    /**
     * Gets current action.
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * Gets description of action.
     * @return array
     */
    public function getActionDescription()
    {
    }
    /**
     * Sets action and description.
     * @param string $action Action name.
     * @param array  $description Action description.
     * @return $this
     */
    public function setAction($action, array $description)
    {
    }
    /**
     * Sets action name.
     * @param string $action Action name.
     * @return $this
     */
    public function setActionName($action)
    {
    }
    /**
     * Checks required modules before process action.
     * @return void
     */
    protected function checkRequiredModules()
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
     * @param string $actionName Action name which will be run.
     * @return bool If method will return false, then action will not execute.
     */
    protected function processBeforeAction($actionName)
    {
    }
    protected function runAction()
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
    /**
     * Get application instance.
     * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
     */
    protected function getApplication()
    {
    }
    /**
     * Checks required parameters.
     * Fills error collection if required parameter is missed.
     * @param array $inputParams Input data.
     * @param array $required Required parameters.
     * @return bool
     */
    protected function checkRequiredInputParams(array $inputParams, array $required)
    {
    }
    /**
     * Checks required parameters in $_POST.
     * Fills error collection if required parameter is missed.
     * @param array $required Required parameters.
     * @return bool
     */
    protected function checkRequiredPostParams(array $required)
    {
    }
    /**
     * Checks required parameters in $_GET.
     * Fills error collection if required parameter is missed.
     * @param array $required Required parameters.
     * @return bool
     */
    protected function checkRequiredGetParams(array $required)
    {
    }
    /**
     * Checks required parameters in $_FILES.
     * Fills error collection if required parameter is missed.
     * @param array $required Required parameters.
     * @return bool
     */
    protected function checkRequiredFilesParams(array $required)
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    protected function isAjaxRequest()
    {
    }
}