<?php

namespace Bitrix\Main;

/**
 * Class Request contains current request
 * @package Bitrix\Main
 */
abstract class Request extends \Bitrix\Main\Type\ParameterDictionary
{
    /**
     * @var Server
     */
    protected $server;
    protected $requestedPage = null;
    protected $requestedPageDirectory = null;
    public function __construct(\Bitrix\Main\Server $server, array $request)
    {
    }
    public function addFilter(\Bitrix\Main\Type\IRequestFilter $filter)
    {
    }
    /**
     * @return Server
     */
    public function getServer()
    {
    }
    public function getPhpSelf()
    {
    }
    public function getScriptName()
    {
    }
    public function getRequestedPage()
    {
    }
    public function getRequestedPageDirectory()
    {
    }
    public function isAdminSection()
    {
    }
    /**
     * Returns true if current request is AJAX
     * @return bool
     */
    public function isAjaxRequest()
    {
    }
}