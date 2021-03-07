<?php

namespace Bitrix\Vote\Base;

abstract class Controller
{
    const EVENT_ON_BEFORE_ACTION = 'onBeforeAction';
    const ERROR_REQUIRED_PARAMETER = 'VOTE_CONTROLLER_22001';
    const ERROR_UNKNOWN_ACTION = 'VOTE_CONTROLLER_22002';
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    const STATUS_NEED_AUTH = 'need_auth';
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
    private $collectDebugInfo = 1;
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
     * Collects debug info by Diag.
     * @return void
     */
    protected function collectDebugInfo()
    {
    }
    /**
     * Logs debug info by Diag.
     * @throws \Bitrix\Main\SystemException
     * @return void
     */
    protected function logDebugInfo()
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
     * @return Error|null
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
    private function sanitizeActionName($actionName)
    {
    }
    /**
     * Normalizes action description.
     *
     * Default description:
     * array(
     *			'method' => array('GET'), //allowed methods to run action.
     *			'name' => $action, //action which will run
     *			'need_auth' => true,
     *			'redirect_on_auth' => true,
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
     * @return boolean
     */
    protected function checkAction()
    {
    }
    /**
     * Lists all actions by controller. This listing may contains description in short-style.
     *
     * If you set
     * array(
     *  'showFoo' => array(
     *		'method' => array('GET', 'POST'), //allowed GET and POST methods to run action.
     *		'name' => 'showFoo', //execute method processActionShowFoo
     *		'need_auth' => true
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
    /**
     * Runs action.
     * Will be run method with name processAction{$actionName}
     * @return mixed
     */
    protected function runAction()
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