<?php

namespace Bitrix\Main\Diag;

class SqlTrackerQuery implements \ArrayAccess
{
    /** @var string */
    protected $sql = "";
    /** @var array|null */
    protected $binds = null;
    /** @var string */
    protected $state = "";
    /** @var string */
    protected $node = "";
    /** @var float */
    protected $startTime = 0.0;
    /** @var float */
    protected $finishTime = 0.0;
    /** @var float */
    protected $time = 0.0;
    /** @var array|null */
    protected $trace = null;
    /** @var SqlTracker */
    protected $tracker;
    /**
     * @param SqlTracker $tracker This sql tracker.
     */
    public function __construct(\Bitrix\Main\Diag\SqlTracker $tracker)
    {
    }
    /**
     * Starts sql timer.
     *
     * @param string $sql Query text.
     * @param array $binds Binded variables used with query.
     *
     * @return void
     */
    public function startQuery($sql, array $binds = null)
    {
    }
    /**
     * Ends sql timer.
     *
     * @param integer $skip How many backtrace skip. By default 3.
     *
     * @return void
     */
    public function finishQuery($skip = 3)
    {
    }
    /**
     * Resets sql timer start.
     * combined with refinishQuery allows additional time to be included into execution.
     *
     * @return void
     * @see \Bitrix\Main\Diag\SqlTrackerQuery::refinishQuery
     */
    public function restartQuery()
    {
    }
    /**
     * Finishes query timer one more time.
     * Use with restartQuery.
     *
     * @return void
     * @see \Bitrix\Main\Diag\SqlTrackerQuery::restartQuery
     */
    public function refinishQuery()
    {
    }
    /**
     * Returns tracked sql text.
     *
     * @return string
     */
    public function getSql()
    {
    }
    /**
     * Sets tracked sql text.
     * Returns the object for call chaining.
     *
     * @param string $sql Sql text.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setSql($sql)
    {
    }
    /**
     * Returns sql binds used for query execution.
     *
     * @return array|null
     */
    public function getBinds()
    {
    }
    /**
     * Sets tracked sql binds.
     * Returns the object for call chaining.
     *
     * @param array $binds Sql binds.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setBinds(array $binds)
    {
    }
    /**
     * Returns page state of the query.
     *
     * @return string
     */
    public function getState()
    {
    }
    /**
     * Sets tracked sql page state.
     * Returns the object for call chaining.
     *
     * @param string $state Page state.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setState($state)
    {
    }
    /**
     * Returns sql connection node id of the query.
     *
     * @return string
     */
    public function getNode()
    {
    }
    /**
     * Sets tracked sql connection node id.
     * Returns the object for call chaining.
     *
     * @param string $node Cluster node identifier.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setNode($node)
    {
    }
    /**
     * Returns sql execution time.
     *
     * @return float
     */
    public function getTime()
    {
    }
    /**
     * Sets tracked sql execution time.
     * Returns the object for call chaining.
     *
     * @param float $time Sql execution time in seconds.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setTime($time)
    {
    }
    /**
     * Increments sql execution time.
     *
     * @param float $time Time in seconds to add.
     *
     * @return void
     */
    public function addTime($time)
    {
    }
    /**
     * Returns backtrace of the query.
     *
     * @return array|null
     */
    public function getTrace()
    {
    }
    /**
     * Sets tracked sql backtrace.
     * Returns the object for call chaining.
     *
     * @param array $trace Query backtrace.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery
     */
    public function setTrace(array $trace)
    {
    }
    /**
     * Whether a offset exists.
     * Part of ArrayAccess implementation made for backward compatibility.
     *
     * @param mixed $offset Array key.
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Offset to retrieve.
     * Part of ArrayAccess implementation made for backward compatibility.
     *
     * @param mixed $offset Array key.
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Offset to set.
     * Part of ArrayAccess implementation made for backward compatibility.
     *
     * @param mixed $offset Array key.
     * @param mixed $value Array value.
     *
     * @return mixed
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Offset to unset.
     * Part of ArrayAccess implementation made for backward compatibility.
     *
     * @param mixed $offset Array key.
     *
     * @return mixed
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * Removes and formats memory consuming function arguments in the backtrace.
     *
     * @param array $trace Backtrace.
     *
     * @return array
     */
    protected function filterTrace($trace)
    {
    }
}