<?php

class CIBlockPropertyResult extends \CDBResult
{
    protected $IBLOCK_ID = 0;
    protected $VERSION = 0;
    protected $arProperties = array();
    protected static $propertiesCache = array();
    protected $arPropertiesValues = array();
    protected $lastRes = \null;
    protected $extMode = \false;
    protected $arPropertyValuesID = array();
    protected $arDescriptions = array();
    function Fetch()
    {
    }
    private function addPropertyValue($IBLOCK_PROPERTY_ID, $VALUE)
    {
    }
    private function initPropertiesValues($IBLOCK_ELEMENT_ID)
    {
    }
    private function addPropertyData($IBLOCK_PROPERTY_ID, $VALUE_ID, $DESCRIPTION)
    {
    }
    function setIBlock($IBLOCK_ID, $propertyID = array())
    {
    }
    function setMode($extMode)
    {
    }
}