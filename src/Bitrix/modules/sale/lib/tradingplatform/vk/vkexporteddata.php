<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class VkExportedData
 * Short-time cqche of exported vk-albums or products.
 * Need for accelerate, because this data requested all step and waste more time.
 *
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class VkExportedData
{
    const CACHE_DIR = '/sale/vkexport/';
    const CACHE_TTL = 3600;
    // one hour, for update during long export
    const CACHE_ID_PREFIX = "vkexporteddata_cache";
    private $exportId;
    private $type;
    private $cacheId;
    /**
     * VkExportedData constructor.
     * @param $exportId - int, ID of export profile
     * @param $type - string of export type
     */
    public function __construct($exportId, $type)
    {
    }
    /**
     * Get data from cache or load them from VK
     *
     * @return array|bool|mixed|null - data
     */
    public function getData()
    {
    }
    /**
     * Clean cache
     * @return void
     */
    public function removeData()
    {
    }
    /**
     * Add data to saveed array
     *
     * @param $newData - array to special format
     * @return void
     */
    public function addData($newData)
    {
    }
    /**
     * Generate name for cache
     *
     * @return string
     */
    private function getCacheId()
    {
    }
    /**
     * Get Albums or Products data from VK for current export ID
     *
     * @return array|bool    - array of data or false in data is null or errors
     */
    private function getDataFromVk()
    {
    }
    /**
     * Get VK group ID for current export ID
     *
     * @return string -    export ID
     */
    private function getVkGroupId()
    {
    }
}