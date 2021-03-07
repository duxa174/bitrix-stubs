<?php

class CBitrixLocationSelectorStepsComponent extends \CBitrixLocationSelectorSearchComponent
{
    protected $connector = \null;
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $arParams List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    protected function getLocationListParameters()
    {
    }
    protected function obtainCacheDependentData()
    {
    }
    protected function obtainCachedData(&$cachedData)
    {
    }
    protected function obtainDataTreeTrunk(&$cachedData)
    {
    }
    protected function obtainDataAdditional()
    {
    }
    protected function identifyLinkType(&$items)
    {
    }
    protected function getCacheDependences()
    {
    }
    protected static function getPathNodesSelect()
    {
    }
    #### query serve functions
    protected static $allowedAdditionals = array('PATH' => \true, 'IS_UNCHOOSABLE' => \true);
    protected static function processSearchRequestV2ModifyParameters($parameters)
    {
    }
    protected static function processSearchRequestV2AfterSearchFormatResult(&$data, $parameters)
    {
    }
    public function formatResult()
    {
    }
    protected static function getClassName()
    {
    }
    ////////////////////////////////////////////////////////
    // DEPRECATED methods to support DEPRECATED query method
    /**
     * @deprecated
     */
    public static function processSearchRequest()
    {
    }
    /**
     * @deprecated
     */
    protected static function processSearchGetAdditionalPathNodes(&$data)
    {
    }
    /**
     * @deprecated
     */
    protected static function getPathToNodes($list)
    {
    }
}