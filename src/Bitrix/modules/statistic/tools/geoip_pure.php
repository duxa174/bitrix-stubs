<?php

/*
geoiprecord Object
(
	[country_code] => RU
	[country_code3] => RUS
	[country_name] => Russian Federation
	[region] => 23
	[city] => Kaliningrad
	[postal_code] =>
	[latitude] => -122.2372
	[longitude] => 69.82
	[area_code] =>
	[dma_code] =>
)
*/
class CCityLookup_geoip_pure extends \CCityLookup
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