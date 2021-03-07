<?php

namespace Bitrix\Main\ORM\Query;

/**
 * UNION container to be used in Query.
 *
 * @package    bitrix
 * @subpackage main
 */
class UnionCondition
{
    /** @var Query|SqlExpression */
    protected $subQuery;
    /** @var bool */
    protected $all;
    /**
     * @param Query|SqlExpression $subQuery
     * @param bool                $unionAll
     *
     * @throws ArgumentException
     */
    public function __construct($subQuery, $unionAll = false)
    {
    }
    /**
     * @return SqlExpression|Query
     */
    public function getSubQuery()
    {
    }
    /**
     * @param SqlExpression|Query $subQuery
     */
    public function setSubQuery($subQuery)
    {
    }
    /**
     * @return bool
     */
    public function isAll()
    {
    }
    /**
     * @param bool $all
     */
    public function setAll($all)
    {
    }
    /**
     * @param bool $forceObjectPrimary
     *
     * @return string
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function getSql($forceObjectPrimary = false)
    {
    }
    /**
     * @param bool $forceObjectPrimary
     *
     * @return string
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function getSubQuerySql($forceObjectPrimary = false)
    {
    }
}