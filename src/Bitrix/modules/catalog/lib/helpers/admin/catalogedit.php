<?php

namespace Bitrix\Catalog\Helpers\Admin;

class CatalogEdit
{
    const CATALOG_ACTION_ADD = 'add';
    const CATALOG_ACTION_UPDATE = 'update';
    const CATALOG_ACTION_DELETE = 'delete';
    const IBLOCK_ACTION_FILL_PRODUCT = 0x1;
    protected $iblockId = 0;
    protected $iblockData = array();
    protected $iblockCatalogData = array();
    protected $simpleIblock = true;
    protected $parentIblock = false;
    protected $offerIblock = false;
    protected $catalogIblock = false;
    protected $enableRecurring = null;
    protected $updateData = array();
    protected $catalogTableActions = array();
    protected $iblockActions = array();
    protected $errors = array();
    protected static $siteListSeparator = '|';
    /**
     * @param int $iblockId				Iblock ID.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Return current status.
     *
     * @return bool
     */
    public function isSuccess()
    {
    }
    /**
     * Return current errors.
     *
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Clear current errors.
     *
     * @return void
     */
    public function clearErrors()
    {
    }
    /**
     * Return sale recurring feature state.
     *
     * @return bool
     */
    public function isEnableRecurring()
    {
    }
    /**
     * Load iblock data.
     *
     * @return void
     * @throws Main\ArgumentException
     */
    public function loadIblock()
    {
    }
    /**
     * Load catalog data from database.
     *
     * @return void
     */
    public function loadCatalog()
    {
    }
    /**
     * Return iblock data.
     *
     * @return array
     */
    public function getIblock()
    {
    }
    /**
     * Return catalog data.
     *
     * @return array
     */
    public function getCatalog()
    {
    }
    /**
     * Save new catalog data.
     *
     * @param array $catalogData			Post form params.
     * @return void
     */
    public function saveCatalog($catalogData)
    {
    }
    /**
     * Check catalog data before update.
     *
     * @param array $catalogData			Post form params.
     * @return void
     */
    public function prepareCatalogData($catalogData)
    {
    }
    /**
     * Return iblock site list in string format.
     *
     * @param array $siteList			Iblock site list.
     * @param bool $sorted				Site list already sorted.
     * @return string
     */
    protected static function getSiteListString($siteList, $sorted = false)
    {
    }
    /**
     * Load iblock data from database.
     *
     * @param int $iblockId				Iblock id.
     * @return array|bool|false
     * @throws Main\ArgumentException
     */
    protected static function loadIblockFromDatabase($iblockId)
    {
    }
    /**
     * Load iblock sites from database.
     *
     * @param int $iblockId				Iblock id.
     * @return array
     * @throws Main\ArgumentException
     */
    protected static function loadIblockSitesFromDatabase($iblockId)
    {
    }
    /**
     * Return is iblock not use in catalog module.
     *
     * @param bool|array $iblockCatalog		Catalog data.
     * @return bool
     */
    protected static function isSimpleIblock($iblockCatalog)
    {
    }
    /**
     * Return is iblock - catalog.
     *
     * @param array $iblockCatalog		Catalog data.
     * @return bool
     */
    protected static function isCatalogIblock($iblockCatalog)
    {
    }
    /**
     * Return is iblock use sku.
     *
     * @param array $iblockCatalog		Catalog data.
     * @return bool
     */
    protected static function isParentIblock($iblockCatalog)
    {
    }
    /**
     * Return is sku iblock.
     *
     * @param array $iblockCatalog		Catalog data.
     * @return bool
     */
    protected static function isOfferIblock($iblockCatalog)
    {
    }
    /**
     * Init catalog data for update.
     *
     * @return void
     */
    protected function initUpdateData()
    {
    }
    /**
     * Get sku property.
     *
     * @param int $parentiblockId		Product iblock Id.
     * @param int $offerIblockId		Offer iblock id.
     * @return int
     */
    protected function createSkuProperty($parentiblockId, $offerIblockId)
    {
    }
}