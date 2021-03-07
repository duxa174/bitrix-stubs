<?php

namespace Bitrix\Main;

/**
 * Context of current request.
 */
class Context
{
    /** @var Application */
    protected $application;
    /** @var Response */
    protected $response;
    /** @var Request */
    protected $request;
    /** @var Server */
    protected $server;
    /** @var string */
    private $language;
    /** @var string */
    private $site;
    /** @var Environment */
    protected $env;
    /** @var \Bitrix\Main\Context\Culture */
    protected $culture;
    /** @var array */
    protected $params;
    /**
     * Creates new instance of context.
     *
     * @param Application $application
     */
    public function __construct(\Bitrix\Main\Application $application)
    {
    }
    /**
     * Initializes context by request and response objects.
     *
     * @param Request $request
     * @param Response $response
     * @param Server $server
     * @param Environment $env
     */
    public function initialize(\Bitrix\Main\Request $request, \Bitrix\Main\Response $response = null, \Bitrix\Main\Server $server, array $params = array())
    {
    }
    public function getEnvironment()
    {
    }
    /**
     * Returns response object of the context.
     *
     * @return HttpResponse
     */
    public function getResponse()
    {
    }
    /**
     * Sets response of the context.
     *
     * @param Response $response Response.
     * @return void
     */
    public function setResponse(\Bitrix\Main\Response $response)
    {
    }
    /**
     * Returns request object of the context.
     *
     * @return HttpRequest
     */
    public function getRequest()
    {
    }
    /**
     * Returns server object of the context.
     *
     * @return Server
     */
    public function getServer()
    {
    }
    /**
     * Returns backreference to Application.
     *
     * @return Application
     */
    public function getApplication()
    {
    }
    /**
     * Returns culture of the context.
     *
     * @return \Bitrix\Main\Context\Culture
     */
    public function getCulture()
    {
    }
    /**
     * Returns current language (en, ru)
     *
     * @return string
     */
    public function getLanguage()
    {
    }
    /**
     * Returns current site
     *
     * @return string
     */
    public function getSite()
    {
    }
    /**
     * Sets culture of the context.
     *
     * @param \Bitrix\Main\Context\Culture $culture
     */
    public function setCulture(\Bitrix\Main\Context\Culture $culture)
    {
    }
    /**
     * Sets language of the context.
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
    }
    /**
     * Sets site of the context.
     *
     * @param string $site
     */
    public function setSite($site)
    {
    }
    /**
     * Static method returns current instance of context.
     *
     * @static
     * @return Context
     */
    public static function getCurrent()
    {
    }
}