<?php

namespace Bitrix\Scale;

/**
 * Class ServersData
 * @package Bitrix\Scale *
 */
class ServersData
{
    protected static $bxInfo = array();
    //wrapper_ansible_conf -a bx_info -H hostname
    /**
     * @param $hostname
     * @return array Server's params
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getServer($hostname)
    {
    }
    /**
     * @return array List of servers & their params
     */
    public static function getList()
    {
    }
    /**
     * @param $hostname
     * @return array Server roles
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getServerRoles($hostname)
    {
    }
    public function getDbList($hostname)
    {
    }
    /**
     * @param string $hostname Server hostname.
     * @return array server Info.
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws ServerBxInfoException
     */
    protected static function getBxInfo($hostname)
    {
    }
    /**
     * @param string $hostname Server hostname.
     * @return bool|string - Version of bitrix environment.
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getBxEnvVer($hostname)
    {
    }
    public static function getGraphCategories($hostname)
    {
    }
    public static function getDbMasterHostname()
    {
    }
}