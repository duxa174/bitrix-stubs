<?php

namespace Bitrix\Landing\Source;

class DataFilter extends \Bitrix\Landing\Source\Filter
{
    /**
     * DataFilter constructor.
     * @return void
     */
    public function __construct()
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
     * @param string $operator
     * @return string
     */
    protected static function getFilterOperator(array $field, $operator)
    {
    }
    /**
     * @param array &$result
     * @param array $items
     * @param array $field
     * @return void
     */
    protected function addRows(array &$result, array $items, array $field)
    {
    }
    /**
     * @param array &$filter
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addQuickSearchValue(array &$filter, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addStringValue(array &$result, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addNumberValue(array &$result, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addDateValue(array &$result, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addListValue(array &$result, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addCheckboxValue(array &$result, $fieldId, array $field, array $value)
    {
    }
    /**
     * @param array &$result
     * @param string $fieldId
     * @param array $field
     * @param array $value
     * @return void
     */
    protected function addDestSelectorValue(array &$result, $fieldId, array $field, array $value)
    {
    }
}