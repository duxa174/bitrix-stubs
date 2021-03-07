<?php

namespace Bitrix\Main\UI\Filter;

/**
 * Class Options of main.ui.filter
 * @package Bitrix\Main\UI\Filter
 */
class Options
{
    protected $id;
    protected $options;
    protected $commonPresets;
    protected $useCommonPresets;
    protected $commonPresetsId;
    protected $request;
    const DEFAULT_FILTER = "default_filter";
    const TMP_FILTER = "tmp_filter";
    /**
     * Options constructor.
     * @param string $filterId $arParams["FILTER_ID"]
     * @param array $filterPresets $arParams["FILTER_PRESETS"]
     * @param string $commonPresetsId $arParams["COMMON_PRESETS_ID"] Set if you want to use common presets
     */
    public function __construct($filterId, $filterPresets = array(), $commonPresetsId = null)
    {
    }
    /**
     * @return string
     */
    public function getCommonPresetsId()
    {
    }
    /**
     * @return bool
     */
    public function isUseCommonPresets()
    {
    }
    /**
     * Gets filter id
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Sets filter presets
     * @param array $presets
     */
    public function setPresets($presets = array())
    {
    }
    /**
     * Sets current preset id
     * @param string $presetId
     */
    public function setCurrentPreset($presetId = "default_filter")
    {
    }
    /**
     * Gets default presets from filter options
     * @return array|null
     */
    public function getDefaultPresets()
    {
    }
    /**
     * Gets presets
     * @return array|null
     */
    public function getPresets()
    {
    }
    /**
     * Sets default preset id
     * @param string $presetId
     */
    public function setDefaultPreset($presetId = "default_filter")
    {
    }
    /**
     * Checks is need use pinned preset
     * @return bool
     */
    public function isUsePinPreset()
    {
    }
    /**
     * Sets default presets
     * @param array $presets
     */
    public function setDefaultPresets($presets = array())
    {
    }
    /**
     * Sets deleted presets array
     * @param array $deletedPresets
     */
    public function setDeletedPresets($deletedPresets = array())
    {
    }
    /**
     * Sets use_pin_preset values
     * @param boolean $value
     */
    public function setUsePinPreset($value = true)
    {
    }
    /**
     * Gets common presets from database
     * @param string $id Common presets id $arParams["COMMON_PRESETS_ID"]
     * @return array|bool
     */
    public static function fetchCommonPresets($id)
    {
    }
    /**
     * Gets filter options from database
     * @param string $id Filter id $arParams["FILTER_ID"]
     * @return array|bool
     */
    public function fetchOptions($id)
    {
    }
    protected static function getUserId()
    {
    }
    protected function getRequest()
    {
    }
    /**
     * Finds default preset in presets array
     * @param array $presets
     * @return string Default preset id
     */
    public static function findDefaultPresetId($presets = array())
    {
    }
    /**
     * Gets filter options
     * @return array
     */
    public function getOptions()
    {
    }
    /**
     * Makes preset as default
     * @param string $presetId Preset id
     */
    public function pinPreset($presetId = "default_filter")
    {
    }
    /**
     * Checks is need whether to set fields from query
     * @param HttpRequest $request
     *
     * @return bool
     */
    public static function isSetFromRequest(\Bitrix\Main\HttpRequest $request)
    {
    }
    /**
     * Fetches field values from request
     * @param array $fields
     * @param HttpRequest $request
     *
     * @return array|null
     */
    public static function fetchSettingsFromQuery($fields = array(), \Bitrix\Main\HttpRequest $request)
    {
    }
    /**
     * Gets session filter
     * @return mixed
     */
    public function getSessionFilterId()
    {
    }
    /**
     * Gets additional preset fields
     * @param string $presetId
     * @return array
     */
    public function getAdditionalPresetFields($presetId)
    {
    }
    /**
     * Sets additional fields
     * @param string $presetId
     * @param array $additional
     */
    public function setAdditionalPresetFields($presetId, $additional = array())
    {
    }
    /**
     * Gets default filter
     * @return mixed
     */
    public function getDefaultFilterId()
    {
    }
    /**
     * Gets current applied filter id
     * @return mixed
     */
    public function getCurrentFilterId()
    {
    }
    protected function trySetFilterFromRequest($fields = array())
    {
    }
    /**
     * Gets filter settings by preset id
     * @param $presetId
     * @return array|null
     */
    public function getFilterSettings($presetId)
    {
    }
    /**
     * Fetches filter fields from filter settings
     * @param array $filterSettings
     * @param array $additionalFields
     * @return array
     */
    protected static function fetchFieldsFromFilterSettings($filterSettings = array(), $additionalFields = array())
    {
    }
    /**
     * @param string $key
     * @return bool
     */
    public static function isDateField($key = "")
    {
    }
    /**
     * Fetches date field values
     * @param string $key
     * @param array $filterFields
     * @return array
     * @throws \Bitrix\Main\ObjectException
     */
    public static function fetchDateFieldValue($key = "", $filterFields = array())
    {
    }
    /**
     * Fetches number field values
     * @param string $key
     * @param array $filterFields
     *
     * @return array
     */
    public static function fetchNumberFieldValue($key = "", $filterFields = array())
    {
    }
    public static function isNumberField($key = "")
    {
    }
    public static function fetchFieldValuesFromFilterSettings($filterSettings = array(), $additionalFields = array(), $sourceFields = array())
    {
    }
    /**
     * @param string $presetId
     * @return bool
     */
    public static function isDefaultFilter($presetId = "")
    {
    }
    /**
     * Gets current filter values
     * @param array $sourceFields Filter fields $arParams["FILTER"]
     * @return array
     */
    public function getFilter($sourceFields = array())
    {
    }
    /**
     * Gets current filter values that available for DB seach
     * @param array $sourceFields Filter fields $arParams["FILTER"]
     * @return array
     */
    public function getFilterLogic($sourceFields = array())
    {
    }
    /**
     * Gets filter search string
     * @return string
     */
    public function getSearchString()
    {
    }
    /**
     * Saves filter optionsGet
     */
    public function save()
    {
    }
    /** @noinspection PhpUndefinedClassInspection */
    /**
     * Gets filter options for all users
     * @return bool|\CDBResult
     */
    public function getAllUserOptions()
    {
    }
    /**
     * @return bool
     */
    public static function isCurrentUserEditOtherSettings()
    {
    }
    /**
     * Saves filter options for all users
     */
    public function saveForAll()
    {
    }
    /**
     * Checks whether the parameters is common
     * @param $options
     * @return bool
     */
    public static function isCommon($options)
    {
    }
    /**
     * Saves options for user with $userId
     * @param array $options
     * @param $userId
     */
    public function saveOptionsForUser($options = array(), $userId)
    {
    }
    /**
     * Saves current options as common
     */
    public function saveCommon()
    {
    }
    /**
     * Sets filter preset rows
     * @param string $presetId
     * @param $rows
     */
    public function setFilterRows($presetId = "", $rows)
    {
    }
    /**
     * Restores filter options to default
     * @param array $settings
     */
    public function restore($settings = array())
    {
    }
    /**
     * @param array $settings
     */
    public function setFilterSettingsArray($settings = array())
    {
    }
    /**
     * @param string $presetId
     * @param $settings
     * @param bool $currentPreset
     * @param bool $useRequest
     */
    public function setFilterSettings($presetId = "", $settings, $currentPreset = true, $useRequest = true)
    {
    }
    /**
     * Deletes preset by preset id
     * @param string $presetId
     * @param bool $isDefault
     */
    public function deleteFilter($presetId, $isDefault = false)
    {
    }
    /**
     * Checks preset is deleted
     * @param string $presetId
     * @return bool
     */
    public function isDeletedPreset($presetId)
    {
    }
    /**
     * Setup Default Filter Settings
     * @param array $fields Default Filter Fields.
     * @param array $rows Default Filter Rows.
     */
    public function setupDefaultFilter(array $fields, array $rows)
    {
    }
    /**
     * Calculate date value
     *
     * @param string $fieldId
     * @param array $source Source values
     * @param array $result Result values
     * @throws \Bitrix\Main\ObjectException
     */
    public static function calcDates($fieldId, $source, &$result)
    {
    }
    /**
     * Resets current applied filter
     */
    public function reset()
    {
    }
    /**
     * Destroys this filter options
     */
    public function destroy()
    {
    }
    /**
     * Destroys filter options by filter id
     * @param $filterId
     */
    public static function destroyById($filterId)
    {
    }
    public static function getRowsFromFields($fields = array())
    {
    }
    /**
     * Fetches preset fields list
     * @param array $preset
     * @return array
     */
    public static function fetchPresetFields($preset)
    {
    }
    /**
     * Gets used fields
     * @return array
     */
    public function getUsedFields()
    {
    }
}