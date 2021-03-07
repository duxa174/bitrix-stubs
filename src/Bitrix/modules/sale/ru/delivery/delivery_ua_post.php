<?php

class CDeliveryUaPost
{
    private static $MAX_WEIGHT = 100000;
    // (g)
    private static $defaultTarifs = array(
        "BO" => 13,
        // Price for ordering UAH
        "T1" => 1.65,
        // WARE-WARE Price for 1 kg
        "WARE_DOOR" => array(
            // upper bound of weight gramm => price)
            2000 => 20,
            10000 => 25,
            100000 => 40,
        ),
        "DOOR_DOOR" => array(
            //upper bound of weight gramm => price
            2000 => 55,
            5000 => 65,
            10000 => 75,
            20000 => 95,
            30000 => 115,
            50000 => 140,
            75000 => 170,
            100000 => 205,
        ),
        "OB_COMISS" => 0.5,
        // declared-value comission %
        "OB_COMISS_MIN" => 3,
    );
    function Init()
    {
    }
    function GetConfig()
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
    private static function getConfValue(&$arConfig, $key)
    {
    }
    private static function getAviableBoxes()
    {
    }
    private static function calculatePackPrice($arPackage, $profile, $arConfig)
    {
    }
    public static function calcVolumeWeightByVolume($volume)
    {
    }
    public static function getWeightForCalc($weight, $volume)
    {
    }
}