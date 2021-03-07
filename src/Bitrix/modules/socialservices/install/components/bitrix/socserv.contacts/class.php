<?php

class CSocservContactsComponent extends \CBitrixComponent
{
    const DEFAULT_PAGE_SIZE = 12;
    const CONNECT_PREFIX = "network";
    protected $userId = \null;
    protected $contactList = array();
    protected $navObject = \null;
    /**
     * Load language file.
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * Is AJAX Request?
     * @return bool
     */
    protected function isAjax()
    {
    }
    /**
     * Prepare Component Params.
     *
     * @param array $params Component parameters.
     * @return array
     */
    public function onPrepareComponentParams($params)
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
     * Check Required Modules
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * Check Required functionality
     * @throws Exception
     */
    protected function checkAvailability()
    {
    }
    /**
     * Get main data - user contacts
     * @return void
     */
    protected function prepareData()
    {
    }
    /**
     * Prepare data to render
     * @return void
     */
    protected function formatResult()
    {
    }
    protected function getConnectId($connect)
    {
    }
    /**
     * Extract data from cache
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
    /**
     * Start Component
     */
    public function executeComponent()
    {
    }
}