<?php

namespace Bitrix\Main\Filter;

class EntityUFDataProvider extends \Bitrix\Main\Filter\DataProvider
{
    /** @var EntitySettings|null */
    protected $settings = null;
    protected $ufReserved = [];
    function __construct(\Bitrix\Main\Filter\EntitySettings $settings)
    {
    }
    /**
     * Get Settings
     * @return EntitySettings
     */
    public function getSettings()
    {
    }
    /**
     * Get user field entity ID.
     * @return string
     */
    public function getUserFieldEntityID()
    {
    }
    /**
     * Get custom fields defined for entity
     * @return array
     */
    protected function getUserFields()
    {
    }
    /**
     * Prepare field list.
     * @return Field[]
     */
    public function prepareFields()
    {
    }
    /**
     * Prepare complete field data for specified field.
     * @param string $fieldID Field ID.
     * @return array|null
     */
    public function prepareFieldData($fieldID)
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
    public function getUfReserved()
    {
    }
    protected function postFilterFields(array $fields)
    {
    }
}