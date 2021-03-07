<?php

namespace Bitrix\Rest\Configuration;

class Manifest
{
    const ON_REST_APP_CONFIGURATION_GET_MANIFEST = 'OnRestApplicationConfigurationGetManifest';
    const ON_REST_APP_CONFIGURATION_GET_MANIFEST_SETTING = 'OnRestApplicationConfigurationGetManifestSetting';
    private static $manifestList = [];
    public static function getList()
    {
    }
    public static function callEventInit($code, $params = [])
    {
    }
    public static function get($code)
    {
    }
}