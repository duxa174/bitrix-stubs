<?php

class CAllSaleLocation
{
    const LOC2_M_OPT = 'sale_locationpro_migrated';
    const LOC2_DEBUG_MODE_OPT = 'location2_debug_mode';
    const SELF_ENTITY_NAME = 'Bitrix\\Sale\\Location\\Location';
    const NAME_ENTITY_NAME = 'Bitrix\\Sale\\Location\\Name\\Location';
    const DEFAULT_SITE_ENTITY_NAME = 'Bitrix\\Sale\\Location\\DefaultSite';
    const ORIGIN_NAME_LANGUAGE_ID = 'en';
    const ZIP_EXT_SERVICE_CODE = 'ZIP';
    const MODIFIER_SEARCH_R = '#^((!|\\+)?(>=|>|<=|<|@|~|%|=)?)#';
    const KEY_PARSE_R = '#^(!|\\+)?(>=|>|<=|<|@|~|%|=)?(.+)#';
    const LEADING_TILDA_SEARCH_R = '#^~#';
    /////////////////////////////////////////////
    // enable this when you want to turn on the new functionality
    public static function isLocationProEnabled()
    {
    }
    public static function locationProEnable()
    {
    }
    public static function locationProDisable()
    {
    }
    /////////////////////////////////////////////
    // enable this when you had done the migration
    public static function isLocationProMigrated()
    {
    }
    public static function locationProSetMigrated()
    {
    }
    public static function locationProSetRolledBack()
    {
    }
    // very temporal code
    public static function locationProCheckEnabled()
    {
    }
    // very temporal code
    public static function locationProControlForm()
    {
    }
    // for old admin pages the following function should be used
    // (for the new ones - direct call of sale.location.selector.*)
    public static function proxySaleAjaxLocationsComponent($parameters = array(), $additionalParams = array(), $template = '', $hideIcons = \true, $wrapNewComponentWith = \false)
    {
    }
    /////////////////////////////////////////////
    // enable this when you want to get debugging
    public static function isLocationProInDebug()
    {
    }
    public static function locationProDebugEnable()
    {
    }
    public static function locationProDebugDisable()
    {
    }
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    public static function getLocationIDbyCODE($code)
    {
    }
    public static function getLocationCODEbyID($id)
    {
    }
    public static function checkIsCode($id)
    {
    }
    public static function tryTranslateIDToCode($id)
    {
    }
    public static function checkLocationIsAboveCity($locationId)
    {
    }
    public static function getLocationCityTail()
    {
    }
    private static function getLanguages()
    {
    }
    public static function getSites()
    {
    }
    public static function getTypes()
    {
    }
    private static function getZipId()
    {
    }
    private static function refineFieldsForSaveCRC($id, $arFields)
    {
    }
    private static function getLocationIdByCountryId($legacyId)
    {
    }
    private static function getLocationIdByCityId($legacyId)
    {
    }
    private static function getLocationIdByRegionId($legacyId)
    {
    }
    private static function checkLangPresenceInSelect($type, $fields)
    {
    }
    private static function getTypeValueToStore($type, $arFields)
    {
    }
    protected static function checkIsRealInt($val)
    {
    }
    protected static function GetLocationTypeList($typeCode = '', $arOrder = array("NAME_LANG" => "ASC"), $arFilter = array(), $strLang = \LANGUAGE_ID)
    {
    }
    public static function checkLocationIdExists($id)
    {
    }
    public static function checkLocationCodeExists($code)
    {
    }
    public static function getFreeId($type)
    {
    }
    public static function getTypeJOINCondition($ctx = 'this')
    {
    }
    public static function getTypeFilterCondition()
    {
    }
    protected static $allowedOps = array('=');
    protected static function parseFilter($filter = array())
    {
    }
    public static function getDenormalizedLocationList($entityName, $arFilter = array())
    {
    }
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    // old api works in the old manner only when sale::isLocationProMigrated() returns false
    public static function GetLocationString($locationId, $siteId = \SITE_ID, $langId = \LANGUAGE_ID)
    {
    }
    /////////////////////////////////////////////
    public static function CountryCheckFields($ACTION, &$arFields)
    {
    }
    function UpdateCountry($ID, $arFields)
    {
    }
    public static function DeleteCountry($ID)
    {
    }
    public static function GetCountryByID($ID)
    {
    }
    public static function GetCountryLangByID($ID, $strLang = \LANGUAGE_ID)
    {
    }
    /////////////////////////////////////////////
    public static function RegionCheckFields($ACTION, &$arFields)
    {
    }
    public static function UpdateRegion($ID, $arFields)
    {
    }
    public static function DeleteRegion($ID)
    {
    }
    public static function GetRegionByID($ID)
    {
    }
    public static function GetRegionLangByID($ID, $strLang = \LANGUAGE_ID)
    {
    }
    /////////////////////////////////////////////
    public static function CityCheckFields($ACTION, &$arFields)
    {
    }
    public static function UpdateCity($ID, $arFields)
    {
    }
    public static function DeleteCity($ID)
    {
    }
    public static function GetCityByID($ID)
    {
    }
    public static function GetCityLangByID($ID, $strLang = \LANGUAGE_ID)
    {
    }
    /////////////////////////////////////////////
    private static function processOrderForGetList($arOrder, $fieldMap = array(), $fieldProxy = array())
    {
    }
    public static function processFilterForGetList($arFilter, $fieldMap = array(), $fieldProxy = array(), $query = \null)
    {
    }
    public static function processSelectForGetList($arSelectFields, $fieldMap)
    {
    }
    private static function proxyFieldsInResult($res, $fieldProxy = array())
    {
    }
    private static function stripModifiers($filter)
    {
    }
    /////////////////////////////////////////////
    public static function getFilterForGetList($arFilter)
    {
    }
    public static function getFieldMapForGetList($arFilter)
    {
    }
    protected static function getNameOfParentOfType($item, $typeCode, $strLang = \LANGUAGE_ID)
    {
    }
    protected static $city2RegionMap = array(
        '0000073738' => '0000028025',
        // moscow => moskovskaya oblast
        '0000103664' => '0000028043',
    );
    protected static $specialCities = array('MOSCOW', 'STPETERSBURG');
    public static function GetByIDForLegacyDelivery($primary, $strLang = \LANGUAGE_ID)
    {
    }
    public static function GetByID($primary, $strLang = \LANGUAGE_ID)
    {
    }
    public static function LocationCheckFields($ACTION, &$arFields)
    {
    }
    public static function UpdateLocation($ID, $arFields)
    {
    }
    public static function CheckFields($ACTION, &$arFields)
    {
    }
    private static function AddLocationPart($creat, $type, $parent, $sort)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    // ???
    public static function Delete($ID)
    {
    }
    public static function OnLangDelete($strLang)
    {
    }
    public static function DeleteAll()
    {
    }
    public static function GetLocationZIP($location)
    {
    }
    public static function GetByZIP($zip)
    {
    }
    public static function ClearLocationZIP($location)
    {
    }
    public static function ClearAllLocationZIP()
    {
    }
    public static function AddLocationZIP($location, $ZIP, $bSync = \false)
    {
    }
    public static function SetLocationZIP($location, $arZipList)
    {
    }
    public static function GetRegionsIdsByNames($arRegNames, $countryId = \false)
    {
    }
    public static function GetRegionsNamesByIds($arIds, $lang = \LANGUAGE_ID)
    {
    }
    // location import is overwritten, and it is enabled when self::isLocationProMigrated() == true, so no proxy provided for the obsolete methods below
    public static function _GetZIPImportStats()
    {
    }
    public static function _GetCityImport($arCityName, $country_id = \false)
    {
    }
    protected static function AddLocationUnattached($typeCode, $names = array())
    {
    }
    protected static function RebindLocationTriplet($fields = array())
    {
    }
}