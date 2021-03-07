<?php

class CDeliveryKazPost
{
    private static $MAX_WEIGHT = 10000;
    // (g)
    private static $MAX_DIMENSIONS = array("800", "800", "500");
    //milimeters
    private static $BASE_WEIGHT = 1000;
    // Base weight gramm
    private static $TARIFS = array();
    private static $TARIF_IDX = 0;
    private static $TARIF_DEFAULT = 1;
    private static $TARIF_DESCR = 2;
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
    private static function calculatePackPrice($arPackage, $profile, $arConfig, $regionIdFrom, $regionIdTo)
    {
    }
}