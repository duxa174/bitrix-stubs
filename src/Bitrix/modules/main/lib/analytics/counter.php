<?php

namespace Bitrix\Main\Analytics;

class Counter
{
    protected static $data = array();
    protected static $enabled = true;
    public static function enable()
    {
    }
    public static function disable()
    {
    }
    public static function getInjectedJs($stripTags = false)
    {
    }
    public static function injectIntoPage()
    {
    }
    public static function getAccountId()
    {
    }
    public static function getPrivateKey()
    {
    }
    public static function onBeforeEndBufferContent()
    {
    }
    public static function onBeforeRestartBuffer()
    {
    }
    public static function sendData($id, array $arParams)
    {
    }
    private static function injectDataParams()
    {
    }
}