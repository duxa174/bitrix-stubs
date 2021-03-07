<?php

namespace Bitrix\Iblock\PropertyIndex;

class Storage
{
    protected $iblockId = 0;
    protected static $exists = array();
    const PRICE = 1;
    const DICTIONARY = 2;
    const STRING = 3;
    const NUMERIC = 4;
    const DATETIME = 5;
    /**
     * @param integer $iblockId Information block identifier.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Returns information block identifier.
     *
     * @return integer
     */
    public function getIblockId()
    {
    }
    /**
     * Internal method to get database table name for storing property index.
     *
     * @return string
     */
    public function getTableName()
    {
    }
    /**
     * Checks if property index exists in the database.
     * Returns true on success.
     *
     * @return boolean
     */
    public function isExists()
    {
    }
    /**
     * Creates new property values index for information block.
     * You have to be sure that index does not exists.
     *
     * @return void
     */
    public function create()
    {
    }
    /**
     * Deletes existing index from the database.
     * You have to check that index exists before calling this method.
     *
     * @return void
     */
    public function drop()
    {
    }
    /**
     * Returns maximum stored element identifier.
     *
     * @return int
     */
    public function getLastStoredElementId()
    {
    }
    /**
     * Adds new index entry.
     *
     * @param integer $sectionId Identifier of the element section.
     * @param integer $elementId Identifier of the element.
     * @param integer $facetId   Identifier of the property/price.
     * @param integer $value     Dictionary value or 0.
     * @param float   $valueNum  Value of an numeric property or price.
     * @param boolean $includeSubsections If section has parent or direct element connection.
     *
     * @return boolean
     */
    public function addIndexEntry($sectionId, $elementId, $facetId, $value, $valueNum, $includeSubsections)
    {
    }
    /**
     * Deletes all element entries from the index.
     *
     * @param integer $elementId Identifier of the element to be deleted.
     *
     * @return boolean
     */
    public function deleteIndexElement($elementId)
    {
    }
    /**
     * Converts iblock property identifier into internal storage facet identifier.
     *
     * @param integer $propertyId Property identifier.
     * @return integer
     */
    public static function propertyIdToFacetId($propertyId)
    {
    }
    /**
     * Converts catalog price identifier into internal storage facet identifier.
     *
     * @param integer $priceId Price identifier.
     * @return integer
     */
    public static function priceIdToFacetId($priceId)
    {
    }
    /**
     * Returns true if given identifier is catalog price one.
     *
     * @param integer $facetId Internal storage facet identifier.
     *
     * @return boolean
     */
    public static function isPriceId($facetId)
    {
    }
    /**
     * Returns true if given identifier is iblock property one.
     *
     * @param integer $facetId Internal storage facet identifier.
     *
     * @return boolean
     */
    public static function isPropertyId($facetId)
    {
    }
    /**
     * Converts internal storage facet identifier into iblock property identifier.
     *
     * @param integer $facetId Internal storage facet identifier.
     *
     * @return integer
     */
    public static function facetIdToPropertyId($facetId)
    {
    }
    /**
     * Converts internal storage facet identifier into catalog price identifier.
     *
     * @param integer $facetId Internal storage facet identifier.
     *
     * @return integer
     */
    public static function facetIdToPriceId($facetId)
    {
    }
}