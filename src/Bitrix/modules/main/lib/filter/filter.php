<?php

namespace Bitrix\Main\Filter;

class Filter
{
    /** @var string */
    protected $ID = '';
    /** @var DataProvider|null */
    protected $entityDataProvider = null;
    /** @var DataProvider[]|null */
    protected $extraProviders = null;
    /** @var array|null  */
    protected $params = null;
    /** @var Field[]|null */
    protected $fields = null;
    function __construct($ID, \Bitrix\Main\Filter\DataProvider $entityDataProvider, array $extraDataProviders = null, array $params = null)
    {
    }
    /**
     * Get Filter ID.
     * @return string
     */
    function getID()
    {
    }
    /**
     * Get Default Field IDs.
     * @return array
     */
    public function getDefaultFieldIDs()
    {
    }
    /**
     * Get Field list.
     * @return Field[]
     */
    public function getFields()
    {
    }
    /**
     * Get Fields converted to plain object (array).
     *
     * @param array $fieldMask
     * @return array
     */
    public function getFieldArrays(array $fieldMask = [])
    {
    }
    /**
     * Get Field by ID.
     * @param string $fieldID Field ID.
     * @return Field|null
     */
    public function getField($fieldID)
    {
    }
    /**
     * @return DataProvider|null
     */
    public function getEntityDataProvider()
    {
    }
    /**
     * Prepare list filter params.
     * @param array $filter Source Filter.
     * @return void
     */
    public function prepareListFilterParams(array &$filter)
    {
    }
}