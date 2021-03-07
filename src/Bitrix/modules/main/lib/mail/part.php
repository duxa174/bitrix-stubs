<?php

namespace Bitrix\Main\Mail;

/**
 * Class Part
 * @package Bitrix\Main\Mail
 */
class Part
{
    /** @var [] $headers Headers. */
    protected $headers = [];
    /** @var string $body Body. */
    protected $body = '';
    /** @var string $eol Symbol of end-of-line. */
    protected $eol;
    /**
     * Multipart constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get EOL.
     *
     * @return string
     */
    public function getEol()
    {
    }
    /**
     * Set EOL.
     *
     * @param string $eol
     * @return $this
     */
    public function setEol($eol)
    {
    }
    /**
     * Add header.
     *
     * @param string $name Name.
     * @param string $value Value.
     * @return $this
     */
    public function addHeader($name, $value)
    {
    }
    /**
     * Set headers.
     *
     * @param array $headers Headers.
     * @return $this
     */
    public function setHeaders(array $headers)
    {
    }
    /**
     * Get headers.
     *
     * @return array
     */
    public function getHeaders()
    {
    }
    /**
     * Get header.
     *
     * @param string $name Name.
     * @return mixed|null
     */
    public function getHeader($name)
    {
    }
    /**
     * Set body.
     *
     * @param string $body Body.
     * @return $this
     */
    public function setBody($body)
    {
    }
    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
    }
    /**
     * Convert to string.
     *
     * @return string
     */
    public function toStringBody()
    {
    }
    /**
     * Convert headers to string.
     *
     * @return string
     */
    public function toStringHeaders()
    {
    }
    /**
     * Convert object to string.
     *
     * @return string
     */
    public function toString()
    {
    }
    /**
     * Magic method.
     *
     * @return string
     */
    public function __toString()
    {
    }
    protected function splitBody(&$body)
    {
    }
}