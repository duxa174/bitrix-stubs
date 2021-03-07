<?php

namespace Bitrix\Main\ORM\Query;

/**
 * Query builder for Entities.
 *
 * Virtual WHERE methods (proxy to Filter):
 *
 * @method $this where(...$filter)
 * @see Filter::where()
 *
 * @method $this whereNot(...$filter)
 * @see Filter::whereNot()
 *
 * @method $this whereColumn(...$filter)
 * @see Filter::whereColumn()
 *
 * @method $this whereNull($column)
 * @see Filter::whereNull()
 *
 * @method $this whereNotNull($column)
 * @see Filter::whereNotNull()
 *
 * @method $this whereIn($column, $values)
 * @see Filter::whereIn()
 *
 * @method $this whereNotIn($column, $values)
 * @see Filter::whereNotIn()
 *
 * @method $this whereBetween($column, $valueMin, $valueMax)
 * @see Filter::whereBetween()
 *
 * @method $this whereNotBetween($column, $valueMin, $valueMax)
 * @see Filter::whereNotBetween()
 *
 * @method $this whereLike($column, $value)
 * @see Filter::whereLike()
 *
 * @method $this whereNotLike($column, $value)
 * @see Filter::whereNotLike()
 *
 * @method $this whereExists($query)
 * @see Filter::whereExists()
 *
 * @method $this whereNotExists($query)
 * @see Filter::whereNotExists()
 *
 * @method $this whereMatch($column, $value)
 * @see Filter::whereMatch()
 *
 * @method $this whereNotMatch($column, $value)
 * @see Filter::whereNotMatch()
 *
 * Virtual HAVING methods (proxy to Filter):
 *
 * @method $this having(...$filter)
 * @see Filter::where()
 *
 * @method $this havingNot(...$filter)
 * @see Filter::whereNot()
 *
 * @method $this havingColumn(...$filter)
 * @see Filter::whereColumn()
 *
 * @method $this havingNull($column)
 * @see Filter::whereNull()
 *
 * @method $this havingNotNull($column)
 * @see Filter::whereNotNull()
 *
 * @method $this havingIn($column, $values)
 * @see Filter::whereIn()
 *
 * @method $this havingNotIn($column, $values)
 * @see Filter::whereNotIn()
 *
 * @method $this havingBetween($column, $valueMin, $valueMax)
 * @see Filter::whereBetween()
 *
 * @method $this havingNotBetween($column, $valueMin, $valueMax)
 * @see Filter::whereNotBetween()
 *
 * @method $this havingLike($column, $value)
 * @see Filter::whereLike()
 *
 * @method $this havingNotLike($column, $value)
 * @see Filter::whereNotLike()
 *
 * @method $this havingExists($query)
 * @see Filter::whereExists()
 *
 * @method $this havingNotExists($query)
 * @see Filter::whereNotExists()
 *
 * @package Bitrix\Main\ORM
 */
class Query
{
    /** @var Entity */
    protected $entity;
    protected $select = array(), $group = array(), $order = array(), $limit = null, $offset = null, $countTotal = null;
    // deprecated array filter format
    protected $filter = array(), $where = array(), $having = array();
    /** @var Filter */
    protected $filterHandler;
    /** @var Filter */
    protected $whereHandler;
    /** @var Filter */
    protected $havingHandler;
    /**
     * @var Chain[]
     */
    protected $select_chains = array(), $group_chains = array(), $order_chains = array();
    /**
     * @var Chain[]
     */
    protected $filter_chains = array(), $where_chains = array(), $having_chains = array();
    /**
     * @var Chain[]
     */
    protected $select_expr_chains = array(), $having_expr_chains = array(), $hidden_chains = array();
    // all expr "build_from" elements;
    /**
     * Fields in result that are visible for fetchObject, but invisible for array
     * @var string[]
     */
    protected $forcedObjectPrimaryFields;
    /** @var Chain[] */
    protected $runtime_chains;
    /** @var Chain[] */
    protected $global_chains = array();
    // keying by both def and alias
    /** @var string[] */
    protected $query_build_parts;
    /** @var Expression */
    protected static $expressionHelper;
    /**
     * Enable or Disable data doubling for 1:N relations in query filter
     * If disabled, 1:N entity fields in filter will be transformed to exists() subquery
     * @var bool
     */
    protected $data_doubling_off = false;
    /**
     * Enable or disable handling private fields
     * @see ScalarField::$is_private
     * @var bool
     */
    protected $private_fields_on = false;
    /** @var string */
    protected $table_alias_postfix = '';
    /** @var string Custom alias for the table of the init entity  */
    protected $custom_base_table_alias = null;
    /** @var array */
    protected $join_map = array();
    /** @var array list of used joins */
    protected $join_registry;
    /** @var Union */
    protected $unionHandler;
    /** @var bool */
    protected $is_distinct = false;
    /** @var bool */
    protected $is_executing = false;
    /** @var string Last executed SQL query */
    protected static $last_query;
    /** @var array Replaced field aliases */
    protected $replaced_aliases;
    /** @var array Replaced table aliases */
    protected $replaced_taliases;
    /** @var int */
    protected $uniqueAliasCounter = 0;
    /** @var callable[] */
    protected $selectFetchModifiers = array();
    protected $cacheTtl = 0, $cacheJoins = false;
    /**
     * @param Entity|Query|string $source
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function __construct($source)
    {
    }
    /**
     * @param $method
     * @param $arguments
     *
     * @return $this
     * @throws Main\SystemException
     */
    public function __call($method, $arguments)
    {
    }
    /**
     * Returns an array of fields for SELECT clause
     *
     * @return array
     */
    public function getSelect()
    {
    }
    /**
     * Sets a list of fields for SELECT clause
     *
     * @param array $select
     * @return Query
     */
    public function setSelect(array $select)
    {
    }
    /**
     * Adds a field for SELECT clause
     *
     * @param mixed $definition Field
     * @param string $alias Field alias like SELECT field AS alias
     * @return $this
     */
    public function addSelect($definition, $alias = '')
    {
    }
    /**
     * Returns an array of filters for WHERE clause
     *
     * @return array
     */
    public function getFilter()
    {
    }
    /**
     * Sets a list of filters for WHERE clause
     *
     * @param array $filter
     * @return $this
     */
    public function setFilter(array $filter)
    {
    }
    /**
     * Adds a filter for WHERE clause
     *
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function addFilter($key, $value)
    {
    }
    /**
     * @return Filter
     */
    public function getFilterHandler()
    {
    }
    /**
     * Returns an array of fields for GROUP BY clause
     *
     * @return array
     */
    public function getGroup()
    {
    }
    /**
     * Sets a list of fields in GROUP BY clause
     *
     * @param mixed $group
     * @return $this
     */
    public function setGroup($group)
    {
    }
    /**
     * Adds a field to the list of fields for GROUP BY clause
     *
     * @param $group
     * @return $this
     */
    public function addGroup($group)
    {
    }
    /**
     * Returns an array of fields for ORDER BY clause
     *
     * @return array
     */
    public function getOrder()
    {
    }
    /**
     * Sets a list of fields for ORDER BY clause.
     * Format:
     *   setOrder('ID') -- ORDER BY `ID` ASC
     *   setOrder(['ID' => 'DESC', 'NAME' => 'ASC]) -- ORDER BY `ID` DESC, `NAME` ASC
     *
     * @param mixed $order
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function setOrder($order)
    {
    }
    /**
     * Adds a filed to the list of fields for ORDER BY clause
     *
     * @param string $definition
     * @param string $order
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function addOrder($definition, $order = 'ASC')
    {
    }
    /**
     * Returns a limit
     *
     * @return null|int
     */
    public function getLimit()
    {
    }
    /**
     * Sets a limit for LIMIT n clause
     *
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
    }
    /**
     * Returns an offset
     *
     * @return null|int
     */
    public function getOffset()
    {
    }
    /**
     * Sets an offset for LIMIT n, m clause
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
    }
    public function countTotal($count = null)
    {
    }
    /**
     * Puts additional query to union with current.
     * Accepts one ore more Query / SqlExpression.
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function union()
    {
    }
    /**
     * Puts additional query to union (all) with current.
     * Accepts one ore more Query / SqlExpression.
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function unionAll()
    {
    }
    /**
     * General order for all the union queries.
     * Has the same format as Query::setOrder().
     * @see Query::setOrder()
     *
     * @param $order
     *
     * @return $this
     * @throws Main\SystemException
     */
    public function setUnionOrder($order)
    {
    }
    /**
     * General order for all the union queries.
     * Has the same format as Query::addOrder().
     * @see Query::addOrder()
     *
     * @param string $definition
     * @param string $order
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function addUnionOrder($definition, $order = 'ASC')
    {
    }
    /**
     * General limit for all the union queries.
     *
     * @param $limit
     *
     * @return $this
     * @throws Main\SystemException
     */
    public function setUnionLimit($limit)
    {
    }
    /**
     * General offset for all the union queries.
     *
     * @param $offset
     *
     * @return $this
     * @throws Main\SystemException
     */
    public function setUnionOffset($offset)
    {
    }
    /**
     * @see disableDataDoubling
     *
     * @return $this
     */
    public function enableDataDoubling()
    {
    }
    /**
     * Replaces all 1:N relations in filter to ID IN (subquery SELECT ID FROM <1:N relation>)
     * Available for Entities with 1 primary field only
     *
     * @return $this
     */
    public function disableDataDoubling()
    {
    }
    /**
     * Allows private fields in query
     *
     * @return $this
     */
    public function enablePrivateFields()
    {
    }
    /**
     * Restricts private fields in query
     *
     * @return $this
     */
    public function disablePrivateFields()
    {
    }
    /**
     * @return bool
     */
    public function isPrivateFieldsEnabled()
    {
    }
    protected function checkForPrivateFields()
    {
    }
    /**
     * @param Field|Main\ORM\Fields\IReadable $field
     *
     * @return bool
     * @throws Main\ArgumentException
     * @throws SystemException
     */
    public static function isFieldPrivate($field)
    {
    }
    /**
     * Adds a runtime field (being created dynamically, opposite to being described statically in the entity map)
     *
     * @param string|null $name
     * @param array|Field $fieldInfo
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function registerRuntimeField($name, $fieldInfo = null)
    {
    }
    public function setTableAliasPostfix($postfix)
    {
    }
    public function getTableAliasPostfix()
    {
    }
    /**
     * Sets a custom alias for the table of the init entity
     *
     * @param string $alias
     *
     * @return $this
     */
    public function setCustomBaseTableAlias($alias)
    {
    }
    /**
     * Returns new instance of Filter.
     *
     * Usage:
     *   Query::filter()->where(...)
     *
     * Alternatively short calls Query::where* can be used.
     * @see Query::where()
     *
     * @return Filter
     */
    public static function filter()
    {
    }
    /**
     * Used to create ExpressionField in a short way.
     * @see Filter::where()
     *
     * @return Expression
     */
    public static function expr()
    {
    }
    /**
     * Builds and executes the query and returns the result
     *
     * @return Result
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function exec()
    {
    }
    /**
     * Short alias for $result->fetch()
     *
     * @param Main\Text\Converter|null $converter
     *
     * @return array|false
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function fetch(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    /**
     * Short alias for $result->fetchAll()
     *
     * @param Main\Text\Converter|null $converter
     *
     * @return array
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function fetchAll(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    /**
     * Short alias for $result->fetchObject()
     *
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function fetchObject()
    {
    }
    /**
     * Short alias for $result->fetchCollection()
     *
     * @return null Actual type should be annotated by orm:annotate
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function fetchCollection()
    {
    }
    protected function ensurePrimarySelect()
    {
    }
    /**
     * @param      $definition
     * @param null $alias
     *
     * @return $this
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function addToSelectChain($definition, $alias = null)
    {
    }
    /**
     * @param        $filter
     * @param string $section
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function setFilterChains(&$filter, $section = 'filter')
    {
    }
    /**
     * @param Filter $where
     * @param string $section
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function setFilterHandlerChains(\Bitrix\Main\ORM\Query\Filter\ConditionTree $where, $section = 'filter')
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function divideFilter()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function divideFilterHandler()
    {
    }
    /**
     * @param $filter
     *
     * @return bool
     * @throws Main\SystemException
     */
    protected function checkFilterAggregation($filter)
    {
    }
    /**
     * @param Filter $filter
     *
     * @return bool
     * @throws Main\SystemException
     */
    protected function checkFilterHandlerAggregation(\Bitrix\Main\ORM\Query\Filter\ConditionTree $filter)
    {
    }
    /**
     * @param Filter $filter
     * @param        $section
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function rewriteDataDoubling(\Bitrix\Main\ORM\Query\Filter\ConditionTree $filter, $section)
    {
    }
    /**
     * @param $definition
     *
     * @throws Main\SystemException
     */
    protected function addToGroupChain($definition)
    {
    }
    /**
     * @param $definition
     *
     * @throws Main\SystemException
     */
    protected function addToOrderChain($definition)
    {
    }
    /**
     * @param null $chains
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function buildJoinMap($chains = null)
    {
    }
    protected function buildSelect()
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    protected function buildJoin()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function buildWhere()
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    protected function buildGroup()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function buildHaving()
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    protected function buildOrder()
    {
    }
    /**
     * @param bool $forceObjectPrimary Add missing primaries to select
     *
     * @return mixed|string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function buildQuery($forceObjectPrimary = true)
    {
    }
    /**
     * @param $filter
     *
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function getFilterCswFields(&$filter)
    {
    }
    /**
     * @param $reference
     * @param $alias_this
     * @param $alias_ref
     * @param $baseDefinition
     * @param $refDefinition
     * @param $isBackReference
     *
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function prepareJoinReference($reference, $alias_this, $alias_ref, $baseDefinition, $refDefinition, $isBackReference)
    {
    }
    /**
     * @param Filter $reference
     * @param        $alias_this
     * @param        $alias_ref
     * @param        $baseDefinition
     * @param        $refDefinition
     * @param        $isBackReference
     * @param        $firstCall
     *
     * @return Filter
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    protected function prepareJoinFilterReference(\Bitrix\Main\ORM\Query\Filter\ConditionTree $reference, $alias_this, $alias_ref, $baseDefinition, $refDefinition, $isBackReference, $firstCall = true)
    {
    }
    protected function getJoinCswFields($reference)
    {
    }
    /**
     * @param $chain
     *
     * @return bool
     * @throws Main\SystemException
     */
    protected function checkChainsAggregation($chain)
    {
    }
    protected function checkChainsDistinct($chain)
    {
    }
    public function hasAggregation()
    {
    }
    public function setDistinct($distinct = true)
    {
    }
    public function hasDistinct()
    {
    }
    /**
     * The most magic method. Do not edit without strong need, and for sure run tests after.
     *
     * @param Chain $chain
     * @param array $storages
     *
     * @return Chain[]
     * @throws Main\SystemException
     */
    protected function collectExprChains(\Bitrix\Main\ORM\Query\Chain $chain, $storages = array('hidden'))
    {
    }
    /**
     * @return Union
     * @throws Main\SystemException
     */
    protected function getUnionHandler()
    {
    }
    public function registerChain($section, \Bitrix\Main\ORM\Query\Chain $chain, $opt_key = null)
    {
    }
    /**
     * @param      $key
     * @param bool $force_create
     *
     * @return Chain|bool
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function getRegisteredChain($key, $force_create = false)
    {
    }
    protected function getUniqueAlias()
    {
    }
    public function booleanStrongEqualityCallback($field, $operation, $value)
    {
    }
    public function nullEqualityCallback(
        $field,
        $operation,
        /** @noinspection PhpUnusedParameterInspection */
        $value
    )
    {
    }
    public function dataDoublingCallback(
        $field,
        /** @noinspection PhpUnusedParameterInspection */
        $operation,
        $value
    )
    {
    }
    /**
     * @param $query
     *
     * @return Main\DB\ArrayResult|Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    protected function query($query)
    {
    }
    public function queryCountTotal()
    {
    }
    /**
     * Being called in Db\Result as a data fetch modifier
     * @param $data
     */
    public function fetchDataModificationCallback(&$data)
    {
    }
    /**
     * Check if fetch data modification required, also caches modifier-callbacks
     * @return bool
     * @throws Main\SystemException
     */
    public function isFetchModificationRequired()
    {
    }
    /**
     * @param $query
     *
     * @return array
     * @throws Main\SystemException
     */
    protected function replaceSelectAliases($query)
    {
    }
    /**
     * @param $source
     *
     * @return string
     * @throws Main\SystemException
     */
    public function quoteTableSource($source)
    {
    }
    public function __clone()
    {
    }
    /**
     * @return bool
     * @throws Main\SystemException
     */
    public function hasBackReference()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getGroupChains()
    {
    }
    /**
     * @return array
     */
    public function getHiddenChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getHavingChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getFilterChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getOrderChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getSelectChains()
    {
    }
    /**
     * @return array|Chain[]
     */
    public function getWhereChains()
    {
    }
    /**
     * @return Chain[]
     */
    public function getRuntimeChains()
    {
    }
    public function getJoinMap()
    {
    }
    /**
     * Builds and returns SQL query string
     *
     * @param bool $forceObjectPrimary
     *
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function getQuery($forceObjectPrimary = false)
    {
    }
    /**
     * Returns last executed query string
     *
     * @return string
     */
    public static function getLastQuery()
    {
    }
    public function getEntity()
    {
    }
    /**
     * Builds SQL filter conditions for WHERE.
     * Useful for external calls: building SQL for mass UPDATEs or DELETEs
     *
     * @param Entity       $entity
     * @param array|Filter $filter the same format as for setFilter/where
     *
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function buildFilterSql(\Bitrix\Main\ORM\Entity $entity, $filter)
    {
    }
    /**
     * @param bool $withPostfix
     *
     * @return string
     * @throws Main\SystemException
     */
    public function getInitAlias($withPostfix = true)
    {
    }
    public function getReplacedAliases()
    {
    }
    /*
     * Sets cache TTL in seconds.
     * @param int $ttl
     * @return $this
     */
    public function setCacheTtl($ttl)
    {
    }
    /**
     * Enables or disables caching of queries with joins.
     * @param bool $mode
     * @return $this
     */
    public function cacheJoins($mode)
    {
    }
    public function dump()
    {
    }
}