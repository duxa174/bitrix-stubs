<?php

namespace Bitrix\Main\PhoneNumber\Tools;

abstract class XmlParser
{
    /** @var XmlField[] */
    protected $attributesMapping = array();
    protected $properties = array();
    public function __construct()
    {
    }
    /**
     * @param \XMLReader $xmlReader
     * @param string $path
     * @return array
     */
    public function parseElement(\XMLReader $xmlReader, $path)
    {
    }
    protected function init()
    {
    }
    /**
     * @param \XMLReader $xmlReader
     * @param string $parentPath XPath to the element.
     */
    protected function walkDomTree(\XMLReader $xmlReader, $parentPath)
    {
    }
    protected function parseAttributes(\XMLReader $xmlReader, $parentPath)
    {
    }
    /**
     * @param $path
     * @return XmlField;
     */
    protected function getField($path)
    {
    }
    protected function getElementValue(\XMLReader $xmlReader, $path, \Bitrix\Main\PhoneNumber\Tools\XmlField $field)
    {
    }
    /**
     * Function should return array
     * @return XmlField[]
     */
    public abstract function getMap();
}