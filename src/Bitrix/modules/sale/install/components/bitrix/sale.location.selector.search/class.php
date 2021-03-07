<?php

class CBitrixLocationSelectorSearchComponent extends \CBitrixComponent
{
    const START_SEARCH_LEN = 2;
    const COMPONENT_CACHE_DIR = '/sale/location/links';
    /**
     * Fatal error list. Any fatal error makes useless further execution of a component code. 
     * In most cases, there will be only one error in a list according to the scheme "one shot - one dead body"
     *
     * @var string[] Array of fatal errors.
     */
    protected $errors = array();
    /**
     * Contains some valuable info from $_REQUEST
     *
     * @var object request info
     */
    protected $request = array();
    /**
     * Gathered options that are required
     *
     * @var string[] options
     */
    protected $options = array();
    protected $dbResult = array();
    protected $filterBySite = \false;
    protected $currentCache = \false;
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    /**
     * Function checks if user have basic permissions to launch the component
     * @return void
     */
    protected function checkPermissions()
    {
    }
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $arParams List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Function processes and corrects $_REQUEST. Everyting about $_REQUEST lies here.
     * @return void
     */
    protected function processRequest()
    {
    }
    protected function checkParameters()
    {
    }
    /**
     * Function forces 'Y'/'N' value to boolean
     * @param mixed $fld Field value
     * @param string $default Default value
     * @return string parsed value
     */
    public static function tryParseBoolean(&$fld)
    {
    }
    /**
     * Function processes parameter value by white list, if gets null, passes the first value in white list
     * @param mixed $fld Field value
     * @param string $default Default value
     * @return string parsed value
     */
    public static function tryParseWhiteList(&$fld, $list = array())
    {
    }
    /**
     * Function reduces input value to integer type, and, if gets null, passes the default value
     * @param mixed $fld Field value
     * @param int $default Default value
     * @param int $allowZero Allows zero-value of the parameter
     * @return int Parsed value
     */
    public static function tryParseInt(&$fld, $default = \false, $allowZero = \false)
    {
    }
    /**
     * Function processes string value and, if gets null, passes the default value to it
     * @param mixed $fld Field value
     * @param string $default Default value
     * @return string parsed value
     */
    public static function tryParseString(&$fld, $default = \false)
    {
    }
    /**
     * Function processes string value and, if gets null, passes the default value to it
     * @param mixed $fld Field value
     * @param string $default Default value
     * @return string parsed value
     */
    public static function tryParseStringStrict(&$fld, $default = \false)
    {
    }
    /**
     * Fetches all required data from database. Everyting that connected with data fetch lies here.
     * @return void
     */
    protected function obtainData()
    {
    }
    // at this point we can make descision to interrupt component execution, based on some conditions
    protected function obtainNonCachedData()
    {
    }
    // here we pick up cached data
    protected function obtainCachedData(&$cachedData)
    {
    }
    // here we pick up data that depends on what cached data we currently have
    protected function obtainCacheDependentData()
    {
    }
    protected function obtainDataLocation()
    {
    }
    protected function getLocationListParameters()
    {
    }
    protected function obtainDataLocationTypes(&$cachedData)
    {
    }
    protected function obtainDataConnectLocations(&$cachedData)
    {
    }
    /**
     * Read some data from database, using cache
     * @return void
     */
    protected function obtainDataDefaultLocations(&$cachedData)
    {
    }
    protected function obtainDataAdditional()
    {
    }
    protected function getCacheDependences()
    {
    }
    protected static function getStrForVariable($val)
    {
    }
    protected static function getNodeSelectFields()
    {
    }
    protected static function forceToType($node)
    {
    }
    /**
     * Move data read from database to a specially formatted $arResult
     * @return void
     */
    protected function formatResult()
    {
    }
    /**
     * Function implements all the life cycle of our component
     * @return void
     */
    public function executeComponent()
    {
    }
    //////////////////////////////////////////
    // static functions for external usage
    protected static $allowedLocationFields = array(
        // entity
        'ID' => 'i',
        'CODE' => 's',
        'TYPE_ID' => 'i',
        'SORT' => 'i',
        'LEFT_MARGIN' => 'i',
        'RIGHT_MARGIN' => 'i',
        'PARENT_ID' => 'i',
        'CNT' => 'i',
        'CHILD_CNT' => 'i',
        'IS_PARENT' => 'i',
        'NAME.NAME' => 's',
        'NAME.LANGUAGE_ID' => 's',
        'GROUPLOCATION.LOCATION_GROUP_ID' => 'i',
        'LONGITUDE' => 's',
        'LATITUDE' => 's',
        // special (filter only)
        'PHRASE' => 's',
        'SITE_ID' => 's',
    );
    protected static $allowedAdditionals = array('PATH' => \true);
    protected static function processSearchRequestV2CheckQuery($parameters)
    {
    }
    protected static function processSearchRequestV2AfterSearchFormatResult(&$data, $parameters)
    {
    }
    protected static function processSearchRequestV2ModifyParameters($parameters)
    {
    }
    protected static function processSearchRequestV2GetFinderBehaviour()
    {
    }
    public static function processSearchRequestV2($parameters)
    {
    }
    protected static function processSearchRequestV2GetNameAlias($parameters)
    {
    }
    protected static function getPathNodesSelect()
    {
    }
    protected static function getPathToNodesV2($list, $parameters = array())
    {
    }
    protected static function processSearchRequestV2GetAdditionalPathNodes(&$data, $parameters)
    {
    }
    protected static function processSearchRequestV2GetAdditional(&$data, $parameters)
    {
    }
    protected static function getClassName()
    {
    }
    ////////////////////////
    // Cache functions
    ////////////////////////
    /**
     * Function checks if cacheing is enabled in component parameters
     * @return boolean
     */
    protected final function getCacheNeed()
    {
    }
    /**
     * Function perform start of cache process, if needed
     * @param mixed[]|string $cacheId An optional addition for cache key
     * @return boolean True, if cache content needs to be generated, false if cache is valid and can be read
     */
    protected final function startCache($cacheId = array())
    {
    }
    /**
     * Function perform start of cache process, if needed
     * @throws Main\SystemException
     * @param mixed[] $data Data to be stored in the cache
     * @return void
     */
    protected final function endCache($data = \false)
    {
    }
    /**
     * Function discard cache generation
     * @throws Main\SystemException
     * @return void
     */
    protected final function abortCache()
    {
    }
    /**
     * Function return data stored in cache
     * @throws Main\SystemException
     * @return void|mixed[] Data from cache
     */
    protected final function getCacheData()
    {
    }
    /**
     * Function leaves the ability to modify cache key in future.
     * @return string Cache key to be used in CPHPCache()
     */
    protected final function getCacheKey($cacheId = array())
    {
    }
    ////////////////////////////////////////////////////////
    // DEPRECATED methods to support DEPRECATED query method
    //////////////////////////////////////////
    // static functions for external usage
    /**
     * @deprecated
     */
    protected static function getPathToNodes($list)
    {
    }
    /**
     * @deprecated
     */
    public static function processSearchRequest()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetParameters()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchRequestGetLang()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetFilter()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetSelect()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetList($parameters)
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetAdditionalPathNodes(&$data)
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetAdditional($result)
    {
    }
    /**
     * @deprecated
     */
    protected static function isNonemptyArray($arr)
    {
    }
}