<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Api;

/**
 * Class Api
 * Work with VK API through http requsts
 * @package Bitrix\Sale\TradingPlatform\Vk\Api
 */
class PhotoUploader
{
    private $exportId;
    private $vk;
    private $api;
    private $logger;
    private $type;
    private $timer;
    private $vkGroupId;
    private $params = [];
    const TYPE_PRODUCT_MAIN_PHOTO = 'PRODUCT_MAIN_PHOTO';
    const TYPE_PRODUCT_PHOTOS = 'PRODUCT_PHOTOS';
    const TYPE_ALBUM_PHOTO = 'ALBUM_PHOTO';
    public function __construct($exportId, $photoType, \Bitrix\Sale\TradingPlatform\Timer $timer = null)
    {
    }
    /**
     * Save params for different upload types
     * Like a fabric, but no )
     */
    protected function initByType()
    {
    }
    /**
     * Check photo size, get upload server, upload photo and save them
     *
     * @param $data
     * @return array - array of save photos results
     * @throws SystemException
     */
    public function upload($data)
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
    private function uploadHttp($data, $uploadServer)
    {
    }
    /**
     * Save photo after http upload
     *
     * @param $uploadResult - array of http upload result
     */
    private function savePhoto($uploadResult)
    {
    }
    /**
     * When loaded product main photo need additional params
     *
     * @param $photoId
     * @return array
     */
    private static function setUploadServerMainPhotoParams($photoId)
    {
    }
}