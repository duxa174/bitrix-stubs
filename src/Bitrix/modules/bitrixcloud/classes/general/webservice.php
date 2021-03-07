<?php

abstract class CBitrixCloudWebService
{
    private $debug = \false;
    private $timeout = 0;
    private $server = \null;
    /**
     * Returns URL to update policy
     *
     * @param array[string]string $arParams
     * @return string
     *
     */
    protected abstract function getActionURL($arParams = array());
    /**
     * Returns action response XML
     *
     * @param string $action
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    protected function action($action)
    {
    }
    /**
     * Sets debug mode for remote service.
     * Returns previous mode value.
     *
     * @param bool $bActive
     * @return bool
     *
     */
    public function setDebug($bActive)
    {
    }
    /**
     *
     * @param int $timeout
     * @return int
     *
     */
    public function setTimeout($timeout)
    {
    }
    /**
     * Returns remote server status.
     * Return null if no action was performed.
     *
     * @return mixed
     *
     */
    public function getServerStatus()
    {
    }
    /**
     * Returns remote server response body.
     * Return null if no action was performed.
     *
     * @return mixed
     *
     */
    public function getServerResult()
    {
    }
}