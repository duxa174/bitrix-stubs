<?php

namespace Bitrix\Main;

/**
 * Class HttpRequest extends Request. Contains http specific request data.
 *
 * @package Bitrix\Main
 */
class HttpRequest extends \Bitrix\Main\Request
{
    /**
     * @var Type\ParameterDictionary
     */
    protected $queryString;
    /**
     * @var Type\ParameterDictionary
     */
    protected $postData;
    /**
     * @var Type\ParameterDictionary
     */
    protected $files;
    /**
     * @var Type\ParameterDictionary
     */
    protected $cookies;
    /**
     * @var Type\ParameterDictionary
     */
    protected $cookiesRaw;
    /**
     * @var HttpHeaders
     */
    protected $headers;
    protected $httpHost;
    /**
     * Creates new HttpRequest object
     *
     * @param Server $server
     * @param array $queryString _GET
     * @param array $postData _POST
     * @param array $files _FILES
     * @param array $cookies _COOKIE
     */
    public function __construct(\Bitrix\Main\Server $server, array $queryString, array $postData, array $files, array $cookies)
    {
    }
    private function buildHttpHeaders(\Bitrix\Main\Server $server)
    {
    }
    /**
     * Applies filter to the http request data. Preserve original values.
     *
     * @param Type\IRequestFilter $filter Filter object
     */
    public function addFilter(\Bitrix\Main\Type\IRequestFilter $filter)
    {
    }
    /**
     * Returns the GET parameter of the current request.
     *
     * @param string $name Parameter name
     * @return null|mixed
     */
    public function getQuery($name)
    {
    }
    /**
     * Returns the list of GET parameters of the current request.
     *
     * @return Type\ParameterDictionary
     */
    public function getQueryList()
    {
    }
    /**
     * Returns the POST parameter of the current request.
     *
     * @param $name
     * @return null|mixed
     */
    public function getPost($name)
    {
    }
    /**
     * Returns the list of POST parameters of the current request.
     *
     * @return Type\ParameterDictionary
     */
    public function getPostList()
    {
    }
    /**
     * Returns the FILES parameter of the current request.
     *
     * @param $name
     * @return null|mixed
     */
    public function getFile($name)
    {
    }
    /**
     * Returns the list of FILES parameters of the current request.
     *
     * @return Type\ParameterDictionary
     */
    public function getFileList()
    {
    }
    /**
     * Returns the header of the current request.
     *
     * @param string $name Name of header.
     *
     * @return null|string
     */
    public function getHeader($name)
    {
    }
    /**
     * Returns the list of headers of the current request.
     *
     * @return HttpHeaders
     */
    public function getHeaders()
    {
    }
    /**
     * Returns the COOKIES parameter of the current request.
     *
     * @param $name
     * @return null|string
     */
    public function getCookie($name)
    {
    }
    /**
     * Returns the list of COOKIES parameters of the current request.
     *
     * @return Type\ParameterDictionary
     */
    public function getCookieList()
    {
    }
    public function getCookieRaw($name)
    {
    }
    public function getCookieRawList()
    {
    }
    public function getRemoteAddress()
    {
    }
    public function getRequestUri()
    {
    }
    public function getRequestMethod()
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
    public function isPost()
    {
    }
    /**
     * Returns the User-Agent HTTP request header.
     * @return null|string
     */
    public function getUserAgent()
    {
    }
    public function getAcceptedLanguages()
    {
    }
    /**
     * Returns the current page calculated from the request URI.
     *
     * @return string
     */
    public function getRequestedPage()
    {
    }
    /**
     * Returns url-decoded and converted to the current encoding URI of the request (except the query string).
     *
     * @return string
     */
    public function getDecodedUri()
    {
    }
    protected static function decode($url)
    {
    }
    /**
     * Returns the host from the server variable without a port number.
     * @return string
     */
    public function getHttpHost()
    {
    }
    public function isHttps()
    {
    }
    public function modifyByQueryString($queryString)
    {
    }
    /**
     * @param array $cookies
     * @return array
     */
    protected function prepareCookie(array $cookies)
    {
    }
    private function fetchHeaders(\Bitrix\Main\Server $server)
    {
    }
    private function normalizeHeaders(array $headers)
    {
    }
    protected static function normalize($path)
    {
    }
    /**
     * Returns script file possibly corrected by urlrewrite.php or virtual_file_system.php.
     *
     * @return string
     */
    public function getScriptFile()
    {
    }
    /**
     * Returns the array with predefined query parameters.
     * @return array
     */
    public static function getSystemParameters()
    {
    }
    /**
     * Returns raw request data from php://input.
     * @return bool|string
     */
    public static function getInput()
    {
    }
    /**
     * Returns Y if persistant cookies are enabled, N if disabled, or empty if unknown.
     * @return null|string
     */
    public function getCookiesMode()
    {
    }
}