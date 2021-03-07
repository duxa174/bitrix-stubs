<?php

class CAPConnectComponent extends \CBitrixComponent
{
    const SESSION_KEY = 'APCONNECT_CLIENT_INFO';
    const PATH_AP_MANAGE = '/marketplace/hook/ap/';
    protected static $presetPermission = array('ap' => array('crm', 'telephony', 'imopenlines'));
    protected $errors;
    protected $clientInfo = \null;
    protected $clientAccess = array();
    public function __construct($component = \null)
    {
    }
    /**
     * Load language file.
     */
    public function onIncludeComponentLang()
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
    protected function getConnectionData($password)
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
     *
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * Get main data - client info
     *
     * @throws SystemException
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