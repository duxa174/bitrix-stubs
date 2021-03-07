<?php

namespace Bitrix\Main;

class HttpResponse extends \Bitrix\Main\Response
{
    const STORE_COOKIE_NAME = "STORE_COOKIES";
    /** @var \Bitrix\Main\Web\Cookie[] */
    protected $cookies = array();
    /** @var Web\HttpHeaders */
    protected $headers;
    /** @var \Bitrix\Main\Type\DateTime */
    protected $lastModified;
    public function __construct()
    {
    }
    protected function initializeHeaders()
    {
    }
    /**
     * Flushes the content to the output buffer. All following output will be ignored.
     * @param string $text
     */
    public function flush($text = '')
    {
    }
    /**
     *	Adds a HTTP header field to the response.
     *
     * @param string $name Header field name
     * @param string $value Header field value
     * @return $this
     * @throws ArgumentNullException
     */
    public function addHeader($name, $value = '')
    {
    }
    /**
     * Sets a collection of HTTP headers.
     * @param Web\HttpHeaders $headers Headers collection.
     *
     * @return $this
     */
    public function setHeaders(\Bitrix\Main\Web\HttpHeaders $headers)
    {
    }
    /**
     * Adds a cookie to the response.
     *
     * @param Web\Cookie $cookie The cookie.
     * @param bool $replace Replace an existing cookie or not.
     * @param bool $checkExpires Check expires value of the cookie or not.
     * @return $this
     */
    public function addCookie(\Bitrix\Main\Web\Cookie $cookie, $replace = true, $checkExpires = true)
    {
    }
    /**
     * Remembers user's choice about storing persistent cookies.
     * @param bool $mode
     */
    public function allowPersistentCookies($mode)
    {
    }
    /**
     * @return Web\Cookie[]
     */
    public function getCookies()
    {
    }
    /**
     * @return Web\HttpHeaders
     */
    public function getHeaders()
    {
    }
    /**
     * Flushes all headers and cookies
     */
    public function writeHeaders()
    {
    }
    protected function flushHeader($header)
    {
    }
    protected function setCookie(\Bitrix\Main\Web\Cookie $cookie)
    {
    }
    /**
     * Sets the HTTP status of the response.
     *
     * @param string $status
     * @return $this
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     */
    public function setStatus($status)
    {
    }
    /**
     * Returns the HTTP status of the response.
     * @return int|string|null
     */
    public function getStatus()
    {
    }
    /**
     * Sets the latest time for the Last-Modified header field.
     *
     * @param Type\DateTime $time
     * @return $this
     */
    public function setLastModified(\Bitrix\Main\Type\DateTime $time)
    {
    }
    /**
     * @param $url
     * @return Engine\Response\Redirect
     */
    public final function redirectTo($url) : \Bitrix\Main\HttpResponse
    {
    }
    public function copyHeadersTo(\Bitrix\Main\HttpResponse $response) : \Bitrix\Main\HttpResponse
    {
    }
    private function shouldIgnoreHeaderToClone($headerName)
    {
    }
}