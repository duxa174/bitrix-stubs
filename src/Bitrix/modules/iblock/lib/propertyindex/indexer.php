<?php

namespace Bitrix\Iblock\PropertyIndex;

class Indexer
{
    protected $iblockId = 0;
    protected $lastElementId = null;
    protected static $catalog = null;
    protected $skuIblockId = 0;
    protected $skuPropertyId = 0;
    protected $sectionParents = array();
    protected $propertyFilter = null;
    protected $priceFilter = null;
    /** @var Dictionary */
    protected $dictionary = null;
    /** @var Storage */
    protected $storage = null;
    /**
     * @param integer $iblockId Information block identifier.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Initializes internal object state. Must be called before usage.
     *
     * @throws \Bitrix\Main\LoaderException
     * @return void
     */
    public function init()
    {
    }
    /**
     * Sets index mark/cursor.
     *
     * @param integer $lastElementId Element identifier.
     *
     * @return void
     */
    public function setLastElementId($lastElementId)
    {
    }
    /**
     * Returns index mark/cursor. Last indexed element or null if there was none.
     *
     * @return integer|null
     */
    public function getLastElementId()
    {
    }
    /**
     * Checks if storage and dictionary exists in the database.
     * Returns true on success.
     *
     * @return boolean
     */
    public function isExists()
    {
    }
    /**
     * Drops and recreates the index. So one can start indexing.
     *
     * @return boolean
     */
    public function startIndex()
    {
    }
    /**
     * End of index creation. Marks iblock as indexed.
     *
     * @return boolean
     */
    public function endIndex()
    {
    }
    /**
     * Does index step. Returns number of indexed elements.
     *
     * @param integer $interval Time limit for execution.
     * @return integer
     */
    public function continueIndex($interval = 0)
    {
    }
    /**
     * Returns number of elements to be indexed.
     *
     * @return integer
     */
    public function estimateElementCount()
    {
    }
    /**
     * Indexes one element.
     *
     * @param integer $elementId Element identifier.
     *
     * @return void
     */
    public function indexElement($elementId)
    {
    }
    /**
     * Removes element from the index.
     *
     * @param integer $elementId Element identifier.
     *
     * @return void
     */
    public function deleteElement($elementId)
    {
    }
    /**
     * Returns elements list database cursor for indexing.
     * This list contains only active elements,
     * starts with $lastElementID and ID in ascending order.
     *
     * @param integer $lastElementID Element identifier.
     * @return \CIBlockResult
     */
    protected function getElementsCursor($lastElementID = 0)
    {
    }
    /**
     * Returns all relevant information for the element in section context.
     *
     * @param Element $element Loaded from the database element information.
     *
     * @return array
     */
    protected function getSectionIndexEntries(\Bitrix\Iblock\PropertyIndex\Element $element)
    {
    }
    /**
     * Returns list of properties IDs marked as indexed to the section according their "TYPE".
     * - N - maps to Indexer::NUMERIC
     * - S - to Indexer::STRING
     * - F, E, G, L - to Indexer::DICTIONARY
     *
     * @param integer $propertyType Property classification for the index.
     *
     * @return integer[]
     */
    protected function getFilterProperty($propertyType)
    {
    }
    /**
     * Returns list of price IDs for storing in the index.
     *
     * @return integer[]
     */
    protected function getFilterPrices()
    {
    }
    /**
     * Returns storage type for the property.
     * - N - maps to Indexer::NUMERIC
     * - S - to Indexer::STRING
     * - F, E, G, L - to Indexer::DICTIONARY
     *
     * @param array[string]string $property Property description.
     *
     * @return integer
     */
    public static function getPropertyStorageType($property)
    {
    }
}