<?php

namespace Bitrix\Main;

abstract class Response
{
    /** @var string */
    protected $content;
    public function __construct()
    {
    }
    public function clear()
    {
    }
    public function flush($text = '')
    {
    }
    /**
     * Sets content.
     * Valid types are strings, numbers, null, and objects that implement a __toString() method.
     *
     * @param mixed $content Content that can be cast to string.
     *
     * @return $this
     * @throws ArgumentTypeException
     */
    public function setContent($content)
    {
    }
    /**
     * Appends content.
     * Valid types are strings, numbers, null, and objects that implement a __toString() method.
     *
     * @param mixed $content Content that can be cast to string.
     *
     * @return $this
     * @throws ArgumentTypeException
     */
    public function appendContent($content)
    {
    }
    protected function checkContent($content)
    {
    }
    /**
     * Returns content of response.
     *
     * @return string
     */
    public function getContent()
    {
    }
    /**
     * Sends content to the output.
     *
     * @return void
     */
    public function send()
    {
    }
    protected function writeBody($text)
    {
    }
}