<?php

namespace Bitrix\Main;

/**
 * Http application extends application. Contains http specific methods.
 */
class HttpApplication extends \Bitrix\Main\Application
{
    /**
     * Creates new instance of http application.
     */
    protected function __construct()
    {
    }
    /**
     * Initializes context of the current request.
     *
     * @param array $params Request parameters
     */
    protected function initializeContext(array $params)
    {
    }
    public function createExceptionHandlerOutput()
    {
    }
    /**
     * Starts request execution. Should be called after initialize.
     */
    public function start()
    {
    }
    /**
     * Finishes request execution.
     * It is registered in start() and called automatically on script shutdown.
     */
    public function finish()
    {
    }
    private function getSourceParametersList()
    {
    }
    /**
     * Runs controller and its action and sends response to the output.
     *
     * @return void
     */
    public function run()
    {
    }
    /**
     * @param Controller|string $controller
     * @param string $action
     * @return void
     */
    public final function runController($controller, $action) : void
    {
    }
    /**
     * @param Controller|null   $controller
     * @param HttpResponse|null $result
     * @param ErrorCollection   $errorCollection
     */
    private function finalizeControllerResult($controller, $result, \Bitrix\Main\ErrorCollection $errorCollection) : void
    {
    }
    private function processRunError(\Throwable $e, \Bitrix\Main\ErrorCollection $errorCollection) : void
    {
    }
    private function registerAutoWirings()
    {
    }
    /**
     * Builds a response by result's action.
     * If an action returns non subclass of HttpResponse then the method tries to create Response\StandardJson.
     *
     * @param mixed $actionResult
     * @param ErrorCollection $errorCollection
     *
     * @return HttpResponse
     */
    private function buildResponse($actionResult, \Bitrix\Main\ErrorCollection $errorCollection)
    {
    }
}