<?php

namespace Bitrix\Catalog\Product;

/**
 * Class Search
 * Provides various useful methods for product search.
 *
 * @package Bitrix\Catalog\Product
 */
class Search
{
    protected static $catalogList = array();
    /**
     * Fill parameters before create search index.
     *
     * @param array $fields		Item fields.
     * @return array
     */
    public static function onBeforeIndex($fields)
    {
    }
}