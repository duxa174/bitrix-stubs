<?php

namespace Bitrix\Landing\PublicAction;

class Demos
{
    /**
     * Return true, if item of data is suitable by filter.
     * @param array $item One data element.
     * @param array $filter Filter for separate allowed items.
     * @return bool
     */
    protected static function isItemSuitable(array $item, array $filter = [])
    {
    }
    /**
     * Get demo items from files in component.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param bool $page If true, list of pages, not site.
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    protected static function getFilesList($type, $page = false, array $filter = [])
    {
    }
    /**
     * Get demo sites.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    public static function getSiteList($type, array $filter = [])
    {
    }
    /**
     * Get demo pages.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    public static function getPageList($type, array $filter = [])
    {
    }
    /**
     * Get preview of url by code.
     * @param string $code Code of page.
     * @param string $type Code of content.
     * @return PublicActionResult
     */
    public static function getUrlPreview($code, $type)
    {
    }
    /**
     * Register new demo template (site [and pages]).
     * @param array $data Full data from \Bitrix\Landing\Site::fullExport.
     * @param array $params Additional params.
     * @see \Bitrix\Landing\Site::fullExport
     * @return PublicActionResult
     */
    public static function register(array $data = array(), array $params = array())
    {
    }
    /**
     * Unregister demo template.
     * @param string $code Code of item.
     * @return PublicActionResult
     */
    public static function unregister($code)
    {
    }
    /**
     * Get items of current app.
     * @param array $params Params ORM array.
     * @return PublicActionResult
     */
    public static function getList(array $params = array())
    {
    }
}