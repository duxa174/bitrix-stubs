<?php

namespace Bitrix\Rest\Engine;

class RestManager extends \IRestService
{
    /** @var \CRestServer */
    protected $restServer;
    /** @var PageNavigation */
    private $pageNavigation;
    public static function onFindMethodDescription($potentialAction)
    {
    }
    public static function getModuleScopeAlias($moduleId)
    {
    }
    /**
     * Processes method to services.
     *
     * @param array $params Input parameters ($_GET, $_POST).
     * @param     string $start Start position.
     * @param \CRestServer $restServer REST server.
     *
     * @return array
     * @throws RestException
     * @throws \Bitrix\Main\SystemException
     */
    public function processMethodRequest(array $params, $start, \CRestServer $restServer)
    {
    }
    /**
     * @param \CRestServer $restServer
     * @param $start
     */
    private function initialize(\CRestServer $restServer, $start) : void
    {
    }
    /**
     * @param Engine\Response\DataType\Page $page
     * @see \IRestService::setNavData
     *
     * @return array
     */
    private function getNavigationData(\Bitrix\Main\Engine\Response\DataType\Page $page)
    {
    }
    private function processData($result)
    {
    }
    private function convertAjaxUriToRest(\Bitrix\Main\Web\Uri $uri)
    {
    }
    private function getRestEndPoint()
    {
    }
    /**
     * @param Error[] $errors
     * @return RestException
     */
    private function createExceptionFromErrors(array $errors)
    {
    }
    /**
     * @param array $autoWirings
     */
    private function registerAutoWirings(array $autoWirings) : void
    {
    }
    /**
     * @param array $autoWirings
     */
    private function unRegisterAutoWirings(array $autoWirings) : void
    {
    }
    /**
     * @return array
     */
    private function getAutoWirings() : array
    {
    }
}