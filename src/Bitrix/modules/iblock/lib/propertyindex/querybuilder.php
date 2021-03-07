<?php

namespace Bitrix\Iblock\PropertyIndex;

class QueryBuilder
{
    /** @var \Bitrix\Iblock\PropertyIndex\Facet */
    protected $facet = null;
    /** @var \Bitrix\Iblock\PropertyIndex\Dictionary */
    protected $dictionary = null;
    /** @var \Bitrix\Iblock\PropertyIndex\Storage  */
    protected $storage = null;
    protected $sectionFilter = null;
    protected $priceFilter = null;
    protected $distinct = false;
    protected $options = array();
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
     * Returns true if filter needs distinct sql clause.
     *
     * @return boolean
     */
    public function getDistinct()
    {
    }
    /**
     * Returns filter join with index tables.
     *
     * @param array &$filter Filter which may be rewritten.
     * @param array &$sqlSearch Additional result of rewrite.
     *
     * @return string
     */
    public function getFilterSql(&$filter, &$sqlSearch)
    {
    }
    /**
     * Goes through the $filter and creates unified conditions in $where array.
     *
     * @param array &$where Output result.
     * @param boolean &$hasAdditionalFilters Whenever has some filters left or not.
     * @param array &$toUnset Output $filter keys which may be excluded.
     * @param array &$filter Filter to go through.
     *
     * @return void
     */
    private function fillWhere(&$where, &$hasAdditionalFilters, &$toUnset, &$filter)
    {
    }
    /**
     * Returns array on integers representing values for sql query.
     *
     * @param mixed $value Value to be intvaled.
     * @param boolean $lookup Whenever to convert the value from string to dictionary or not.
     *
     * @return integer[]
     */
    protected function getInSql($value, $lookup)
    {
    }
    /**
     * Returns map of properties to their types.
     * Properties of iblock and its sku returned
     * which marked as for smart filter.
     *
     * @return integer[]
     */
    private function getFilterProperty()
    {
    }
}