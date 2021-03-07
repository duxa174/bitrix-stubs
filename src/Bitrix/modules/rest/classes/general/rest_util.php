<?php

class CRestUtil
{
    const GLOBAL_SCOPE = '_global';
    const EVENTS = '_events';
    const PLACEMENTS = '_placements';
    const HANDLER_SESSION_TTL = 3;
    const BATCH_MAX_LENGTH = 50;
    const METHOD_DOWNLOAD = "download";
    const METHOD_UPLOAD = "upload";
    const TOKEN_DELIMITER = "|";
    const BITRIX_1C_APP_CODE = 'bitrix.1c';
    const PLACEMENT_APP_URI = 'REST_APP_URI';
    public static function sendHeaders()
    {
    }
    public static function getStandardParams()
    {
    }
    public static function getRequestData()
    {
    }
    public static function isAdmin()
    {
    }
    public static function canInstallApplication($appInfo = \null)
    {
    }
    public static function appCanBeInstalledByUser(array $appInfo)
    {
    }
    public static function getInstallAccessList()
    {
    }
    public static function setInstallAccessList($accessList)
    {
    }
    public static function notifyInstall($appInfo)
    {
    }
    public static function signLicenseRequest(array $request, $licenseKey)
    {
    }
    public static function ConvertDate($dt)
    {
    }
    public static function ConvertDateTime($dt)
    {
    }
    /**
     * @param string $iso8601 date in ISO-8601 format (for example: '2013-05-14T12:00:50+04:00')
     * @return string date in Bitrix format, or FALSE (bool) on error
     */
    public static function unConvertDate($iso8601)
    {
    }
    /**
     * @param string $iso8601 Datetime in ISO-8601 format (for example: '2013-05-14T12:00:50+04:00').
     * @param bool $enableOffset Add user timezone offset.
     * If $enableOffset == false, time in server timezone will be returned.
     * If $enableOffset == true, time in user timezone will be returned.
     * @return string datetime in Bitrix format, or FALSE (bool) on error
     */
    public static function unConvertDateTime($iso8601, $enableOffset = \false)
    {
    }
    public static function getMemberId()
    {
    }
    public static function isStatic($url)
    {
    }
    public static function GetFile($fileId, $resizeParam = \false)
    {
    }
    protected static function processBatchElement($query, $arResult, $keysCache = '')
    {
    }
    protected static function processBatchStructure($queryParams, $arResult, $keysCache = \null)
    {
    }
    public static function ParseBatchQuery($query, $arResult)
    {
    }
    /** @deprecated */
    public static function getAuthForEvent($appId, $userId, array $additionalData = array())
    {
    }
    /**
     * @deprecated
     *
     * use \Bitrix\Rest\OAuth\Auth::get
     */
    public static function getAuth($appId, $appSecret, $scope, $additionalParams, $user_id = 0)
    {
    }
    public static function checkAuth($query, $scope, &$res)
    {
    }
    public static function makeAuth($res, $application_id = \null)
    {
    }
    public static function checkAppAccess($appId, $appInfo = \null)
    {
    }
    public static function updateAppStatus(array $tokenInfo)
    {
    }
    public static function saveFile($fileContent, $fileName = "")
    {
    }
    public static function CleanApp($appId, $bClean)
    {
    }
    /**
     * Simple app installation without checks.
     *
     * @param string $appCode Application code.
     *
     * @return boolean
     */
    public static function InstallApp($code)
    {
    }
    /**
     * @deprecated
     *
     * use \Bitrix\Rest\AppTable::update
     */
    public static function UpdateApp($appId, $oldVersion)
    {
    }
    public static function getScopeList(array $description = \null)
    {
    }
    public static function getEventList(array $description = \null)
    {
    }
    public static function getApplicationToken(array $application)
    {
    }
    /**
     * Generates link to file download
     *
     * @param array|string $query Params, which will be transferred to download handler
     * @param CRestServer $server REST Server object
     *
     * @return string Absolute file download URL.
     *
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getDownloadUrl($query, \CRestServer $server)
    {
    }
    public static function getLanguage()
    {
    }
    /**
     * Generates link to file upload
     *
     * @param array|string $query Params, which will be transferred to upload handler
     * @param CRestServer $server REST Server object
     *
     * @return string Absolute file download URL.
     *
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getUploadUrl($query, \CRestServer $server)
    {
    }
    public static function getSpecialUrl($method, $query, \CRestServer $server)
    {
    }
    public static function getWebhookEndpoint($ap, $userId, $method = '')
    {
    }
    public static function getEndpoint()
    {
    }
    public static function getAdministratorIdList()
    {
    }
    public static function getApplicationPage($id, $type = 'ID', $appInfo = \null)
    {
    }
    public static function isSlider()
    {
    }
}