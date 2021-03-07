<?php

namespace Bitrix\Main\Engine\Response;

class ResizedImage extends \Bitrix\Main\Engine\Response\BFile
{
    protected $showInline = true;
    protected $width;
    protected $height;
    protected $resizeType = BX_RESIZE_IMAGE_EXACT;
    protected $filters;
    public function __construct(array $file, $width, $height, $name = null)
    {
    }
    public static function createByImageId($imageId, $width, $height, $name = null)
    {
    }
    public static function createByImageData(array $imageData, $width, $height, $name = null)
    {
    }
    /**
     * @return mixed
     */
    public function getWidth()
    {
    }
    /**
     * @param mixed $width
     *
     * @return ResizedImage
     */
    public function setWidth($width)
    {
    }
    /**
     * @return mixed
     */
    public function getHeight()
    {
    }
    /**
     * @param mixed $height
     *
     * @return ResizedImage
     */
    public function setHeight($height)
    {
    }
    /**
     * @return int
     */
    public function getResizeType()
    {
    }
    /**
     * @param int $resizeType
     *
     * @return ResizedImage
     */
    public function setResizeType($resizeType)
    {
    }
    /**
     * @return mixed
     */
    public function getFilters()
    {
    }
    /**
     * @param mixed $filters
     *
     * @return ResizedImage
     */
    public function setFilters($filters)
    {
    }
    /**
     * @return array
     */
    public function getImage()
    {
    }
    protected function prepareFile()
    {
    }
}