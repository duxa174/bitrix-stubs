<?php

namespace Bitrix\Main;

/**
 * Represents server.
 */
class Server extends \Bitrix\Main\Type\ParameterDictionary
{
    /**
     * Creates server object.
     *
     * @param array $arServer
     */
    public function __construct(array $arServer)
    {
    }
    public function addFilter(\Bitrix\Main\Type\IRequestFilter $filter)
    {
    }
    /**
     * Returns server document root.
     *
     * @return string | null
     */
    public function getDocumentRoot()
    {
    }
    /**
     * Returns custom root folder.
     * Server variable BX_PERSONAL_ROOT is used. If empty - returns /bitrix.
     *
     * @return string | null
     */
    public function getPersonalRoot()
    {
    }
    /**
     * Returns server http host.
     *
     * @return string | null
     */
    public function getHttpHost()
    {
    }
    /**
     * Returns server name.
     *
     * @return string | null
     */
    public function getServerName()
    {
    }
    /**
     * Returns server address.
     *
     * @return string | null
     */
    public function getServerAddr()
    {
    }
    /**
     * Returns remote address.
     * @return string|null
     */
    public function getRemoteAddr()
    {
    }
    /**
     * Returns user agent.
     * @return string|null
     */
    public function getUserAgent()
    {
    }
    /**
     * Returns server port.
     *
     * @return string | null
     */
    public function getServerPort()
    {
    }
    public function getRequestScheme()
    {
    }
    /**
     * Returns requested uri.
     * /index.php/test1/test2?login=yes&back_url_admin=/
     *
     * @return string | null
     */
    public function getRequestUri()
    {
    }
    /**
     * Returns requested method.
     *
     * @return string | null
     */
    public function getRequestMethod()
    {
    }
    /**
     * Returns PHP_SELF.
     * /index.php/test1/test2
     *
     * @return string | null
     */
    public function getPhpSelf()
    {
    }
    /**
     * Returns SCRIPT_NAME.
     * /index.php
     *
     * @return string | null
     */
    public function getScriptName()
    {
    }
    public function rewriteUri($url, $queryString, $redirectStatus = null)
    {
    }
    public function transferUri($url, $queryString = "")
    {
    }
}