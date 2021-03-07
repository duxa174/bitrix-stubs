<?php

namespace Bitrix\Rest\Configuration;

class Controller
{
    const ON_REST_APP_CONFIGURATION_CLEAR = 'OnRestApplicationConfigurationClear';
    const ON_REST_APP_CONFIGURATION_ENTITY = 'OnRestApplicationConfigurationEntity';
    const ON_REST_APP_CONFIGURATION_EXPORT = 'OnRestApplicationConfigurationExport';
    const ON_REST_APP_CONFIGURATION_IMPORT = 'OnRestApplicationConfigurationImport';
    const ON_REST_APP_CONFIGURATION_FINISH = 'OnRestApplicationConfigurationFinish';
    /**
     *	array value: [a-zA-Z0-9_]
     */
    public static function getEntityCodeList()
    {
    }
    public static function callEventExport($manifestCode, $code, $step = 0, $next = '', $itemCode = '', $contextUser = false)
    {
    }
    public static function callEventClear($data)
    {
    }
    public static function callEventImport($params)
    {
    }
    public static function callEventFinish($params)
    {
    }
}