<?php

namespace Bitrix\Lists\Internals;

/**
 * Class Controller
 * @package Bitrix\Lists\Internals
 * @deprecated
 */
abstract class Controller implements \Bitrix\Lists\Internals\Error\IErrorable
{
    const ERROR_REQUIRED_PARAMETER = 'LISTS_CONTROLLER_22001';
    const ERROR_UNKNOWN_ACTION = 'LISTS_CONTROLLER_22002';
    const STATUS_SUCCESS = 'success';
    const STATUS_PROCESSING = 'processing';
    const STATUS_COMPLETED = 'completed';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    const STATUS_NEED_AUTH = 'need_auth';
    const STATUS_INVALID_SIGN = 'invalid_sign';
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
    public function __construct()
    {
    }
    protected function end()
    {
    }
    public function exec()
    {
    }
    /**
     * @return array|bool|\CAllUser|\CUser
     */
    protected function getUser()
    {
    }
    protected function sendJsonResponse($response, $params = null)
    {
    }
    protected function sendJsonErrorResponse()
    {
    }
    protected function sendJsonAccessDeniedResponse($message = '')
    {
    }
    protected function sendJsonInvalidSignResponse($message = '')
    {
    }
    protected function sendJsonSuccessResponse(array $response = array())
    {
    }
    protected function sendJsonProcessingResponse(array $response = array())
    {
    }
    protected function sendJsonCompletedResponse(array $response = array())
    {
    }
    protected function sendResponse($response)
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * @inheritdoc
     */
    public function getErrorsByCode($code)
    {
    }
    /**
     * @inheritdoc
     */
    public function getErrorByCode($code)
    {
    }
    protected function resolveAction()
    {
    }
    //todo refactor BaseComponent + Controller normalizeListOfAction, resolveAction.
    //you can use composition in BaseComponent
    protected function normalizeListOfAction(array $listOfActions)
    {
    }
    protected function normalizeActionDescription($action, $description)
    {
    }
    protected function checkAction()
    {
    }
    protected function listOfActions()
    {
    }
    /**
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * @return array
     */
    public function getActionDescription()
    {
    }
    /**
     * @param string $action
     * @param array  $description
     * @return $this
     */
    public function setAction($action, array $description)
    {
    }
    /**
     * @param string $action
     * @return $this
     */
    public function setActionName($action)
    {
    }
    protected function checkRequiredModules()
    {
    }
    protected function prepareParams()
    {
    }
    /**
     * Common operations before run action.
     * @param string $actionName Action name which will be run.
     * @return bool If method will return false, then action will not execute.
     */
    protected function processBeforeAction($actionName)
    {
    }
    protected function runAction()
    {
    }
    protected function runProcessingException(\Exception $e)
    {
    }
    protected function runProcessingIfUserNotAuthorized()
    {
    }
    protected function runProcessingIfInvalidCsrfToken()
    {
    }
    /**
     * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
     */
    protected function getApplication()
    {
    }
    /**
     * @param array $inputParams
     * @param array $required
     * @return bool
     */
    protected function checkRequiredInputParams(array $inputParams, array $required)
    {
    }
    protected function checkRequiredPostParams(array $required)
    {
    }
    protected function checkRequiredGetParams(array $required)
    {
    }
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