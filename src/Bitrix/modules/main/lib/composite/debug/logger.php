<?php

namespace Bitrix\Main\Composite\Debug;

class Logger
{
    const TYPE_CACHE_REWRITING = "CACHE_REWRITING";
    const TYPE_COMPONENT_VOTING = "COMPONENT_VOTING";
    const TYPE_BUFFER_RESTART = "BUFFER_RESTART";
    const TYPE_CACHE_RESET = "CACHE_RESET";
    const TYPE_GET_METHOD_ONLY = "GET_METHOD_ONLY";
    const TYPE_NCC_PARAMETER = "NCC_PARAMETER";
    const TYPE_NCC_COOKIE = "NCC_COOKIE";
    const TYPE_EXCLUDE_MASK = "EXCLUDE_MASK";
    const TYPE_EXCLUDE_PARAMETER = "EXCLUDE_PARAMETER";
    const TYPE_INCLUDE_MASK = "INCLUDE_MASK";
    const TYPE_INVALID_HOST = "INVALID_HOST";
    const TYPE_INVALID_QUERY_STRING = "INVALID_QUERY_STRING";
    const TYPE_LOCAL_REDIRECT = "LOCAL_REDIRECT";
    const TYPE_ADMIN_PANEL = "ADMIN_PANEL";
    const TYPE_PHP_SHUTDOWN = "PHP_SHUTDOWN";
    const TYPE_PAGE_NOT_CACHEABLE = "PAGE_NOT_CACHEABLE";
    const TYPE_COMPOSITE_NOT_INJECTED = "COMPOSITE_NOT_INJECTED";
    const TYPE_CC_COOKIE_NOT_FOUND = "CC_COOKIE_NOT_FOUND";
    const TYPE_SESSID_PARAMETER = "SESSID_PARAMETER";
    const TYPE_AJAX_REQUEST = "AJAX_REQUEST";
    const TYPE_BITRIX_FOLDER = "BITRIX_FOLDER";
    const TYPE_CONTROLLER_FILE = "CONTROLLER_FILE";
    const TYPE_MESSAGE = "MESSAGE";
    const END_TIME_OPTION = "composite_debug_end_time";
    public static function isOn()
    {
    }
    public static function enable($endTime = 0)
    {
    }
    public static function disable()
    {
    }
    public static function getEndTime()
    {
    }
    public static function log(array $params = array())
    {
    }
    /**
     * Returns logger types
     * @return array
     */
    public static function getTypes()
    {
    }
    /**
     * Returns name for specific type. Returns null if type is invalid .
     * @param string $type Log Message Type.
     * @return null|string
     */
    public static function getTypeName($type)
    {
    }
}