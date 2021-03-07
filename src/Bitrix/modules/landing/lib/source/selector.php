<?php

namespace Bitrix\Landing\Source;

class Selector
{
    /* default path to open the selector in the slider */
    const SOURCE_PATH = '/bitrix/tools/landing/source.php';
    /* default event id for get sources */
    const EVENT_BUILD_SOURCE_LIST = 'OnBuildSourceList';
    /* site mode for sources */
    const SITE_MODE_UNKNOWN = 'UNKNOWN';
    const SITE_MODE_SYSTEM = 'SYSTEM';
    const SITE_MODE_PAGE = 'PAGE';
    const SITE_MODE_STORE = 'STORE';
    const SITE_MODE_KNOWLEDGE = 'KNOWLEDGE';
    /* selector type */
    const SOURCE_TYPE_COMPONENT = 'C';
    // component selector
    const SOURCE_TYPE_PRESET = 'P';
    // without selector - fixed preset
    /* transfer type source filter after selecting items to display */
    const ACTION_TYPE_EVENT = 'event';
    // use javascript event directly
    const ACTION_TYPE_SLIDER = 'slider';
    // use standart slider method BX.SidePanel.Instance.postMessageTop
    const ACTION_NAME = 'save';
    // default event name for Selector::ACTION_TYPE_SLIDER
    /* config for current landing */
    protected $config = [
        'SOURCE_EVENT_ID' => self::EVENT_BUILD_SOURCE_LIST,
        // Event ID for a list of sources
        'SOURCE_PATH' => self::SOURCE_PATH,
        // path for open source filter (component, include page, etc)
        'RESULT_ACTION_TYPE' => self::ACTION_TYPE_SLIDER,
        //
        'RESULT_ACTION_NAME' => self::ACTION_NAME,
    ];
    /** @var string */
    protected $siteMode = self::SITE_MODE_UNKNOWN;
    /** @var array */
    protected $restrictions = null;
    /** @var array */
    protected $sourceList = null;
    /**
     * Selector constructor.
     *
     * @param array $config Initialization parameters.
     * The array must contain all or part of the elements of the \Bitrix\Landing\Source\Selector::$config.
     *
     * @return void
     */
    public function __construct(array $config = [])
    {
    }
    /**
     * Getting a list of sources.
     * Calls the event handlers and processes their results (checks the accuracy of the data returned by the handlers).
     *
     * @return void
     */
    protected function initSourceList()
    {
    }
    /**
     * Returns base uri for source filter form. Should be used to build page navigation when selecting items, filter operation.
     *
     * @param string $module
     * @param string $sourceId
     * @return Main\Web\Uri
     */
    public function getSourceFilterBaseUri($module, $sourceId)
    {
    }
    /**
     * Returns a full description of the sources: the URL to open the filter, a list of possible fields of elements, etc
     *
     * @return array
     */
    public function getSourcesDescription()
    {
    }
    /**
     * Searches for source by index.
     * @see \Bitrix\Landing\Source\Selector::getSourceIndex
     *
     * @param string $index
     * @return array|null
     */
    public function findSource($index)
    {
    }
    /**
     * Displays a source filter for selecting which items are shown.
     *
     * @param string $index
     * @return void
     */
    public function showSourceFilter($index)
    {
    }
    /**
     * Internal method for show a filter of source from request id.
     *
     * @return void
     */
    public function showSourceFilterByRequest()
    {
    }
    /**
     * @param string $index
     * @param array $parameters
     * @param array $options
     * @return DataLoader|null
     */
    public function getDataLoader($index, array $parameters, array $options = [])
    {
    }
    /**
     * Returns a full description of the sources: the URL to open the filter, a list of possible fields of elements, etc
     *
     * @param array $config
     * @return array
     */
    public static function getSources(array $config = [])
    {
    }
    /**
     * Returns a short description of the sources: id and name
     *
     * @param array $config
     * @return array
     */
    public static function getSourceNames(array $config = [])
    {
    }
    /**
     * Returns current site mode for sources.
     *
     * @return string
     */
    public function getSiteMode()
    {
    }
    /**
     * @param array $modeList
     * @return bool
     */
    public function checkSiteMode(array $modeList)
    {
    }
    /**
     * Returns a list of constraints that module sources must satisfy (for example, information block ID).
     *
     * @param string $module
     * @return array|null
     */
    public function getModuleRestrictions($module)
    {
    }
    /* Public tools */
    /**
     * @param string $module
     * @param string $sourceId
     * @return string
     */
    public static function getSourceIndex($module, $sourceId)
    {
    }
    /**
     * @return array
     */
    public function getResultAction()
    {
    }
    /**
     * @return array
     */
    public function getDefaultLinkActions()
    {
    }
    /* Public tools end */
    /**
     * Set/update selector config.
     *
     * @param array $config
     * @return void
     */
    protected function setConfig(array $config)
    {
    }
    /**
     * Checks selector config.
     *
     * @param array $config
     * @return array
     */
    protected function prepareConfig(array $config)
    {
    }
    /**
     * Filter for array_filter - remove items with NULL value.
     *
     * @param mixed $value
     * @return bool
     */
    protected function clearFilter($value)
    {
    }
    /**
     * Load current landing mode
     *
     * @return void
     */
    protected function initSiteMode()
    {
    }
    /**
     * Load constraints that sources must satisfy (for example, information block ID).
     *
     * @return void
     */
    protected function initRestrictions()
    {
    }
    /**
     * Check source description.
     *
     * @param string $module
     * @param array $parameters
     * @return array|null
     */
    protected function prepareSourceParameters($module, $parameters)
    {
    }
    /**
     * Check common settings.
     *
     * @param array $settings
     * @return array
     */
    protected function checkSystemSettings(array $settings)
    {
    }
    /**
     * Check settings for component filter.
     *
     * @param array $settings
     * @return array|null
     */
    protected function checkComponentSettings(array $settings)
    {
    }
    /**
     * Check fixed block filter.
     *
     * @param array $settings
     * @return array|null
     */
    protected function checkPresetSettings(array $settings)
    {
    }
    /**
     * Check additional settings for component bitrix:ui.sidepanel.wrapper
     *
     * @param array $settings
     * @return array
     */
    protected function checkWrapperSettings(array $settings)
    {
    }
    /**
     * Checks the validity of the description of the source fields available.
     *
     * @param array $settings
     * @return array|null
     */
    protected function checkDataSettings(array $settings)
    {
    }
    /**
     * Returns required parameters for base url.
     *
     * @param string $index
     * @return array
     */
    protected function getBaseUrlParams($index)
    {
    }
    /**
     * Returns system parameters (language, site, template) for urls.
     *
     * @return array
     */
    protected function getUrlSystemParams()
    {
    }
    /**
     * @param mixed $item
     * @return bool
     */
    protected static function isNotEmptyField($item)
    {
    }
    /**
     * @param array $field
     * @return array|null
     */
    protected function prepareOrderField(array $field)
    {
    }
    /**
     * @param array $row
     * @param string $name
     * @return string|null
     */
    protected function prepareStringValue(array $row, $name)
    {
    }
}