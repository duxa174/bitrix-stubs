<?php

namespace Bitrix\Sale\Location\Search;

class Finder
{
    const SALE_LOCATION_INDEXED_TYPES_OPT = 'sale.location.indexed_types';
    const SALE_LOCATION_INDEXED_LANGUAGES_OPT = 'sale.location.indexed_langs';
    const SALE_LOCATION_INDEX_VALID_OPT = 'sale.location.index_valid';
    protected static $allowedOperations = array('=' => true);
    public static function checkIndexValid()
    {
    }
    public static function setIndexValid()
    {
    }
    public static function setIndexInvalid()
    {
    }
    public static function getIndexedTypes()
    {
    }
    public static function setIndexedTypes($types = array())
    {
    }
    public static function getIndexedLanguages()
    {
    }
    public static function setIndexedLanguages($langs = array())
    {
    }
    protected static function getLangsFromDb()
    {
    }
    protected static function getTypesFromDb()
    {
    }
    /**
     * 
     * $parameters is an ORM`s getList compatible array of parameters
     * 
     * 
     */
    public static function find($parameters, $behaviour = array('FALLBACK_TO_NOINDEX_ON_NOTFOUND' => true, 'USE_INDEX' => true, 'USE_ORM' => true))
    {
    }
    protected static function parseFilter($filter)
    {
    }
    protected static function findUsingIndex($parameters)
    {
    }
    /**
     *
     *
     * @param
     *
     * @return
     */
    protected static function findNoIndex($parameters)
    {
    }
}