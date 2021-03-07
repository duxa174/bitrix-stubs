<?php

class CBitrixLocationSelectorSystemComponent extends \CBitrixLocationSelectorSearchComponent
{
    const ID_BLOCK_LEN = 90;
    const HUGE_TAIL_LEN = 30;
    const PAGE_SIZE = 100;
    const LOCATION_ENTITY_NAME = '\\Bitrix\\Sale\\Location\\LocationTable';
    protected $entityClass = \false;
    protected $useGroups = \true;
    protected $useCodes = \false;
    protected $dbResult = array();
    private $locationsFromRequest = \false;
    private $groupsFromRequest = \false;
    protected $locationFlag = '';
    protected $groupFlag = '';
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $arParams List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    protected function obtainCachedData(&$cachedData)
    {
    }
    protected function obtainCacheDependentData()
    {
    }
    protected function obtainDataLocationTypes(&$cachedData)
    {
    }
    protected function obtainDataGroups(&$cachedData)
    {
    }
    protected function obtainDataLevelOneLocations(&$cachedData)
    {
    }
    /**
     * Returns a list of items by supplying a set of their IDs or CODEs
     * 
     * @param string $entityClass
     * @param string[]|integer[] $list
     * @param mixed[] $parameters
     * @param string $fieldCode identify what type of linking is used. Only two of legal values allowed: ID and CODE
     *
     * @return Bitrix\Main\DB\ArrayResult $result
     */
    protected static function getEntityListByListOfPrimary($entityClass, $list = array(), $parameters = array(), $fieldCode = 'ID')
    {
    }
    protected function obtainDataConnectors()
    {
    }
    // override for do-nothing
    protected function obtainDataLocation()
    {
    }
    protected function checkParameters()
    {
    }
    protected function getCacheDependences()
    {
    }
    /**
     * Move data read from database to a specially formatted $arResult
     * @return void
     */
    protected function formatResult()
    {
    }
    protected static function processSearchRequestV2GetFinderBehaviour()
    {
    }
    protected static function processSearchRequestV2GetAdditional(&$data, $parameters)
    {
    }
    public static function processGetPathRequest($parameters)
    {
    }
    protected static function normalizeList($list, $expectNumeric = \true)
    {
    }
}