<?php

namespace Bitrix\Sender\Integration\Crm\Connectors;

/**
 * Class QueryCount
 * @package Bitrix\Sender\Integration\Crm\Connectors
 */
class QueryCount
{
    /**
     * Get unionized count.
     *
     * @param Entity\Query[] $queries Queries.
     * @param integer $dataTypeId Data type ID.
     * @return array
     */
    public static function getUnionizedCount(array $queries, $dataTypeId = null)
    {
    }
    /**
     * Get count.
     *
     * @param Entity\Query $query Query.
     * @param integer $dataTypeId Data type ID.
     * @return array
     */
    public static function getCount(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    /**
     * Execute query.
     *
     * @param Entity\Query $query Query.
     * @param integer $dataTypeId Data type ID.
     *
     * @return array
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function exec(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    /**
     * Prepare query.
     *
     * @param Entity\Query $query Query.
     * @param integer $dataTypeId Data type ID.
     * @return Entity\Query
     */
    private static function prepare(\Bitrix\Main\Entity\Query $query, $dataTypeId = null)
    {
    }
    private static function getTypes()
    {
    }
}