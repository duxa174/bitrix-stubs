<?php

class CBitrixCloudCDNLocation
{
    private $name = "";
    private $proto = "";
    private $prefixes = array();
    /** @var array[int]CBitrixCloudCDNClass $classes */
    private $classes = array();
    /** @var array[int]CBitrixCloudCDNServerGroup $server_groups */
    private $server_groups = array();
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
     * @return string
     *
     */
    public function getProto()
    {
    }
    /**
     *
     * @return array[int]string
     *
     */
    public function getPrefixes()
    {
    }
    /**
     *
     * @param array[int]string $prefixes
     * @return CBitrixCloudCDNLocation
     *
     */
    public function setPrefixes($prefixes)
    {
    }
    /**
     *
     * @param string $name
     * @param string $proto
     * @param array[int]string $prefixes
     * @return void
     *
     */
    public function __construct($name, $proto, $prefixes)
    {
    }
    /**
     *
     * @return array[int]CBitrixCloudCDNClass
     *
     */
    public function getClasses()
    {
    }
    /**
     *
     * @return array[int]CBitrixCloudCDNServerGroup
     *
     */
    public function getServerGroups()
    {
    }
    /**
     *
     * @param CBitrixCloudCDNClass $file_class
     * @param CBitrixCloudCDNServerGroup $server_group
     * @return CBitrixCloudCDNLocation
     *
     */
    public function addService($file_class, $server_group)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @param CBitrixCloudCDNConfig $config
     * @return CBitrixCloudCDNLocation
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node, \CBitrixCloudCDNConfig $config)
    {
    }
    /**
     *
     * @param string $name
     * @param string $value
     * @param CBitrixCloudCDNConfig $config
     * @return CBitrixCloudCDNLocation
     *
     */
    public static function fromOptionValue($name, $value, \CBitrixCloudCDNConfig $config)
    {
    }
    /**
     *
     * @return string
     *
     */
    public function getOptionValue()
    {
    }
    /**
     *
     * @param string $p_prefix
     * @param string $p_extension
     * @param string $p_link
     * @return string
     *
     */
    public function getServerNameByPrefixAndExtension($p_prefix, $p_extension, $p_link)
    {
    }
}
class CBitrixCloudCDNLocations implements \Iterator
{
    private $locations = array();
    /**
     *
     * @param CBitrixCloudCDNLocation $location
     * @return CBitrixCloudCDNLocations
     *
     */
    public function addLocation(\CBitrixCloudCDNLocation $location)
    {
    }
    /**
     *
     * @param string $location_name
     * @return CBitrixCloudCDNLocation
     *
     */
    public function getLocationByName($location_name)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @param CBitrixCloudCDNConfig $config
     * @return CBitrixCloudCDNLocations
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node, \CBitrixCloudCDNConfig $config)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @param CBitrixCloudCDNConfig $config
     * @return CBitrixCloudCDNLocations
     *
     */
    public static function fromOption(\CBitrixCloudOption $option, \CBitrixCloudCDNConfig $config)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNLocations
     *
     */
    public function saveOption(\CBitrixCloudOption $option)
    {
    }
    function rewind()
    {
    }
    function current()
    {
    }
    function key()
    {
    }
    function next()
    {
    }
    function valid()
    {
    }
}