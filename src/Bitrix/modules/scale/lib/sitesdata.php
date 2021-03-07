<?php

namespace Bitrix\Scale;

/**
 * Class SitesData
 * @package Bitrix\Scale *
 */
class SitesData
{
    /**
     * @param $siteName
     * @return array site's param
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getSite($siteName, $dbName = false)
    {
    }
    /**
     * @return string
     */
    public static function getKernelSite()
    {
    }
    /**
     * @return array
     */
    public static function getKernelsList()
    {
    }
    /**
     * @return string
     */
    public static function getKernelRoot()
    {
    }
    /**
     * @param string $dbName
     * @return array List of all sites & their params
     */
    public static function getList($dbName = false)
    {
    }
}