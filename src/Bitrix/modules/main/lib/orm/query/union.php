<?php

namespace Bitrix\Main\ORM\Query;

/**
 * UNION handler for Query.
 *
 * @package    bitrix
 * @subpackage main
 */
class Union
{
    /** @var UnionCondition[] */
    protected $queries;
    /** @var array */
    protected $order;
    /** @var int */
    protected $limit;
    /** @var int */
    protected $offset;
    /** @var Connection */
    protected $connection;
    public function __construct(\Bitrix\Main\DB\Connection $connection)
    {
    }
    /**
     * @param UnionCondition $query
     *
     * @return $this
     */
    public function addQuery(\Bitrix\Main\ORM\Query\UnionCondition $query)
    {
    }
    /**
     * @return UnionCondition[]
     */
    public function getQueries()
    {
    }
    /**
     * @param mixed $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
    }
    /**
     * @param string $definition
     * @param string $order
     *
     * @return $this
     * @throws ArgumentException
     */
    public function addOrder($definition, $order = 'ASC')
    {
    }
    /**
     * @return array
     */
    public function getOrder()
    {
    }
    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
    }
    /**
     * @return int
     */
    public function getLimit()
    {
    }
    /**
     * @param $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
    }
    /**
     * @return int
     */
    public function getOffset()
    {
    }
}