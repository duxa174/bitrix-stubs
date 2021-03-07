<?php

namespace Bitrix\Seo;

/**
 * Generates index file from sitemap files list
 * Class SitemapIndex
 * @package Bitrix\Seo
 */
class SitemapIndex extends \Bitrix\Seo\SitemapFile
{
    const FILE_HEADER = '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    const FILE_FOOTER = '</sitemapindex>';
    const ENTRY_TPL = '<sitemap><loc>%s</loc><lastmod>%s</lastmod></sitemap>';
    public function createIndex($arIndex)
    {
    }
    public function appendIndexEntry($file)
    {
    }
}