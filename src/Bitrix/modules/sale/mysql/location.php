<?php

class CSaleLocation extends \CAllSaleLocation
{
    public static function GetList($arOrder = array("SORT" => "ASC", "COUNTRY_NAME_LANG" => "ASC", "CITY_NAME_LANG" => "ASC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function GetByID($ID, $strLang = \LANGUAGE_ID)
    {
    }
    public static function GetCountryList($arOrder = array("NAME_LANG" => "ASC"), $arFilter = array(), $strLang = \LANGUAGE_ID)
    {
    }
    /**
     * The function select all region
     *
     * @param array $arOrder sorting an array of results
     * @param array $arFilter filtered an array of results
     * @param string $strLang language regions of the sample
     * @return true false
     */
    public static function GetRegionList($arOrder = array("NAME_LANG" => "ASC"), $arFilter = array(), $strLang = \LANGUAGE_ID)
    {
    }
    /**
     * The function select all cities
     *
     * @param array $arOrder sorting an array of results
     * @param array $arFilter filtered an array of results
     * @param string $strLang language regions of the sample
     * @return true false
     */
    public static function GetCityList($arOrder = array("NAME_LANG" => "ASC"), $arFilter = array(), $strLang = \LANGUAGE_ID)
    {
    }
    // have to use old table as a temporal place to store countries, kz add of a country doesn`t mean add of a location
    public static function AddCountry($arFields)
    {
    }
    // have to use old table as a temporal place to store cities, kz we don`t know yet which country\region a newly-created city belongs to
    public static function AddCity($arFields)
    {
    }
    // have to use old table as a temporal place to store region, kz we don`t know yet which country a newly-created region belongs to
    public static function AddRegion($arFields)
    {
    }
    public static function AddLocation($arFields)
    {
    }
}