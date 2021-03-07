<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Api;

/**
 * Class ApiHelper - formatted and run requests to VK Api. Provide utility functions for help.
 * @package Bitrix\Sale\TradingPlatform\Vk\Api
 */
class ApiHelper
{
    private $vk;
    private $api;
    private $executer;
    private $exportId;
    private $logger;
    /**
     * ApiHelper constructor.
     * @param $exportId - int, ID of export profile
     */
    public function __construct($exportId)
    {
    }
    /**
     * Extract specified elements from array. Need to decrease of array size to post
     *
     * @param array $data - source array
     * @param array $keys - array of keys, thst needed in new array
     * @return array - array of extracted items
     */
    public static function extractItemsFromArray($data = array(), $keys = array())
    {
    }
    /**
     * Merge to arrays by reference key
     *
     * @param array $data
     * @param array $result
     * @param $referenceKey - main key in both arrays
     * @return array
     */
    public static function addResultToData($data = array(), $result = array(), $referenceKey)
    {
    }
    /**
     * Reformat array - change main (top level) key.
     *
     * @param array $data
     * @param $mainKey
     * @param string $keyRename - if isset, new main key will be rename
     * @return array
     */
    public static function changeArrayMainKey($data = array(), $mainKey, $keyRename = '')
    {
    }
    /**
     * Check photo size, get upload server, upload photo and save them
     * @deprecated use PhotoUploader class
     *
     * @param $data
     * @param $vkGroupId
     * @param $uploadType - type of photo. For other types used other params and methods
     * @param null $timer - timer for control time of upload
     * @return array - array of save photos results
     * @throws SystemException
     */
    public function uploadPhotos($data, $vkGroupId, $uploadType, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL)
    {
    }
    /**
     * Formatted params and run http-upload process
     * @deprecated use PhotoUploader class
     *
     * @param $data
     * @param $uploadServer
     * @param $uploadType
     * @param null $timer
     * @return bool|string
     * @throws SystemException
     * @throws TimeIsOverException
     */
    private function uploadPhotoHttp($data, $uploadServer, $uploadType, \Bitrix\Sale\TradingPlatform\Timer $timer = NULL)
    {
    }
    /**
     * Build params for http photo upload
     *
     * @deprecated use PhotoUploader class
     * @param $photoId
     * @return array
     */
    private static function setUploadServerMainPhotoParams($photoId)
    {
    }
    /**
     * Execute http requst
     *
     * @param $uploadServer
     * @param $params
     * @return bool|string - result of http request
     * @throws TimeIsOverException
     */
    private function uploadHttp($uploadServer, $params)
    {
    }
    public function getUserGroupsSelector($selectedValue = null, $name = null, $id = null)
    {
    }
    private function getUserGroups($offset = null)
    {
    }
    /**
     * Get list of VK albums from VK API
     *
     * @param $vkGroupId
     * @param bool $flip
     * @return array - list of VK albums
     */
    public function getALbumsFromVk($vkGroupId, $flip = true)
    {
    }
    /**
     * Get list of VK products from VK API
     *
     * @param $vkGroupId
     * @return array -  list of VK products
     */
    public function getProductsFromVk($vkGroupId)
    {
    }
    /**
     * Check params for save products data.
     * Check photos, description, vk-category
     *
     * @param $data
     * @return array - prepared to save data array
     */
    public static function prepareProductsDataToVk($data)
    {
    }
    /**
     * Get list of VK product categories from VK API
     *
     * @param int $count
     * @param int $offset
     * @return array - Get list of VK product categories. Return false if error
     */
    public function getVkCategories($count = \Bitrix\Sale\TradingPlatform\Vk\Vk::MAX_VK_CATEGORIES, $offset = 0)
    {
    }
}