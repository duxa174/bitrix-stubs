<?php

class CCityLookup
{
    public $is_installed = \false;
    public $ip_addr = "";
    public $ip_number = "";
    public $country_code = "";
    public $country_short_name = "";
    public $country_full_name = "";
    public $region_name = "";
    public $city_name = "";
    public $city_id = "";
    public $charset = "";
    /**
     * @param array[string]string $arDBRecord
     */
    function __construct($arDBRecord = array())
    {
    }
    /**
     * @param array[string]string $arDBRecord
     * @return CCityLookup
     */
    public static function OnCityLookup($arDBRecord = array())
    {
    }
    /**
     * @return array[string]string
     */
    function ArrayForDB()
    {
    }
    /**
     * @return array[string][string]string
     */
    function GetFullInfo()
    {
    }
    /**
     * @return array[string]mixed
     */
    function GetDescription()
    {
    }
    /**
     * @return bool
     */
    function IsInstalled()
    {
    }
    /**
     * @return void
     */
    function Lookup()
    {
    }
}
class CStatRegion
{
    /**
     * @param array[string]string $arOrder
     * @param array[string]string $arFilter
     * @return CDBResult
     */
    function GetList($arOrder = array(), $arFilter = array())
    {
    }
}
class CCity
{
    private $lookup_class = "";
    private $lookup = \null;
    private $country_code = "";
    private $city_id = "";
    /**
     * @param string $dbRecord
     */
    function __construct($dbRecord = "")
    {
    }
    /**
     * @param array[string]string $arOrder
     * @param array[string]string $arFilter
     * @return CDBResult
     */
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    /**
     * @return string
     */
    function ForSQL()
    {
    }
    function GetFullInfo()
    {
    }
    public static function GetHandler()
    {
    }
    function GetCountryCode()
    {
    }
    function Recode($str)
    {
    }
    function GetCityID()
    {
    }
    public static function GetGraphArray($arFilter, &$arLegend, $sort = \false, $top = 0)
    {
    }
    public static function FindFiles($type = 'country', $path = '/bitrix/modules/statistic/ip2country')
    {
    }
    public static function GetCSVFormatType($fp)
    {
    }
    public static function ResolveIPRange($newStartIP, $newEndIP)
    {
    }
    public static function LoadCSV($file_name, $step, &$file_position)
    {
    }
}