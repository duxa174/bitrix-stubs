<?php

/*
GEOIP_ADDR 		83.219.130.40
GEOIP_CONTINENT_CODE 	AS
GEOIP_COUNTRY_CODE 	RU
GEOIP_COUNTRY_NAME 	Russian Federation
GEOIP_REGION 		23
GEOIP_REGION_NAME 	Kaliningrad
GEOIP_CITY 		Kaliningrad
GEOIP_DMA_CODE 		0
GEOIP_AREA_CODE 	0
GEOIP_LATITUDE 		54.709999
GEOIP_LONGITUDE 	20.500000
*/
class CCityLookup_geoip_mod extends \CCityLookup
{
    var $continent_code = \false;
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