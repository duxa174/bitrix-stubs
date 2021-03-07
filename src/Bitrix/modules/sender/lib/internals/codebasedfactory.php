<?php

namespace Bitrix\Sender\Internals;

/**
 * Class CodeBasedFactory
 * @package Bitrix\Sender\Internals
 */
abstract class CodeBasedFactory
{
    protected static $instances = array();
    protected static $classNames = array();
    public static function reset()
    {
    }
    protected static function getClasses()
    {
    }
    protected static function getObjectInstance($interface, $code)
    {
    }
    protected static function getObjectInstances($interface)
    {
    }
    protected static function getObjectClassList($interface)
    {
    }
}