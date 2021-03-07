<?php

namespace Bitrix\Main\DB;

/**
 * Class ArrayResult is for presenting an array as database result
 * with fetch() navigation.
 *
 * @package Bitrix\Main\DB
 */
class ArrayResult extends \Bitrix\Main\DB\Result
{
    /** @var array */
    protected $resource;
    /**
     * @param array $result Array of arrays.
     */
    public function __construct($result)
    {
    }
    /**
     * Returns the number of rows in the result.
     *
     * @return integer
     */
    public function getSelectedRowsCount()
    {
    }
    /**
     * Returns null because there is no way to know the fields.
     *
     * @return null
     */
    public function getFields()
    {
    }
    /**
     * Returns next result row or false.
     *
     * @return array|false
     */
    protected function fetchRowInternal()
    {
    }
}