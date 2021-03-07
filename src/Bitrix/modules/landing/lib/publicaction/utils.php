<?php

namespace Bitrix\Landing\PublicAction;

class Utils
{
    /**
     * Entity type catalog.
     */
    const TYPE_CATALOG = 'catalog';
    /**
     * Entity type catalog element.
     */
    const TYPE_CATALOG_ELEMENT = 'element';
    /**
     * Entity type section.
     */
    const TYPE_CATALOG_SECTION = 'section';
    /**
     * Entity type any.
     */
    const TYPE_CATALOG_ALL = 'all';
    /**
     * Get meta-data by URL.
     * @param string $url Url.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getUrlPreview($url)
    {
    }
    /**
     * Search in the catalog.
     * @param null $query Query string.
     * @param string $type Search type.
     * @param int $iblock Iblock id optional.
     * @param int $siteId Site id optional.
     * @return PublicActionResult|\CIBlockResult|int
     */
    public static function catalogSearch($query = null, $type = self::TYPE_CATALOG_ALL, $iblock = null, $siteId = null)
    {
    }
    /**
     * Makes nav chain of catalog entity.
     * @param int $sectionId Section id.
     * @param array $chain Chain array.
     * @return void
     */
    protected static function makeCatalogEntityNavChain($sectionId, array &$chain)
    {
    }
    /**
     * Gets catalog element or section by id.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return array
     */
    protected static function getCatalogEntity($entityId, $entityType)
    {
    }
    /**
     * Gets catalog element by id.
     * @param int $elementId Element id.
     * @return PublicActionResult
     */
    public static function getCatalogElement($elementId)
    {
    }
    /**
     * Gets catalog section by id.
     * @param int $sectionId Section id.
     * @return PublicActionResult
     */
    public static function getCatalogSection($sectionId)
    {
    }
    /**
     * Build element/section url.
     * @param int $elementId Element / section id.
     * @param string $urlType Type of url (section / detail).
     * @return string
     */
    public static function getIblockURL($elementId, $urlType)
    {
    }
    /**
     * Check feature enabling by codes.
     * @param array $code Feature code.
     * @param array $params Additional params array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function checkMultiFeature(array $code, array $params = [])
    {
    }
    /**
     * Save some internal settings.
     * @param array $settings Settings array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function saveSettings(array $settings)
    {
    }
    /**
     * Check if it is boolean and true.
     * @param mixed $value Some value
     * @return bool
     */
    public static function isTrue($value)
    {
    }
}