<?php

namespace Bitrix\Catalog\Ebay;

class ExportOffer implements \Iterator
{
    /*Constructor input vars*/
    protected $iBlockId;
    protected $xmlData;
    /*Counted by constructor vars*/
    protected $bAllSections;
    protected $arSections = array();
    protected $arIblock;
    protected $startPosition = null;
    protected $includeSubsections = true;
    protected $intMaxSectionID = 0;
    protected $arSectionIDs = array();
    /*Iterator vars*/
    protected $currentKey = 0;
    protected $currentRecord = array();
    /*other vars*/
    protected $cnt = 0;
    /** @var null|\CIBlockResult $dbItems */
    protected $dbItems = NULL;
    protected $catalogType;
    protected $onlyAvailableElements = false;
    // export with flag "available"
    public function __construct($catalogType, $params)
    {
    }
    /*Iterator methods*/
    /**
     * Return the current element.
     *
     * @return array
     */
    public function current()
    {
    }
    /**
     * Return the key of the current element.
     *
     * @return int
     */
    public function key()
    {
    }
    /**
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
    }
    /**
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @return bool
     */
    public function valid()
    {
    }
    protected function createDbResObject()
    {
    }
    protected function getMaxSectionId(array $arAvailGroups)
    {
    }
    protected function getAvailGroups()
    {
    }
    protected function getSections($selectedGroups)
    {
    }
    protected function getIblockProps($serverName)
    {
    }
    protected function getQuantity($productId)
    {
    }
    /**
     * Return ruble currency code.
     *
     * @return string
     */
    public static function getRub()
    {
    }
    /**
     * Change setting "export only available elements".
     *
     * @param bool $flag
     */
    public function setOnlyAvailableFlag($flag)
    {
    }
    protected function getPrices($productId, $siteId)
    {
    }
    protected function getDetailPageUrl($detailPageUrl)
    {
    }
    protected function getPictureUrl($pictNo)
    {
    }
    protected function getParams($product, $arIblock)
    {
    }
    protected function getValue($arOffer, $param, $PROPERTY, $arProperties, $arUserTypeFormat)
    {
    }
    protected function getCategories($productId)
    {
    }
    protected function getSectionIDs(array $availGroups)
    {
    }
    protected function checkDiscountCache()
    {
    }
    protected function nextItem()
    {
    }
}