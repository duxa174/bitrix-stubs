<?php

/*
Array
(
	[country_code] => RU
	[country_code3] => RUS
	[country_name] => Russian Federation
	[region] => 23
	[city] => Kaliningrad
	[postal_code] =>
	[latitude] => 54.7099990845
	[longitude] => 20.5
	[dma_code] => 0
	[area_code] => 0
)
*/
class CCityLookup_geoip_extension extends \CCityLookup
{
    var $country_avail = \false;
    var $city_avail = \false;
    var $postal_code = \false;
    var $latitude = \false;
    var $longitude = \false;
    public static function OnCityLookup($arDBRecord = \false)
    {
    }
    function __construct($arDBRecord = \false)
    {
    }
    function ArrayForDB()
    {
    }
    function GetFullInfo()
    {
    }
    function GetDescription()
    {
    }
    function IsInstalled()
    {
    }
    function Lookup()
    {
    }
}