<?php

namespace Bitrix\Iblock\PropertyIndex;

class Facet
{
    protected $iblockId = 0;
    protected $valid = false;
    protected $skuIblockId = 0;
    protected $skuPropertyId = 0;
    protected $sectionFilter = array();
    protected $priceFilter = null;
    protected $toCurrencyId = 0;
    protected $convertCurrencyId = array();
    /** @var \Bitrix\Iblock\PropertyIndex\Dictionary */
    protected $dictionary = null;
    /** @var \Bitrix\Iblock\PropertyIndex\Storage  */
    protected $storage = null;
    protected static $catalog = null;
    protected $sectionId = 0;
    protected $where = array();
    /**
     * @param integer $iblockId Information block identifier.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Returns true if filter rewrite is possible.
     *
     * @return boolean
     */
    public function isValid()
    {
    }
    /**
     * Returns iblock identifier.
     *
     * @return integer
     */
    public function getIblockId()
    {
    }
    /**
     * Returns SKU iblock identifier.
     *
     * @return integer
     */
    public function getSkuIblockId()
    {
    }
    /**
     * Returns SKU property identifier.
     *
     * @return integer
     */
    public function getSkuPropertyId()
    {
    }
    /**
     * Returns facet storage object.
     *
     * @return \Bitrix\Iblock\PropertyIndex\Storage
     */
    public function getStorage()
    {
    }
    /**
     * Returns facet dictionary object.
     *
     * @return \Bitrix\Iblock\PropertyIndex\Dictionary
     */
    public function getDictionary()
    {
    }
    /**
     * Returns string by its identifier in the dictionary.
     *
     * @param integer $valueId Value identifier for dictionary lookup.
     *
     * @return string
     */
    public function lookupDictionaryValue($valueId)
    {
    }
    /**
     * Returns filter join with index tables.
     * <p>
     * $filter parameters same as for CIBlockElement::getList
     * <p>
     * $facetTypes allows to get only "checkboxes" or "prices" and such.
     *
     * @param array $filter Filter to apply additionally to filter elements.
     * @param array $facetTypes Which facet types will be used.
     * @param integer $facetId Which facet category filter should not be applied.
     *
     * @return \Bitrix\Main\DB\Result|false
     */
    public function query(array $filter, array $facetTypes = array(), $facetId = 0)
    {
    }
    /**
     * Returns array of facets id filtered against $facetTypes.
     *
     * @param array $facetTypes Filter types.
     *
     * @return integer[]
     */
    protected function getFacetFilter(array $facetTypes)
    {
    }
    /**
     * Returns where condition without facet given.
     *
     * @param integer $facetToExclude Facet id.
     *
     * @return array
     */
    protected function getWhere($facetToExclude)
    {
    }
    /**
     * Converts structured $where array into sql condition or empty string.
     *
     * @param array $where Structured condition.
     * @param string $tableAlias Table alias to use in sql.
     * @param string $subsectionsCondition If not empty will be added.
     *
     * @return string
     */
    public function whereToSql(array $where, $tableAlias, $subsectionsCondition = "")
    {
    }
    /**
     * Returns list of properties IDs linked to the section according their "TYPE".
     * Property has to be not only linked to the section, but has to be marked as smart filter one.
     * - N - maps to Indexer::NUMERIC
     * - S - to Indexer::STRING
     * - F, E, G, L - to Indexer::DICTIONARY
     *
     * @param integer $sectionId Section for with properties will be returned.
     *
     * @return integer[]
     */
    protected function getSectionFilterProperty($sectionId)
    {
    }
    /**
     * Sets section context for further filtering.
     * <p>
     * Returns this object instance for calls chaining.
     *
     * @param integer $sectionId Section identifier.
     *
     * @return \Bitrix\Iblock\PropertyIndex\Facet
     */
    public function setSectionId($sectionId)
    {
    }
    /**
     * Sets prices for further filtering.
     * <p>
     * Returns this object instance for calls chaining.
     *
     * @param array $prices Prices identifiers.
     *
     * @return \Bitrix\Iblock\PropertyIndex\Facet
     */
    public function setPrices(array $prices)
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
     * Adds a condition for further filtering.
     *
     * @param integer $propertyId Iblock property identifier.
     * @param string $operator Comparing operator.
     * @param float $value Value to compare.
     *
     * @return void
     */
    public function addNumericPropertyFilter($propertyId, $operator, $value)
    {
    }
    /**
     * Adds a condition for further filtering.
     *
     * @param integer $priceId Catalog price identifier.
     * @param string $operator Comparing operator.
     * @param float $value Value to compare.
     *
     * @return void
     */
    public function addPriceFilter($priceId, $operator, $value)
    {
    }
    /**
     * Adds a condition for further filtering.
     *
     * @param integer $propertyId Iblock property identifier.
     * @param string $operator Comparing operator.
     * @param float $value Value to compare.
     *
     * @return void
     */
    public function addDictionaryPropertyFilter($propertyId, $operator, $value)
    {
    }
    /**
     * Adds a condition for further filtering.
     *
     * @param integer $propertyId Iblock property identifier.
     * @param string $operator Comparing operator.
     * @param float $value Timestamp to compare.
     *
     * @return void
     */
    public function addDatetimePropertyFilter($propertyId, $operator, $value)
    {
    }
    /**
     * Returns true if not filters were applied.
     *
     * @return boolean
     */
    public function isEmptyWhere()
    {
    }
    /**
     * When called subsequent queries will use currency conversion for filtering.
     * Works only with 'currency' module installed.
     *
     * @param string $toCurrencyId Valid currency id for price value passed into addPriceFilter method.
     * @param array $convertCurrencyId Array of valid currencies ids.
     *
     * @return void
     */
    public function enableCurrencyConversion($toCurrencyId, array $convertCurrencyId)
    {
    }
}