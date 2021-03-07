<?php

namespace Bitrix\B24Connector;

/**
 * Class Connection
 * @package Bitrix\B24Connector
 */
class Connection
{
    /**
     * @return bool|string
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getAppId()
    {
    }
    /**
     * Link site to Bitrix24.Network
     * Code borrowed from socialservices/options.php
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     *
     */
    private static function linkToNet()
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private static function isLinkedToNet()
    {
    }
    /**
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Exception
     */
    public static function delete()
    {
    }
    /**
     * @param string $title Button title
     * @return string Button HTML.
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getButtonHtml($title = '')
    {
    }
    /**
     * @param string $title Button title
     * @return string HTML for connect button.
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getOptionButtonHtml($title)
    {
    }
    /**
     * @return array Connection fields.
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getFields()
    {
    }
    /**
     * @return string Domain.
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getDomain()
    {
    }
    /**
     * Check if connection exists.
     * @return bool
     */
    public static function isExist()
    {
    }
    /**
     * @param $host
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getUrl($host)
    {
    }
    /**
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getUrlNet()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getHostsList()
    {
    }
    /**
     * @return string Url to edit open lines settings.
     */
    public static function getOpenLinesConfigUrl()
    {
    }
    /**
     * @return string Url to edit telephony settings.
     */
    public static function getTelephonyConfigUrl()
    {
    }
    /**
     * @return string Url to edit webform settings.
     */
    public static function getWebformConfigUrl()
    {
    }
    /**
     * @return string Url to edit widgets.
     */
    public static function getWidgetsConfigUrl()
    {
    }
    private static function getDataFromRest($method, $pathToData, $defaultPath = '')
    {
    }
}