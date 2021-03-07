<?php

namespace Bitrix\Landing\Subtype;

class Search
{
    /**
     * Returns search result page in block's site.
     * @param int $siteId Site id.
     * @param mixed $tplCode Landing template code.
     * @return int
     */
    public static function getSearchResultPage($siteId, $tplCode)
    {
    }
    /**
     * Prepares manifest only for search forms.
     * @param array $manifest Block's manifest.
     * @param array $params Additional params.
     * @return array Manifest.
     */
    protected static function prepareForm(array $manifest, array $params = [])
    {
    }
    /**
     * Prepares manifest.
     * @param array $manifest Block's manifest.
     * @param Block $block Block instance.
     * @param array $params Additional params.
     * @return array Manifest.
     */
    public static function prepareManifest(array $manifest, \Bitrix\Landing\Block $block = null, array $params = [])
    {
    }
}