<?php

namespace Bitrix\Main\Filter;

abstract class DataProvider
{
    /**
     * Get Settings
     * @return Settings
     */
    public abstract function getSettings();
    /**
     * Get ID.
     * @return string
     */
    public function getID()
    {
    }
    /**
     * Prepare field list.
     * @return Field[]
     */
    public abstract function prepareFields();
    /**
     * Prepare complete field data for specified field.
     * @param string $fieldID Field ID.
     * @return array|null
     */
    public abstract function prepareFieldData($fieldID);
    /**
     * Prepare Field additional HTML.
     * @param Field $field Field.
     * @return string
     */
    public function prepareFieldHtml(\Bitrix\Main\Filter\Field $field)
    {
    }
    /**
     * Prepare field parameter for specified field.
     * @param array $filter Filter params.
     * @param string $fieldID Field ID.
     * @return void
     */
    public function prepareListFilterParam(array &$filter, $fieldID)
    {
    }
    /**
     * Create filter field.
     * @param string $fieldID Field ID.
     * @param array|null $params Field parameters (optional).
     * @return Field
     */
    protected function createField($fieldID, array $params = null)
    {
    }
}