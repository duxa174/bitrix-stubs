<?php

namespace Bitrix\Scale;

/**
 * Class Monitoring
 * @package Bitrix\Scale
 */
class Monitoring
{
    protected static $rrdPath = "/var/lib/munin";
    protected static $monitoringCategories = array();
    /**
     * Checks if database files are created
     * @return bool
     */
    public static function isDatabaseCreated($hostname)
    {
    }
    /**
     * Checks if monitoring is enabled
     * @return bool
     */
    public static function isEnabled()
    {
    }
    /**
     * Returns value for server role loadbar (thermometr)
     * @param $hostname
     * @param $roleId
     * @return bool|float
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Exception
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getLoadBarValue($hostname, $roleId)
    {
    }
    public static function getInfoTableCategory($hostname, $categoryId)
    {
    }
    public static function getInfoTableCategoriesList($hostname)
    {
    }
    public static function getValue($hostname, $categoryId, $param)
    {
    }
    protected static function getItemValue($hostname, $categoryId, $item, $param)
    {
    }
    protected static function extractRrdValue($data)
    {
    }
    protected static function getAnsibleSetup($hostname)
    {
    }
    protected static function getHddsParams($hostname)
    {
    }
    protected static function getHddsUsed($hostname, $param)
    {
    }
    protected static function getHddsValues($hostname, $param)
    {
    }
    protected static function getNetParams($hostname)
    {
    }
    protected static function getHddsUtilization($hostname)
    {
    }
    /**
     * @param float $size
     * @param int $precision
     * @return string
     */
    public static function formatSize($size, $precision = 2)
    {
    }
    protected static function getMemoryUsage($hostname)
    {
    }
    protected static function getMemoryUsageValue($hostname)
    {
    }
}