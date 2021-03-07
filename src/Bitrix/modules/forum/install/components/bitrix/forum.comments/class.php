<?php

final class ForumCommentsComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    const ERROR_REQUIRED_PARAMETER = 'FORUM_BASE_COMPONENT_22001';
    const ERROR_ACTION = 'FORUM_BASE_COMPONENT_22002';
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    /** @var  string */
    protected $actionPrefix = 'action';
    /** @var  string */
    protected $action;
    /** @var  ErrorCollection */
    protected $errorCollection;
    protected $componentId = '';
    /** @var \Bitrix\Forum\Comments\Feed */
    protected $feed;
    /** @var  CCaptcha */
    public $captcha;
    /** @var  array */
    private $forum;
    /** @var array */
    private static $users = array();
    /** @var integer */
    private static $index = 0;
    const STATUS_SCOPE_MOBILE = 'mobile';
    const STATUS_SCOPE_WEB = 'web';
    private $scope;
    public $prepareMobileData;
    public function __construct($component = \null)
    {
    }
    protected function changeTemplate()
    {
    }
    public function isWeb()
    {
    }
    protected function sendResponse($response)
    {
    }
    protected function sendJsonResponse($response)
    {
    }
    protected function showError()
    {
    }
    protected function sendError()
    {
    }
    protected function handleException(\Exception $e)
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
    public function onPrepareComponentParams($arParams)
    {
    }
    public function executeComponent()
    {
    }
    protected function checkRequiredParams()
    {
    }
    protected function prepareParams()
    {
    }
    public function subscribeAuthor($type, $id, $tid)
    {
    }
    public function readTopic($type, $id, $tid)
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    protected function isAjaxRequest()
    {
    }
    private function bindObjects()
    {
    }
    private function checkCaptcha()
    {
    }
    private function checkPreview()
    {
    }
    private function checkActions()
    {
    }
    public function getApplication()
    {
    }
    public function getUser()
    {
    }
    private static function getUserFromForum($userId)
    {
    }
    private function getUserName()
    {
    }
    public function configureActions()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    public function navigateCommentAction()
    {
    }
    public function processCommentAction()
    {
    }
    public function readCommentAction()
    {
    }
}