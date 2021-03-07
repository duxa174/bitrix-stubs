<?php

namespace Bitrix\Rest;

class HandlerHelper
{
    const ERROR_UNSUPPORTED_PROTOCOL = 'ERROR_UNSUPPORTED_PROTOCOL';
    const ERROR_WRONG_HANDLER_URL = 'ERROR_WRONG_HANDLER_URL';
    const ERROR_HANDLER_URL_MATCH = 'ERROR_HANDLER_URL_MATCH';
    protected static $applicationList = array();
    /**
     * Checks callback URL validity.
     *
     * @param string $handlerUrl Callback URL.
     * @param array $appInfo Application info.
     * @param bool|true $checkInstallUrl Flag, whether to check URL_INSTALL field.
     *
     * @return bool
     *
     * @throws RestException
     */
    public static function checkCallback($handlerUrl, $appInfo = array(), $checkInstallUrl = true)
    {
    }
    public static function storeApplicationList($PLACEMENT, $applicationList)
    {
    }
    public static function getApplicationList($PLACEMENT)
    {
    }
}