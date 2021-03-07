<?php

namespace Bitrix\Main\Web;

class Uri implements \JsonSerializable
{
    protected $scheme;
    protected $host;
    protected $port;
    protected $user;
    protected $pass;
    protected $path;
    protected $query;
    protected $fragment;
    /**
     * @param string $url
     */
    public function __construct($url)
    {
    }
    /**
     * @deprecated Use getLocator() or getUri().
     */
    public function getUrl()
    {
    }
    /**
     * Return the URI without a fragment.
     * @return string
     */
    public function getLocator()
    {
    }
    /**
     * Return the URI with a fragment, if any.
     * @return string
     */
    public function getUri()
    {
    }
    /**
     * Returns the fragment.
     * @return string
     */
    public function getFragment()
    {
    }
    /**
     * Returns the host.
     * @return string
     */
    public function getHost()
    {
    }
    /**
     * Sets the host
     * @param string $host Host name.
     * @return $this
     */
    public function setHost($host)
    {
    }
    /**
     * Returns the password.
     * @return string
     */
    public function getPass()
    {
    }
    /**
     * Sets the password.
     * @param string $pass Password,
     * @return $this
     */
    public function setPass($pass)
    {
    }
    /**
     * Returns the path.
     * @return string
     */
    public function getPath()
    {
    }
    /**
     * Sets the path.
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
    }
    /**
     * Returns the path with the query.
     * @return string
     */
    public function getPathQuery()
    {
    }
    /**
     * Returns the port number.
     * @return string
     */
    public function getPort()
    {
    }
    /**
     * Returns the query.
     * @return string
     */
    public function getQuery()
    {
    }
    /**
     * Returns the scheme.
     * @return string
     */
    public function getScheme()
    {
    }
    /**
     * Returns the user.
     * @return string
     */
    public function getUser()
    {
    }
    /**
     * Sets the user.
     * @param string $user User.
     * @return $this
     */
    public function setUser($user)
    {
    }
    /**
     * Extended parsing to allow dots and spaces in parameters names.
     * @param string $params
     * @return array
     */
    protected static function parseParams($params)
    {
    }
    /**
     * Deletes parameters from the query.
     * @param array $params Parameters to delete.
     * @param bool $preserveDots Special treatment of dots and spaces in the parameters names.
     * @return $this
     */
    public function deleteParams(array $params, $preserveDots = false)
    {
    }
    /**
     * Adds parameters to query or replaces existing ones.
     * @param array $params Parameters to add.
     * @param bool $preserveDots Special treatment of dots and spaces in the parameters names.
     * @return $this
     */
    public function addParams(array $params, $preserveDots = false)
    {
    }
    public function __toString()
    {
    }
    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
    }
    /**
     * Converts the host to punycode.
     * @return string|\Bitrix\Main\Error
     */
    public function convertToPunycode()
    {
    }
}