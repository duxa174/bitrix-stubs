<?php

class CBitrixSocialnetworkLogEntryMailComponent extends \CBitrixComponent
{
    const E_SOCIALNETWORK_MODULE_NOT_INSTALLED = 10001;
    const E_COMMENT_NOT_FOUND = 10002;
    const E_LOG_ENTRY_NOT_FOUND = 10003;
    /**
     * Variable contains comments data
     *
     * @var array[] array
     */
    protected $logEntryId = \false;
    protected $authorIdList = array();
    /**
     * Function implements all the life cycle of the component
     * @return void
     */
    public function executeComponent()
    {
    }
    public function __construct($component = \null)
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Main\SystemException
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    public function onPrepareComponentParams($arParams)
    {
    }
    private function obtainDataLogEntry()
    {
    }
    private function obtainDataComments()
    {
    }
    private function obtainDataDestinations()
    {
    }
    private function obtainLogEntryUrl()
    {
    }
    private function parseText($text)
    {
    }
}