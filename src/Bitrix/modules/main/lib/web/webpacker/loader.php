<?php

namespace Bitrix\Main\Web\WebPacker;

/**
 * Class Loader
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class Loader
{
    /** @var Output\File */
    protected $file;
    protected $cacheTtl = 60;
    protected $skipMoving = false;
    protected $tagAttributes = [];
    /**
     * Loader constructor.
     *
     * @param Output\File $file File output instance.
     */
    public function __construct(\Bitrix\Main\Web\WebPacker\Output\File $file)
    {
    }
    /**
     * Set cache ttl.
     *
     * @param int $cacheTtl Ttl in seconds.
     * @return $this
     */
    public function setCacheTtl($cacheTtl)
    {
    }
    /**
     * Set skip moving.
     *
     * @param bool $skip Skip moving.
     * @return $this
     */
    public function setSkipMoving($skip)
    {
    }
    /**
     * Set tag attributes.
     *
     * @param array $tagAttributes Tag attributes.
     * @return $this
     */
    public function setTagAttributes(array $tagAttributes = [])
    {
    }
    /**
     * Return loader file url.
     *
     * @return string
     */
    public function getFileUrl()
    {
    }
    /**
     * Return loader string.
     *
     * @return string
     */
    public function getString()
    {
    }
    /**
     * Return loader js string.
     *
     * @return string
     */
    public function getStringJs()
    {
    }
}