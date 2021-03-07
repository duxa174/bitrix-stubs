<?php

/** @deprecated
 * use \Bitrix\Rest\Event\Callback
 */
class CRestEventCallback extends \Bitrix\Rest\Event\Callback
{
    public static function __callStatic($name, $arguments)
    {
    }
}
/** @deprecated
 * use \Bitrix\Rest\Event\Session
 */
class CRestEventSession
{
    public static function Get()
    {
    }
    public static function Set($session)
    {
    }
}