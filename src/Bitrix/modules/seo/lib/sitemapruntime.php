<?php

namespace Bitrix\Seo;

/**
 * Temporary data structure
 * Class SitemapRuntimeTable
 * @package Bitrix\Seo
 */
class SitemapRuntimeTable extends \Bitrix\Main\Entity\DataManager
{
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    const ITEM_TYPE_DIR = 'D';
    const ITEM_TYPE_FILE = 'F';
    const ITEM_TYPE_IBLOCK = 'I';
    const ITEM_TYPE_SECTION = 'S';
    const ITEM_TYPE_ELEMENT = 'E';
    const ITEM_TYPE_FORUM = 'G';
    const ITEM_TYPE_TOPIC = 'T';
    const PROCESSED = 'Y';
    const UNPROCESSED = 'N';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function clearByPid($PID)
    {
    }
}
class SitemapRuntime extends \Bitrix\Seo\SitemapFile
{
    const PROGRESS_WIDTH = 500;
    protected $PID = 0;
    private $originalFile = NULL;
    public function __construct($PID, $fileName, $arSettings)
    {
    }
    /**
     * Recreate file with same settings to new part
     *
     * @param string $fileName
     */
    protected function reInit($fileName)
    {
    }
    public function putSitemapContent(\Bitrix\Seo\SitemapFile $sitemapFile)
    {
    }
    public function setOriginalFile(\Bitrix\Seo\SitemapFile $sitemapFile)
    {
    }
    /**
     * Overwrite parent method to creating temp-files and correctly work with multipart
     * Appends new IBlock entry to the existing finished sitemap
     *
     * @param string $url IBlock entry URL.
     * @param string $modifiedDate IBlock entry modify timestamp.
     *
     * @return void
     */
    public function appendIBlockEntry($url, $modifiedDate)
    {
    }
    /**
     * Rename runtime file to original name. If runtime have part - rename them all
     */
    public function finish()
    {
    }
    protected function getPrefix()
    {
    }
    public static function showProgress($text, $title, $v)
    {
    }
}