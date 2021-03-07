<?php

namespace Bitrix\Seo;

/**
 * Base class for sitemapfile
 * Class SitemapFile
 * @package Bitrix\Seo
 */
class SitemapFile extends \Bitrix\Main\IO\File
{
    const XML_HEADER = '<?xml version="1.0" encoding="UTF-8"?>';
    const FILE_HEADER = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    const FILE_FOOTER = '</urlset>';
    const ENTRY_TPL = '<url><loc>%s</loc><lastmod>%s</lastmod></url>';
    const ENTRY_TPL_SEARCH = '<url><loc>%s</loc>';
    const XPATH_URL = '/urlset/url';
    const MAX_SIZE = 5000000;
    const FILE_EXT = '.xml';
    const FILE_PART_SUFFIX = '.part';
    protected $documentRoot;
    protected $settings = array();
    protected $parser = false;
    protected $siteRoot = '';
    protected $partFile = '';
    protected $partList = array();
    protected $part = 0;
    protected $partChanged = false;
    protected $footerClosed = false;
    protected $urlToSearch = '';
    protected $urlFound = false;
    public function __construct($fileName, $settings)
    {
    }
    protected function prepareFileName($fileName)
    {
    }
    /**
     * Reinitializes current object with new file name.
     *
     * @param string $fileName New file name.
     */
    protected function reInit($fileName)
    {
    }
    /**
     * Adds header to the current sitemap file.
     *
     * @return void
     */
    public function addHeader()
    {
    }
    /**
     * Checks is it needed to create new part of sitemap file
     *
     * @return bool
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    protected function isSplitNeeded()
    {
    }
    /**
     * Adds new entry to the current sitemap file
     *
     * Entry array keys
     * XML_LOC - loc field value
     * XML_LASTMOD - lastmod field value
     *
     * @param array $entry Entry array.
     *
     * @return void
     */
    public function addEntry($entry)
    {
    }
    /**
     * Creates next sitemap file part. Returns new part file name.
     *
     * @return string
     */
    public function split()
    {
    }
    /**
     * Returns list of file parts.
     *
     * @return array
     */
    public function getNameList()
    {
    }
    /**
     * Divide path to directory and filemname
     * @return array
     */
    public function getPathDirectory()
    {
    }
    /**
     * Returns if the whole sitemap is empty (not only current part).
     *
     * @return bool
     */
    public function isNotEmpty()
    {
    }
    /**
     * Returns if current sitemap part contains something besides header.
     *
     * @return bool
     */
    public function isCurrentPartNotEmpty()
    {
    }
    /**
     * Appends new entry to the existing and finished sitemap file
     *
     * Entry array keys
     * XML_LOC - loc field value
     * XML_LASTMOD - lastmod field value
     *
     * @param array $entry Entry array.
     *
     * @return void
     */
    public function appendEntry($entry)
    {
    }
    /**
     * Searches and removes entry to the existing and finished sitemap file
     *
     * Entry array keys
     * XML_LOC - loc field value
     * XML_LASTMOD - lastmod field value
     *
     * @param string $url Entry URL.
     *
     * @return string
     */
    public function removeEntry($url)
    {
    }
    /**
     * Adds new file entry to the current sitemap
     *
     * @param File $f File to add.
     *
     * @return void
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public function addFileEntry(\Bitrix\Main\IO\File $f)
    {
    }
    /**
     * Adds new IBlock entry to the current sitemap
     *
     * @param string $url IBlock entry URL.
     * @param string $modifiedDate IBlock entry modify timestamp.
     *
     * @return void
     */
    public function addIBlockEntry($url, $modifiedDate)
    {
    }
    /**
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
     * Adds footer to the current sitemap part
     *
     * @return void
     */
    public function addFooter()
    {
    }
    /**
     * Returns sitemap site root
     *
     * @return mixed|string
     */
    public function getSiteRoot()
    {
    }
    /**
     * Returns sitemap file URL
     *
     * @return string
     */
    public function getUrl()
    {
    }
    /**
     * Parses sitemap file
     *
     * @return bool|\CDataXML
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public function parse()
    {
    }
    /**
     * Returns file relative path for URL.
     *
     * @param File $f File object.
     *
     * @return string
     */
    protected function getFileUrl(\Bitrix\Main\IO\File $f)
    {
    }
}