<?php

namespace Bitrix\Sender\Connector;

/**
 * Class BaseFilter
 * @package Bitrix\Sender\Connector
 */
abstract class BaseFilter extends \Bitrix\Sender\Connector\Base
{
    const FIELD_FOR_PRESET_ALL = 'SENDER_SELECT_ALL';
    const FIELD_PRESET_ID = 'BX_PRESET_ID';
    /** @var string	$filterSettingsUri Filter settings uri. */
    protected $filterSettingsUri = '';
    /**
     * Get form html.
     *
     * @return string
     */
    public final function getForm()
    {
    }
    /**
     * Get form html.
     *
     * @param array $params
     *
     * @return string
     */
    public final function getCustomForm(array $params)
    {
    }
    private function buildUi($filterId, $currentPresetId, $presets, $filter)
    {
    }
    /**
     * Get date-from field value.
     *
     * @param string $name Field name.
     * @param string|null $defaultValue Default value.
     * @return null|string
     */
    protected function getFieldDateFrom($name, $defaultValue = null)
    {
    }
    /**
     * Get date-to field value.
     *
     * @param string $name Field name.
     * @param string|null $defaultValue Default value.
     * @return null|string
     */
    protected function getFieldDateTo($name, $defaultValue = null)
    {
    }
    public function getUiFilterId()
    {
    }
    public function getCurrentPresetId()
    {
    }
    public function setFieldValues(array $fieldValues = null)
    {
    }
    /**
     * Get filters.
     * Return array of field filters \Bitrix\Main\UI\Filter\Field
     *
     * @return \Bitrix\Main\UI\Filter\Field[]
     */
    public static function getUiFilterFields()
    {
    }
    /**
     * Get UI filter fields.
     *
     * @param string $id ID.
     * @return array|null
     */
    public static function getUiFilterField($id)
    {
    }
    /**
     * Get Ui filter data.
     *
     * @param string $filterId Filter ID.
     * @return array
     */
    public static function getUiFilterData($filterId)
    {
    }
    /**
     * Get Ui filter presets.
     *
     * @return array
     */
    protected static function getUiFilterPresets()
    {
    }
    /**
     * Get Ui filter presets.
     *
     * @param null $filter
     *
     * @return array
     */
    private static function getFilterFields($filter = null)
    {
    }
    protected function clearFilterState($filterId)
    {
    }
}