<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Owerwrite system image resize method, because we need increase image
 *
 * Class PhotoResizer
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class PhotoResizer
{
    const RESIZE_NO = 0;
    const RESIZE_UP = 10;
    const RESIZE_UP_CROP = 20;
    const RESIZE_DOWN = 30;
    const RESIZE_DOWN_CROP = 40;
    /**
     * Return picture URL by picture src
     *
     * @param $src
     * @param string $domain - old param. May be empty
     * @return string
     */
    protected function buildPictureUrl($src, $domain = '')
    {
    }
    public static function sortPhotoArray($photos, $type)
    {
    }
    /**
     * Check photo sizes by type of converter
     *
     * @param $photos - array of photo IDs, ore one photo ID
     * @param $type
     * @return array - only photos with satisfy of requirements.
     */
    public static function checkPhotos($photos, $type)
    {
    }
    /**
     * Check sizes and filesize of one photo.
     * Return only check passed photos
     *
     * @param $photoId
     * @param $sizesLimits
     * @return mixed
     */
    private function checkPhoto($photoId, $sizesLimits)
    {
    }
    /**
     * Overwrite system ResizeImageGet. Need for increase images
     *
     * @param $file
     * @param $arSize
     * @param int $resizeType
     * @param bool $bInitSizes
     * @param bool $arFilters
     * @param bool $bImmediate
     * @param bool $jpgQuality
     * @return bool|mixed
     */
    public static function ResizeImageGet($file, $arSize, $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL, $bInitSizes = false, $arFilters = false, $bImmediate = false, $jpgQuality = false)
    {
    }
    /**
     * Overwrite system ResizeImageFile. Need for increase images
     *
     * @param $sourceFile
     * @param $destinationFile
     * @param $arSize
     * @param int $resizeType
     * @param array $arWaterMark
     * @param bool $jpgQuality
     * @param bool $arFilters
     * @return bool
     */
    private static function ResizeImageFile($sourceFile, &$destinationFile, $arSize, $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL, $arWaterMark = array(), $jpgQuality = false, $arFilters = false)
    {
    }
    /**
     * Overwrite system ScaleImage. Need for increase images
     *
     * @param $sourceImageWidth
     * @param $sourceImageHeight
     * @param $arSize
     * @param $resizeType
     * @param $bNeedCreatePicture
     * @param $arSourceSize
     * @param $arDestinationSize
     */
    private static function ScaleImage($sourceImageWidth, $sourceImageHeight, $arSize, $resizeType, &$bNeedCreatePicture, &$arSourceSize, &$arDestinationSize)
    {
    }
}