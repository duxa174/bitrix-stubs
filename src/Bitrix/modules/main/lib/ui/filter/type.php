<?php

namespace Bitrix\Main\UI\Filter;

/**
 * Class Type. Available field types
 * @package Bitrix\Main\UI\Filter
 */
class Type
{
    const STRING = "STRING";
    const TEXTAREA = "TEXTAREA";
    const NUMBER = "NUMBER";
    const DATE = "DATE";
    const SELECT = "SELECT";
    const MULTI_SELECT = "MULTI_SELECT";
    const DEST_SELECTOR = "DEST_SELECTOR";
    const ENTITY = "ENTITY";
    const CUSTOM = "CUSTOM";
    const CUSTOM_ENTITY = "CUSTOM_ENTITY";
    const CUSTOM_DATE = "CUSTOM_DATE";
    protected $list = [];
    protected static $instance;
    public function __construct()
    {
    }
    public function getTypesList()
    {
    }
    /**
     * @return Type
     */
    public static function getInstance()
    {
    }
    /**
     * Gets field types list
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Picks up from request filter data and converts it to ORM filter.
     * @param array $data
     * @param array $sourceFields
     * @return array
     */
    public static function getLogicFilter($data, array $sourceFields)
    {
    }
}