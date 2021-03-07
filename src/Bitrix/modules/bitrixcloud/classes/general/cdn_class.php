<?php

class CBitrixCloudCDNClass
{
    private $name = "";
    private $extensions = array();
    /**
     *
     * @return string
     *
     */
    public function getName()
    {
    }
    /**
     *
     * @return array[int]string
     *
     */
    public function getExtensions()
    {
    }
    /**
     *
     * @param array[int]string $extensions
     * @return CBitrixCloudCDNClass
     *
     */
    public function setExtensions($extensions)
    {
    }
    /**
     *
     * @param string $name
     * @param array[int]string $extensions
     * @return void
     */
    public function __construct($name, $extensions)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudCDNClass
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
}
class CBitrixCloudCDNClasses
{
    private $classes = array();
    /**
     *
     * @param CBitrixCloudCDNClass $file_class
     * @return CBitrixCloudCDNClasses
     *
     */
    public function addClass(\CBitrixCloudCDNClass $file_class)
    {
    }
    /**
     *
     * @param string $class_name
     * @return CBitrixCloudCDNClass
     *
     */
    public function getClass($class_name)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudCDNClasses
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNClasses
     *
     */
    public static function fromOption(\CBitrixCloudOption $option)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNClasses
     *
     */
    public function saveOption(\CBitrixCloudOption $option)
    {
    }
}