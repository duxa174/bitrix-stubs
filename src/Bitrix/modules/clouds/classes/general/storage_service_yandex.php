<?php

class CCloudStorageService_Yandex extends \CCloudStorageService_S3
{
    protected $set_headers = array();
    protected $new_end_point = '';
    protected $_public = \true;
    protected $location = '';
    /**
     * @return CCloudStorageService
     */
    function GetObject()
    {
    }
    /**
     * @return string
     */
    function GetID()
    {
    }
    /**
     * @return string
     */
    function GetName()
    {
    }
    /**
     * @return array[string]string
     */
    function GetLocationList()
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param bool $bServiceSet
     * @param string $cur_SERVICE_ID
     * @param bool $bVarsFromForm
     * @return string
     */
    function GetSettingsHTML($arBucket, $bServiceSet, $cur_SERVICE_ID, $bVarsFromForm)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param array[string]string & $arSettings
     * @return bool
     */
    function CheckSettings($arBucket, &$arSettings)
    {
    }
    /**
     * @param string $bucket
     * @return string
     **/
    protected function GetRequestHost($bucket, $arSettings)
    {
    }
    /**
     * @param array[string]string $arSettings
     * @param string $verb
     * @param string $bucket
     * @param string $file_name
     * @param string $params
     * @param string $content
     * @param array[string]string $additional_headers
     * @return mixed
     */
    function SendRequest($arSettings, $verb, $bucket, $file_name = '/', $params = '', $content = '', $additional_headers = array())
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param mixed $arFile
     * @return string
     */
    function GetFileSRC($arBucket, $arFile)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    function DeleteBucket($arBucket)
    {
    }
}