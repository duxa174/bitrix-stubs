<?php

namespace Bitrix\Main;

class XmlWriter
{
    private $file = '';
    private $charset = '';
    private $tab = 0;
    private $f = null;
    private $lowercaseTag = false;
    private $errors = array();
    /**
     * Constructor.
     * @param array $params Array of settings.
     */
    public function __construct(array $params)
    {
    }
    /**
     * Prepare tag for write.
     * @param string $tag Code of tag.
     * @return string
     */
    private function prepareTag($tag)
    {
    }
    /**
     * Prepare value for write.
     * @param string $value Value.
     * @return string
     */
    private function prepareValue($value)
    {
    }
    /**
     * Write begin tag to file.
     * @param string $code Code of tag.
     * @return void
     */
    public function writeBeginTag($code)
    {
    }
    /**
     * Write end tag to file.
     * @param string $code Code of tag.
     * @return void
     */
    public function writeEndTag($code)
    {
    }
    /**
     * Write full tag to file.
     * @param string $code Code of tag.
     * @param string $value Code for tag.
     * @return void
     */
    public function writeFullTag($code, $value)
    {
    }
    /**
     * Add one more error.
     * @param mixed $message Text of error.
     * @param mixed $code Code of error.
     * @return void
     */
    private function addError($message, $code)
    {
    }
    /**
     * Return errors if exists.
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Open file for write, start write xml.
     * @return void
     */
    public function openFile()
    {
    }
    /**
     * Close the open file.
     * @return void
     */
    public function closeFile()
    {
    }
    /**
     * Write one chunk in xml file.
     * @param array $item Data for write.
     * @param string $wrapperTag If != '' wrapper the array in this tag.
     * @return void
     */
    public function writeItem(array $item, $wrapperTag = '')
    {
    }
}