<?php

namespace Bitrix\Main\Engine\Response;

class File extends \Bitrix\Main\HttpResponse
{
    protected $path;
    /**
     * @var null
     */
    protected $name;
    /**
     * @var string
     */
    protected $contentType;
    protected $showInline = false;
    protected $cacheTime = 0;
    public function __construct($path, $name = null, $contentType = 'application/octet-stream')
    {
    }
    /**
     * @return mixed
     */
    public function getPath()
    {
    }
    /**
     * @param mixed $path
     *
     * @return File
     */
    public function setPath($path)
    {
    }
    /**
     * @return null
     */
    public function getName()
    {
    }
    /**
     * @param null $name
     *
     * @return File
     */
    public function setName($name)
    {
    }
    /**
     * @return string
     */
    public function getContentType()
    {
    }
    /**
     * @param string $contentType
     *
     * @return File
     */
    public function setContentType($contentType)
    {
    }
    /**
     * @return bool
     */
    public function isShowInline()
    {
    }
    /**
     * @param bool $enabled
     *
     * @return File
     */
    public function showInline($enabled)
    {
    }
    /**
     * @return int
     */
    public function getCacheTime()
    {
    }
    /**
     * @param int $cacheTime
     *
     * @return File
     */
    public function setCacheTime($cacheTime)
    {
    }
    protected function prepareOptions()
    {
    }
    protected function prepareFile()
    {
    }
    public function send()
    {
    }
}