<?php

namespace Bitrix\Main\UserConsent\Internals;

abstract class ComponentController
{
    protected $errors = array();
    protected $action = null;
    protected $responseData = array();
    protected $requestData = array();
    /** @var HttpRequest $request */
    protected $request = array();
    protected abstract function getActions();
    protected abstract function checkPermissions();
    protected function prepareRequestData()
    {
    }
    protected function giveResponse()
    {
    }
    protected function getActionCall()
    {
    }
    protected function hasErrors()
    {
    }
    protected function check()
    {
    }
    /**
     * Exec.
     *
     * @return void
     */
    public function exec()
    {
    }
}