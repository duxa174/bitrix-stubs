<?php

namespace Bitrix\Main\ORM;

/**
 * Loads (generates) entity object or collection classes
 *
 * @package    bitrix
 * @subpackage main
 */
class Loader
{
    /** @var DataManager[] Entity registers its object class on init */
    protected static $predefinedObjectClass;
    /** @var DataManager[] Entity registers its collection class on init */
    protected static $predefinedCollectionClass;
    public static function autoLoad($class)
    {
    }
    public static function registerObjectClass($objectClass, $entityClass)
    {
    }
    public static function registerCollectionClass($collectionClass, $entityClass)
    {
    }
}