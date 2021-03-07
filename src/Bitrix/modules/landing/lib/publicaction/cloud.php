<?php

namespace Bitrix\Landing\PublicAction;

class Cloud
{
    /**
     * Get blocks from repository.
     * @return PublicActionResult
     */
    public static function getRepository()
    {
    }
    /**
     * Returns demo sites or pages.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param bool $isPage Returns templates for page section or not.
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    protected static function getDemoItemList(string $type, bool $isPage, array $filter = []) : \Bitrix\Landing\PublicActionResult
    {
    }
    /**
     * Returns demo sites.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    public static function getDemoSiteList(string $type, array $filter = []) : \Bitrix\Landing\PublicActionResult
    {
    }
    /**
     * Returns demo pages.
     * @param string $type Type of demo-template (page, store, etc...).
     * @param array $filter Additional filter.
     * @return PublicActionResult
     */
    public static function getDemoPageList(string $type, array $filter = []) : \Bitrix\Landing\PublicActionResult
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
     * Returns template items for the application.
     * @param string $appCode Application code.
     * @return PublicActionResult
     */
    public static function getAppItems(string $appCode) : \Bitrix\Landing\PublicActionResult
    {
    }
    /**
     * Returns single item manifest.
     * @param int $id Application item id.
     * @return PublicActionResult
     */
    public static function getAppItemManifest(int $id) : \Bitrix\Landing\PublicActionResult
    {
    }
}