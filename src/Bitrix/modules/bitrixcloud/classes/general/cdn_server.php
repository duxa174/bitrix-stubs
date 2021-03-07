<?php

class CBitrixCloudCDNServerGroup
{
    private $name = "";
    private $servers = array();
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
    public function getServers()
    {
    }
    /**
     *
     * @param array[int]string $servers
     * @return CBitrixCloudCDNServerGroup
     *
     */
    public function setServers($servers)
    {
    }
    /**
     *
     * @param string $name
     * @param array[int]string $servers
     * @return void
     *
     */
    public function __construct($name, $servers)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudCDNServerGroup
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
}
class CBitrixCloudCDNServerGroups
{
    /** @var array[string]CBitrixCloudCDNServerGroup $groups */
    private $groups = array();
    /**
     *
     * @param CBitrixCloudCDNServerGroup $group
     * @return CBitrixCloudCDNServerGroups
     *
     */
    public function addGroup(\CBitrixCloudCDNServerGroup $group)
    {
    }
    /**
     *
     * @param string $group_name
     * @return CBitrixCloudCDNServerGroup
     *
     */
    public function getGroup($group_name)
    {
    }
    /**
     *
     * @param CDataXMLNode $node
     * @return CBitrixCloudCDNServerGroups
     *
     */
    public static function fromXMLNode(\CDataXMLNode $node)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNServerGroups
     *
     */
    public static function fromOption(\CBitrixCloudOption $option)
    {
    }
    /**
     *
     * @param CBitrixCloudOption $option
     * @return CBitrixCloudCDNServerGroups
     *
     */
    public function saveOption(\CBitrixCloudOption $option)
    {
    }
}