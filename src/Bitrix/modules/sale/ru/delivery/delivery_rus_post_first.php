<?php

//where we can found csv files
class CDeliveryRusPostFirst
{
    private static $MAX_WEIGHT = 2500;
    // (g)
    private static $MAX_SUMM = 20000;
    // RUB
    private static $MAX_SIZE = 360;
    //milimeters
    private static $MAX_DIMENSIONS_SUMM = 700;
    //milimeters
    private static $MAX_DIMENSIONS = array("165", "100", "190");
    //milimeters
    private static $BASE_WEIGHT = 100;
    // Base weight gramm
    private static $TARIFS = array();
    private static $SERVICES = array();
    private static $TARIF_IDX = 0;
    private static $TARIF_DESCR = 1;
    /* Standard mandatory delivery services functions */
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
    private static function getAviableBoxes()
    {
    }
    private static function calculatePackPrice($arPackage, $profile, $arConfig, $arLocationTo)
    {
    }
    protected static function getRegionCodeByOldName($regionLangName)
    {
    }
    public function getAdminMessage()
    {
    }
}