<?php

class CBitrixCloudMonitoringWebService extends \CBitrixCloudWebService
{
    private $addParams = array();
    private $addStr = "";
    /**
     * Returns URL to backup webservice
     *
     * @param array[string]string $arParams
     * @return string
     *
     */
    protected function getActionURL($arParams = array())
    {
    }
    /**
     * Returns action response XML and check CRC
     *
     * @param string $action
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    protected function monitoring_action($action)
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionGetList()
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionStart($domain, $is_https, $language_id, $emails, $tests)
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionStop($domain)
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionGetInfo()
    {
    }
}