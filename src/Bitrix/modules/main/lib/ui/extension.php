<?php

namespace Bitrix\Main\UI;

class Extension
{
    /**
     * Loads specified extension
     * @param $extNames
     * @throws \Bitrix\Main\LoaderException
     */
    public static function load($extNames)
    {
    }
    /**
     * @param $extName
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    public static function register($extName)
    {
    }
    /**
     * @param $id
     * @param array $options
     */
    public static function registerAssets($id, array $options)
    {
    }
    protected static function normalizeAssetPath($path, $extensionPath)
    {
    }
    /**
     * Gets extension config
     * @param $extName
     * @return array|mixed|null
     */
    public static function getConfig($extName)
    {
    }
    /**
     * @param $extName
     * @return array|bool|mixed|\SplFixedArray|string|null
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getBundleConfig($extName)
    {
    }
    private static function getPath($extName)
    {
    }
    /**
     * @param $extName
     * @return bool|string|null
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getHtml($extName)
    {
    }
    /**
     * @param $extName
     * @return array
     */
    public static function getAssets($extName)
    {
    }
    /**
     * @param $extName
     * @return array
     */
    public static function getDependencyList($extName)
    {
    }
    /**
     * @param $extName
     * @param array $option
     * @return array
     */
    public static function getResourceList($extName, $option = [])
    {
    }
    /**
     * @param $name
     * @param bool $storeConfig
     * @param bool $storeSelf
     * @param array $resultList
     * @param array $alreadyResolved
     * @return array
     */
    private static function getDependencyListRecursive($name, $storeConfig = false, $storeSelf = false, &$resultList = [], &$alreadyResolved = [])
    {
    }
    private static function getCoreConfigForDependencyList($name, $storeConfig = false, &$resultList = [], &$alreadyResolved = [])
    {
    }
}