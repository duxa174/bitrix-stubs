<?php

namespace Bitrix\Rest\Preset;

/**
 * Class Provider
 * @package Bitrix\Rest\Preset
 */
class Provider
{
    public const URI_METHOD_INFO = 'https://util.bitrixsoft.com/example_b24/redirect.php';
    public const URI_EXAMPLE_DOWNLOAD = 'https://util.bitrixsoft.com/example_b24/';
    public const APP_MODE_SERVER = 'SERVER';
    public const APP_MODE_ZIP = 'ZIP';
    /**
     * @param $id
     *
     * @return array
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function deleteIntegration($id)
    {
    }
    /**
     * @param $id
     *
     * @return array
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function getIntegration($id)
    {
    }
    /**
     * @param $requestData
     * @param string $elementCode
     * @param int $id
     *
     * @return array
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function saveIntegration($requestData, $elementCode = '', $id = 0)
    {
    }
    private static function saveApp($data)
    {
    }
    private static function getWebHook($scopeList = [], $id = 0, $title = '')
    {
    }
    private static function deleteWebHook($id)
    {
    }
}