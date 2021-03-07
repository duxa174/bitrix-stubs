<?php

namespace Bitrix\Main\UrlPreview\Parser;

class Common extends \Bitrix\Main\UrlPreview\Parser
{
    const MIN_IMAGE_HEIGHT = 100;
    const MIN_IMAGE_WIDTH = 100;
    /** @var array img elements, discovered in the document */
    protected $imgElements = array();
    /**
     * Parses HTML document's meta tags, and fills document's metadata.
     *
     * @param HtmlDocument $document HTML document to scan for metadata.
     * @return void
     */
    public function handle(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * @param HtmlDocument $document HTML document to scan for title.
     * @return string
     */
    protected function getTitle(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * @param HtmlDocument $document
     * @return string
     */
    protected function getImage(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * Iterates through img elements, and return array of urls of images, which size is greater then 100pxx100px
     * @return array
     */
    protected function getImageCandidates()
    {
    }
    /**
     * Returns size of the img element
     * @param array $imageAttributes Array of the attributes of the img tag.
     * @return array Returns array with keys width and height.
     */
    protected function getImageDimensions(array $imageAttributes)
    {
    }
    /**
     * Parse one <video> tag and try to get valid information off it.
     *
     * @param string $html - one <video> from the document.
     * @return array
     */
    protected function getVideoInfo($html = '')
    {
    }
    /**
     * Returns true if $type is a valid video mime-type.
     *
     * @param string $type
     * @return bool
     */
    protected function isValidVideoMimeType($type = '')
    {
    }
}