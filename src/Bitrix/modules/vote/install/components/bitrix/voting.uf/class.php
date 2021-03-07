<?php

class CVoteUfComponent extends \CBitrixComponent
{
    protected $editMode = \false;
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    /** @var  string */
    protected $actionPrefix = "action";
    /** @var  string */
    protected $action = "default";
    /** @var  ErrorCollection */
    protected $errorCollection;
    protected $componentId = '';
    protected static $events = array();
    public function __construct($component = \null)
    {
    }
    protected function sendResponse($response)
    {
    }
    protected function sendJsonResponse($response)
    {
    }
    protected function sendJsonErrorResponse()
    {
    }
    protected function sendJsonSuccessResponse(array $response = array())
    {
    }
    protected function sendJsonAccessDeniedResponse($message = '')
    {
    }
    protected function end($terminate = \true)
    {
    }
    public function hasErrors()
    {
    }
    public function getErrors()
    {
    }
    public function getComponentId()
    {
    }
    public function executeComponent()
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    protected function isAjaxRequest()
    {
    }
    /**
     * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
     */
    protected function getApplication()
    {
    }
    /**
     * @return array|bool|\CAllUser|\CUser
     */
    protected function getUser()
    {
    }
    protected function prepareParams()
    {
    }
    protected function processActionView()
    {
    }
    protected function processActionEdit()
    {
    }
}