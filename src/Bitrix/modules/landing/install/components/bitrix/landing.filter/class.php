<?php

class LandingFilterComponent extends \LandingBaseComponent
{
    /**
     * Filter type.
     */
    const TYPE_SITE = 'SITE';
    const TYPE_LANDING = 'LANDING';
    /**
     * Entity pseudo status.
     */
    const STATUS_ACTIVE = 'active';
    const STATUS_NOT_ACTIVE = 'not_active';
    const STATUS_ACTIVE_CHANGED = 'active_changed';
    /**
     * Some prefix and suffix for filter.
     */
    const FILTER_PREFIX = 'LANDING_';
    const FILTER_SUFFIX = '';
    /**
     * Filter id prefix.
     * @deprecated since 19.500.0
     * @var string
     */
    protected static $prefix = 'LANDING_';
    /**
     * Filter contains deleted items.
     * @var bool
     */
    protected static $isDeleted = \false;
    /**
     * External filter.
     * @var array
     */
    protected static $externalFilter = [];
    /**
     * Allowed or not some type.
     * @param string $type Type.
     * @return boolean
     */
    protected static function isTypeAllowed($type)
    {
    }
    /**
     * Get instance of grid.
     * @param string $type Filter type.
     * @param string $siteType Site type.
     * @return \CGridOptions
     */
    protected static function getGrid($type, $siteType)
    {
    }
    /**
     * Sets external filter.
     * @param string $key Filter row key.
     * @param mixed $value Filter row value.
     * @return void
     */
    public static function setExternalFilter($key, $value)
    {
    }
    /**
     * Returns current raw filter by type.
     * @param string $type Filter type.
     * @param string $siteType Site type.
     * @return array
     */
    public static function getFilterRaw($type, $siteType = 'PAGE')
    {
    }
    /**
     * Get current filter by type.
     * @param string $type Filter type.
     * @param string $siteType Site type.
     * @return array
     */
    public static function getFilter($type, $siteType = 'PAGE')
    {
    }
    /**
     * Filter contains deleted items.
     * @return bool
     */
    public static function isDeleted()
    {
    }
    /**
     * Gets filter fields.
     * @return array
     */
    protected function getFilterFields()
    {
    }
    /**
     * Gets presets for filter.
     * @return array
     */
    protected static function getFilterPresets()
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
}