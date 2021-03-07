<?php

namespace Bitrix\Main;

/**
 * Class HttpContext extends Context with http specific methods.
 * @package Bitrix\Main
 */
class HttpContext extends \Bitrix\Main\Context
{
    protected $session;
    /**
     * Creates new instance of context.
     *
     * @param HttpApplication $application
     */
    public function __construct(\Bitrix\Main\HttpApplication $application)
    {
    }
    public function getSession()
    {
    }
    public function rewriteUri($url, $queryString, $redirectStatus = null)
    {
    }
    public function transferUri($url, $queryString)
    {
    }
}