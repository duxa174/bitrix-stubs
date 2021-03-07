<?php

namespace Bitrix\Main\Web;

class HttpClient
{
    const HTTP_1_0 = "1.0";
    const HTTP_1_1 = "1.1";
    const HTTP_GET = "GET";
    const HTTP_POST = "POST";
    const HTTP_PUT = "PUT";
    const HTTP_HEAD = "HEAD";
    const HTTP_PATCH = "PATCH";
    const HTTP_DELETE = "DELETE";
    const HTTP_OPTIONS = "OPTIONS";
    const DEFAULT_SOCKET_TIMEOUT = 30;
    const DEFAULT_STREAM_TIMEOUT = 60;
    const DEFAULT_STREAM_TIMEOUT_NO_WAIT = 1;
    const BUF_READ_LEN = 16384;
    const BUF_POST_LEN = 131072;
    protected $proxyHost;
    protected $proxyPort;
    protected $proxyUser;
    protected $proxyPassword;
    protected $resource;
    protected $socketTimeout = self::DEFAULT_SOCKET_TIMEOUT;
    protected $streamTimeout = self::DEFAULT_STREAM_TIMEOUT;
    protected $error = array();
    protected $peerSocketName;
    /** @var HttpHeaders */
    protected $requestHeaders;
    /** @var HttpCookies  */
    protected $requestCookies;
    protected $waitResponse = true;
    protected $redirect = true;
    protected $redirectMax = 5;
    protected $redirectCount = 0;
    protected $compress = false;
    protected $version = self::HTTP_1_0;
    protected $requestCharset = '';
    protected $sslVerify = true;
    protected $bodyLengthMax = 0;
    protected $privateIp = true;
    protected $status = 0;
    /** @var HttpHeaders */
    protected $responseHeaders;
    /** @var HttpCookies  */
    protected $responseCookies;
    protected $result = '';
    protected $outputStream;
    /** @var IpAddress */
    protected $effectiveIp;
    protected $effectiveUrl;
    protected $receivedBytesLength = 0;
    protected $contextOptions = [];
    /**
     * @param array $options Optional array with options:
     *		"redirect" bool Follow redirects (default true)
     *		"redirectMax" int Maximum number of redirects (default 5)
     *		"waitResponse" bool Read the body or disconnect just after reading headers (default true)
     *		"socketTimeout" int Connection timeout in seconds (default 30)
     *		"streamTimeout" int Stream reading timeout in seconds (default 60 for waitResponse == true and 1 for waitResponse == false)
     *		"version" string HTTP version (HttpClient::HTTP_1_0, HttpClient::HTTP_1_1) (default "1.0")
     *		"proxyHost" string Proxy host name/address
     *		"proxyPort" int Proxy port number
     *		"proxyUser" string Proxy username
     *		"proxyPassword" string Proxy password
     *		"compress" bool Accept gzip encoding (default false)
     *		"charset" string Charset for body in POST and PUT
     *		"disableSslVerification" bool Pass true to disable ssl check
     *		"bodyLengthMax" int Maximum length of the body.
     *		"privateIp" bool Enable or disable requests to private IPs (default true).
     * 	"cookies" array of cookies for HTTP request.
     * 	"headers" array of headers for HTTP request.
     * 	All the options can be set separately with setters.
     */
    public function __construct(array $options = null)
    {
    }
    /**
     * Closes the connection on the object destruction.
     */
    public function __destruct()
    {
    }
    /**
     * Performs GET request.
     *
     * @param string $url Absolute URI eg. "http://user:pass @ host:port/path/?query".
     * @return string|bool Response entity string or false on error. Note, it's empty string if outputStream is set.
     */
    public function get($url)
    {
    }
    /**
     * Performs HEAD request.
     *
     * @param string $url Absolute URI eg. "http://user:pass @ host:port/path/?query"
     * @return HttpHeaders|bool Response headers or false on error.
     */
    public function head($url)
    {
    }
    /**
     * Performs POST request.
     *
     * @param string $url Absolute URI eg. "http://user:pass @ host:port/path/?query".
     * @param array|string|resource $postData Entity of POST/PUT request. If it's resource handler then data will be read directly from the stream.
     * @param boolean $multipart Whether or not to use multipart/form-data encoding. If true, method accepts file as a resource or as an array with keys 'resource' (or 'content') and optionally 'filename' and 'contentType'
     * @return string|bool Response entity string or false on error. Note, it's empty string if outputStream is set.
     */
    public function post($url, $postData = null, $multipart = false)
    {
    }
    /**
     * Performs multipart/form-data encoding.
     * Accepts file as a resource or as an array with keys 'resource' (or 'content') and optionally 'filename' and 'contentType'
     *
     * @param array|string|resource $postData Entity of POST/PUT request
     * @return string|bool False on error
     */
    protected function prepareMultipart($postData)
    {
    }
    /**
     * Perfoms HTTP request.
     *
     * @param string $method HTTP method (GET, POST, etc.). Note, it must be in UPPERCASE.
     * @param string $url Absolute URI eg. "http://user:pass @ host:port/path/?query".
     * @param array|string|resource $entityBody Entity body of the request. If it's resource handler then data will be read directly from the stream.
     * @return bool Query result (true or false). Response entity string can be get via getResult() method. Note, it's empty string if outputStream is set.
     */
    public function query($method, $url, $entityBody = null)
    {
    }
    /**
     * Sets an HTTP request header field.
     *
     * @param string $name Name of the header field.
     * @param string $value Value of the field.
     * @param bool $replace Replace existing header field with the same name or add one more.
     * @return $this
     */
    public function setHeader($name, $value, $replace = true)
    {
    }
    /**
     * Sets an array of headers for HTTP request.
     *
     * @param array $headers Array of header_name => value pairs.
     * @return $this
     */
    public function setHeaders(array $headers)
    {
    }
    /**
     * Clears all HTTP request header fields.
     */
    public function clearHeaders()
    {
    }
    /**
     * Sets an array of cookies for HTTP request.
     *
     * @param array $cookies Array of cookie_name => value pairs.
     * @return $this
     */
    public function setCookies(array $cookies)
    {
    }
    /**
     * Sets Basic Authorization request header field.
     *
     * @param string $user Username.
     * @param string $pass Password.
     * @return $this
     */
    public function setAuthorization($user, $pass)
    {
    }
    /**
     * Sets redirect options.
     *
     * @param bool $value If true, do redirect (default true).
     * @param null|int $max Maximum allowed redirect count.
     * @return $this
     */
    public function setRedirect($value, $max = null)
    {
    }
    /**
     * Sets response body waiting option.
     *
     * @param bool $value If true, wait for response body. If false, disconnect just after reading headers (default true).
     * @return $this
     */
    public function waitResponse($value)
    {
    }
    /**
     * Sets connection timeout.
     *
     * @param int $value Connection timeout in seconds (default 30).
     * @return $this
     */
    public function setTimeout($value)
    {
    }
    /**
     * Sets socket stream reading timeout.
     *
     * @param int $value Stream reading timeout in seconds; "0" means no timeout (default 60).
     * @return $this
     */
    public function setStreamTimeout($value)
    {
    }
    /**
     * Sets HTTP protocol version. In version 1.1 chunked response is possible.
     *
     * @param string $value Version "1.0" or "1.1" (default "1.0").
     * @return $this
     */
    public function setVersion($value)
    {
    }
    /**
     * Sets compression option.
     * Consider not to use the "compress" option with the output stream if a content can be large.
     * Note, that compressed response is processed anyway if Content-Encoding response header field is set
     *
     * @param bool $value If true, "Accept-Encoding: gzip" will be sent.
     * @return $this
     */
    public function setCompress($value)
    {
    }
    /**
     * Sets charset for entity-body (used in the Content-Type request header field for POST and PUT)
     *
     * @param string $value Charset.
     * @return $this
     */
    public function setCharset($value)
    {
    }
    /**
     * Disables ssl certificate verification.
     *
     * @return $this
     */
    public function disableSslVerification()
    {
    }
    /**
     * Enables or disables requests to private IPs.
     *
     * @param bool $value
     * @return $this
     */
    public function setPrivateIp($value)
    {
    }
    /**
     * Sets HTTP proxy for request.
     *
     * @param string $proxyHost Proxy host name or address (without "http://").
     * @param null|int $proxyPort Proxy port number.
     * @param null|string $proxyUser Proxy username.
     * @param null|string $proxyPassword Proxy password.
     * @return $this
     */
    public function setProxy($proxyHost, $proxyPort = null, $proxyUser = null, $proxyPassword = null)
    {
    }
    /**
     * Sets the response output to the stream instead of the string result. Useful for large responses.
     * Note, the stream must be readable/writable to support a compressed response.
     * Note, in this mode the result string is empty.
     *
     * @param resource $handler File or stream handler.
     * @return $this
     */
    public function setOutputStream($handler)
    {
    }
    /**
     * Sets the maximum body length that will be received in $this->readBody().
     *
     * @param int $bodyLengthMax
     * @return $this
     */
    public function setBodyLengthMax($bodyLengthMax)
    {
    }
    /**
     * Downloads and saves a file.
     *
     * @param string $url URI to download.
     * @param string $filePath Absolute file path.
     * @return bool
     */
    public function download($url, $filePath)
    {
    }
    /**
     * Returns URL of the last redirect if request was redirected, or initial URL if request was not redirected.
     * @return string
     */
    public function getEffectiveUrl()
    {
    }
    /**
     * Sets context options and parameters.
     *
     * @param array $options Context options and parameters
     * @return $this
     */
    public function setContextOptions(array $options)
    {
    }
    protected function connect(\Bitrix\Main\Web\Uri $url)
    {
    }
    protected function createContext()
    {
    }
    protected function disconnect()
    {
    }
    protected function send($data)
    {
    }
    protected function receive($bufLength = null)
    {
    }
    protected function sendRequest($method, \Bitrix\Main\Web\Uri $url, $entityBody = null)
    {
    }
    protected function readHeaders()
    {
    }
    protected function readBody()
    {
    }
    protected function receiveBytes($length)
    {
    }
    protected function checkErrors($buf)
    {
    }
    protected function decompress()
    {
    }
    protected function parseHeaders($headers)
    {
    }
    /**
     * Returns parsed HTTP response headers
     *
     * @return HttpHeaders
     */
    public function getHeaders()
    {
    }
    /**
     * Returns parsed HTTP response cookies
     *
     * @return HttpCookies
     */
    public function getCookies()
    {
    }
    /**
     * Returns HTTP response status code
     *
     * @return int
     */
    public function getStatus()
    {
    }
    /**
     * Returns HTTP response entity string. Note, if outputStream is set, the result will be empty string.
     *
     * @return string
     */
    public function getResult()
    {
    }
    /**
     * Returns array of errors on failure
     *
     * @return array Array with "error_code" => "error_message" pair
     */
    public function getError()
    {
    }
    /**
     * Returns response content type
     *
     * @return string
     */
    public function getContentType()
    {
    }
    /**
     * Returns response content encoding
     *
     * @return string
     */
    public function getCharset()
    {
    }
    /**
     * Returns remote peer socket name (usually in form ip:port)
     *
     * @return string
     */
    public function getPeerSocketName()
    {
    }
    /**
     * Returns remote peer ip address.
     * @return string|false
     */
    public function getPeerAddress()
    {
    }
    /**
     * Returns remote peer ip address.
     * @return int|false
     */
    public function getPeerPort()
    {
    }
}