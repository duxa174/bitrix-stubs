<?php

class CBitrixCloudBackupWebService extends \CBitrixCloudWebService
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
    protected function backup_action($action)
    {
    }
    /**
     *
     * @return CDataXML
     *
     */
    public function actionGetInformation()
    {
    }
    /**
     *
     * @param string $check_word
     * @param string $file_name
     * @return CDataXML
     *
     */
    public function actionReadFile($check_word, $file_name)
    {
    }
    /**
     *
     * @param string $check_word
     * @param string $file_name
     * @return CDataXML
     *
     */
    public function actionWriteFile($check_word, $file_name)
    {
    }
    /**
     *
     * @param string $secret_key
     * @param string $url
     * @param int $time
     * @param array $weekdays
     * @return CDataXML
     *
     */
    public function actionAddBackupJob($secret_key, $url, $time = 0, $weekdays = array())
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionDeleteBackupJob()
    {
    }
    /**
     *
     * @return CDataXML
     * @throws CBitrixCloudException
     */
    public function actionGetBackupJob()
    {
    }
}