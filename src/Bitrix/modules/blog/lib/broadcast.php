<?php

namespace Bitrix\Blog;

class Broadcast
{
    const ON_CNT = 5;
    const OFF_CNT = 5;
    const ON_PERIOD = 'P7D';
    // 7 days
    const OFF_PERIOD = 'P7D';
    // 7 days
    private static function getValue()
    {
    }
    private static function setValue($value = false)
    {
    }
    private static function getOffModeRequested()
    {
    }
    private static function getOnModeRequested()
    {
    }
    private static function setOffModeRequested()
    {
    }
    private static function setOnModeRequested()
    {
    }
    private static function getCount($period)
    {
    }
    private static function onModeNeeded()
    {
    }
    private static function offModeNeeded()
    {
    }
    public static function getData()
    {
    }
    public static function setRequestedMode($value)
    {
    }
    public static function checkMode()
    {
    }
    private static function sendRequest($value, $siteId = SITE_ID)
    {
    }
    public static function send($params)
    {
    }
    function onBeforeConfirmNotify($module, $tag, $value, $params)
    {
    }
}