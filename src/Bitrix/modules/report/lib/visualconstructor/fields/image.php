<?php

namespace Bitrix\Report\VisualConstructor\Fields;

/**
 * Class Image, render image
 * @package Bitrix\Report\VisualConstructor\Fields
 */
class Image extends \Bitrix\Report\VisualConstructor\Fields\Base
{
    const JS_EVENT_ON_CLICK = 'onClick';
    private $uri;
    /**
     * Image constructor.
     * @param string $sourceUri
     */
    public function __construct($sourceUri = '')
    {
    }
    /**
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return mixed
     */
    public function getUri()
    {
    }
    /**
     * @param mixed $uri Src of image.
     * @return void
     */
    public function setUri($uri)
    {
    }
}