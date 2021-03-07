<?php

namespace Bitrix\Landing\Subtype;

class Menu
{
    /**
     * Prepare manifest.
     * @param array $manifest Block's manifest.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param array $params Additional params.
     * @return array
     */
    public static function prepareManifest(array $manifest, \Bitrix\Landing\Block $block = null, array $params = []) : array
    {
    }
    /**
     * Redraws current block - add pages structure in this menu.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @return void
     */
    public static function redrawStructureMenu(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Gets catalog items for menu.
     * @param int $siteId Site id.
     * @param int $count Elements count.
     * @return array
     */
    protected static function getCatalogMenu($siteId, $count)
    {
    }
    /**
     * Get personal menu.
     * @return array
     */
    protected static function getPersonalMenu()
    {
    }
}