<?php

namespace Bitrix\Main\Web;

class HttpHeaders implements \IteratorAggregate
{
    protected $headers = array();
    public function __construct()
    {
    }
    /**
     * Adds a header.
     * @param string $name
     * @param string $value
     */
    public function add($name, $value)
    {
    }
    private function refineString($string)
    {
    }
    /**
     * Sets a header value.
     * @param string $name
     * @param string|null $value
     */
    public function set($name, $value)
    {
    }
    /**
     * Returns a header value by its name. If $returnArray is true then an array with multiple values is returned.
     * @param string $name
     * @param bool $returnArray
     * @return null|string|array
     */
    public function get($name, $returnArray = false)
    {
    }
    /**
     * Deletes a header or headers by its name.
     *
     * @param string $name
     * @return void
     */
    public function delete($name)
    {
    }
    /**
     * Clears all headers.
     */
    public function clear()
    {
    }
    /**
     * Returns the string representation for a HTTP request.
     * @return string
     */
    public function toString()
    {
    }
    /**
     * Returns headers as a raw array.
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Returns the content type part of the Content-Type header.
     * @return null|string
     */
    public function getContentType()
    {
    }
    public function getBoundary()
    {
    }
    /**
     * Returns the charset part of the Content-Type header.
     * @return null|string
     */
    public function getCharset()
    {
    }
    /**
     * Returns disposition-type part of the Content-Disposition header
     * @return null|string Disposition-type part of the Content-Disposition header if found or null otherwise.
     */
    public function getContentDisposition()
    {
    }
    /**
     * Returns a filename from the Content-disposition header.
     *
     * @return string|null Filename if it was found in the Content-disposition header or null otherwise.
     */
    public function getFilename()
    {
    }
    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
    }
}