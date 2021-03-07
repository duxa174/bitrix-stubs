<?php

class CAPConnectComponent extends \CBitrixComponent
{
    protected $placementId = \null;
    protected $appList = array();
    protected $currentApp = \null;
    protected $currentPlacementOptions = \null;
    protected $errors;
    protected $ajaxMode = \false;
    protected $templatePage = '';
    public function __construct($component = \null)
    {
    }
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Check Required Modules
     *
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * Process incoming request
     * @return void
     */
    protected function processRequest()
    {
    }
    /**
     * Get main data
     *
     * @return void
     */
    protected function prepareData()
    {
    }
    /**
     * Prepare data to render
     *
     * @return void
     */
    protected function formatResult()
    {
    }
    /**
     * Extract data from cache
     *
     * @return bool
     */
    protected function extractDataFromCache()
    {
    }
    protected function putDataToCache()
    {
    }
    protected function abortDataCache()
    {
    }
    public function executeComponent()
    {
    }
}