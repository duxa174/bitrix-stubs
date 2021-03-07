<?php

class CBitrixCloudCDNWebService extends \CBitrixCloudWebService
{
    private $domain = "";
    private $https = \null;
    private $optimize = \null;
    /**
     *
     * @param string $domain
     * @return void
     *
     */
    public function __construct($domain, $optimize = \null, $https = \null)
    {
    }
    /**
     * Returns URL to update policy
     *
     * @param array[string]string $arParams
     * @return string
     *
     */
    protected function getActionURL($arParams = array())
    {
    }
    /**
     *
     * @return CDataXML
     *
     */
    public function actionQuota()
    {
    }
    /**
     *
     * @return CDataXML
     *
     */
    public function actionStop()
    {
    }
    /**
     *
     * @return CDataXML
     *
     */
    public function actionGetConfig()
    {
    }
}