<?php

namespace Bitrix\Sender\Integration\Crm\Connectors;

/**
 * Class QueryData
 * @package Bitrix\Sender\Integration\Crm\Connectors
 */
class QueryData
{
    /**
     * Get unionized data.
     *
     * @param Entity\Query[] $queries Queries.
     * @param integer $dataTypeId Data type ID.
     * @param PageNavigation $nav Nav.
     * @return Entity\Query
     */
    public static function getUnionizedQuery(array $queries, $dataTypeId = null, \Bitrix\Sender\UI\PageNavigation $nav = null)
    {
    }
    /**
     * Get unionized data.
     *
     * @param Entity\Query $query Query.
     * @return Result
     */
    public static function getUnionizedData(\Bitrix\Main\Entity\Query $query)
    {
    }
    private static function prepare(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    private static function exec(\Bitrix\Main\Entity\Query $query)
    {
    }
    /**
     * Get data.
     *
     * @param Entity\Query $query Query.
     * @param integer $dataTypeId Data type ID.
     * @return Result
     */
    public static function getData(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    protected static function getSelectFields($dataTypeId = null)
    {
    }
}