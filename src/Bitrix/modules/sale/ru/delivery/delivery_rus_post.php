<?php

class CDeliveryRusPost
{
    private static $MAX_WEIGHT_HEAVY = 20000;
    // (g)
    private static $MAX_WEIGHT = 10000;
    // (g)
    private static $ZONES_COUNT = 5;
    // Tarif zones count
    private static $BASE_WEIGHT = 500;
    // Base weight gram
    //1.1	zone_number => tarif_number
    private static $TARIF_LESS_500 = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);
    private static $TARIF_MORE_500 = array(1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10);
    private static $TARIF_HEAVY_WEIGHT = 11;
    //1.2
    private static $TARIF_FRAGILE = 14;
    //1.5
    private static $TARIF_DECLARED_VAL = 20;
    //4.
    private static $TARIF_AVIA_STANDART = 15;
    //2.1
    private static $TARIF_AVIA_HEAVY = 16;
    //2.2
    private static $MAX_DIMENSIONS = array("425", "265", "380");
    const LOCATION_CODE_RUSSIA = "0000028023";
    function Init()
    {
    }
    function GetConfig($siteId = \false)
    {
    }
    function GetSettings($strSettings)
    {
    }
    function SetSettings($arSettings)
    {
    }
    function GetFeatures($arConfig)
    {
    }
    function Calculate($profile, $arConfig, $arOrder, $STEP, $TEMP = \false)
    {
    }
    function Compability($arOrder, $arConfig)
    {
    }
    /* Particular services helper functions*/
    public function importZonesFromCsv(array $arShopLocation)
    {
    }
    /**
     * If zip codes imported to locations, we try to link regions to zones
     * using file /bitrix/modules/sale/delivery/rus_post/zip_zones.csv created
     * from http://info.russianpost.ru/database/tzones.html
     */
    public function importZonesFromZipCsv()
    {
    }
    public static function getTarifNumFromCsv(array $arShopLocation)
    {
    }
    public static function getTarifsByRegionFromCsv(array $arShopLocation)
    {
    }
    private static function getConfValue(&$arConfig, $key)
    {
    }
    private static function isConfCheckedVal(&$arConfig, $key)
    {
    }
    private static function isHeavyEnabled(&$arConfig)
    {
    }
    private static function getAviableBoxes()
    {
    }
    private static function getLocationToCode($arLocationTo)
    {
    }
    private static function calculatePackPrice($arPackage, $profile, $arConfig, $arLocationTo)
    {
    }
    protected static function getRegionCodeByOldName($regionLangName)
    {
    }
}