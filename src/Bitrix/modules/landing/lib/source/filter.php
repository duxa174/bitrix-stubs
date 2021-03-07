<?php

namespace Bitrix\Landing\Source;

abstract class Filter
{
    /** @var array Filter field list */
    protected $fields = [];
    protected $fieldTypeHandlers = [];
    /**
     * Filter constructor.
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * @param array $fields
     * @return void
     */
    public function setFields(array $fields)
    {
    }
    /**
     * @param array $sourceFilter
     * @return array
     */
    public function create(array $sourceFilter)
    {
    }
    /**
     * @return void
     */
    protected function initFieldTypeHandlers()
    {
    }
    /**
     * @param array $field
     * @return string
     */
    protected function getFieldHandler(array $field)
    {
    }
    /**
     * @return string|null
     */
    protected function getQuickSearchField()
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addQuickSearchValue(array &$result, $fieldId, array $field, array $value)
    {
    }
}