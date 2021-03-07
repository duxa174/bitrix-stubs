<?php

class CRestProvider extends \IRestService
{
    const ERROR_BATCH_LENGTH_EXCEEDED = 'ERROR_BATCH_LENGTH_EXCEEDED';
    const ERROR_BATCH_METHOD_NOT_ALLOWED = 'ERROR_BATCH_METHOD_NOT_ALLOWED';
    // default license shown instead of absent or unknown
    const LICENSE_DEFAULT = "project";
    // controller group id => rest license id
    protected static $licenseList = array("project" => "project", "corporation" => "corporation", "company" => "company", "team" => "team", "demo" => "demo", "nfr" => "nfr", "tf" => "tf", "crm" => "crm", "tasks" => "tasks");
    protected static $arApp = \null;
    protected static $arScope = \null;
    protected static $arMethodsList = \null;
    public function getDescription()
    {
    }
    public static function getProfile($params, $n, \CRestServer $server)
    {
    }
    public static function methodsBatch($arQuery, $start, \CRestServer $server)
    {
    }
    public static function scopeList($arQuery, $n, \CRestServer $server)
    {
    }
    public static function methodsList($arQuery, $n, \CRestServer $server)
    {
    }
    public static function appInfo($params, $n, \CRestServer $server)
    {
    }
    /**
     * Gets application option values
     *
     * @param array $params array([option => option_name])
     * @param int $n Standard pagination param
     * @param CRestServer $server Standard Server object link
     *
     * @return array|mixed|null|string
     *
     * @throws AccessException
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function appOptionGet($params, $n, \CRestServer $server)
    {
    }
    /**
     * Sets application options values
     *
     * @param array $params array(option_name => option_value) || array(options => array(option_name => option_value,....))
     * @param int $n Standard pagination param
     * @param CRestServer $server Standard Server object link
     *
     * @return true
     *
     * @throws AccessException
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function appOptionSet($params, $n, \CRestServer $server)
    {
    }
    /**
     * Gets user option values for application
     *
     * @param array $params array([option => option_name])
     * @param int $n Standard pagination param
     * @param CRestServer $server Standard Server object link
     *
     * @return array|mixed|null|string
     *
     * @throws AccessException
     */
    public static function userOptionGet($params, $n, \CRestServer $server)
    {
    }
    /**
     * Sets user options values for application
     *
     * @param array $params array(option_name => option_value) || array(options => array(option_name => option_value,....))
     * @param int $n Standard pagination param.
     * @param CRestServer $server Standard Server object link
     *
     * @return bool
     *
     * @throws AccessException
     * @throws ArgumentNullException
     */
    public static function userOptionSet($params, $n, \CRestServer $server)
    {
    }
    public static function getServerTime($params)
    {
    }
    public static function OnAppEvent($arParams, $arHandler)
    {
    }
    public static function OnAppPayment($arParams, $arHandler)
    {
    }
    private static function getBitrix24LicenseName($licenseType = \CBitrix24::LICENSE_TYPE_CURRENT)
    {
    }
    protected static function getApp(\CRestServer $server)
    {
    }
    protected static function getScope(\CRestServer $server)
    {
    }
}