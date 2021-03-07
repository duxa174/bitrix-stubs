<?php

namespace Bitrix\Main\DB;

/**
 * Class Result is the abstract base class for representing
 * database query result.
 * <p>
 * It has ability to transform raw data populated from
 * the database into useful associative arrays with
 * some fields unserialized and some presented as Datetime
 * objects or other changes.
 * <p>
 * It also supports query debugging by providing {@link \Bitrix\Main\Diag\SqlTracker}
 * with timing information.
 *
 * @package Bitrix\Main\DB
 */
abstract class Result implements \IteratorAggregate
{
    /** @var \Bitrix\Main\DB\Connection */
    protected $connection;
    /** @var resource */
    protected $resource;
    /** @var \Bitrix\Main\Diag\SqlTrackerQuery */
    protected $trackerQuery = null;
    /** @var callable[] */
    protected $converters = array();
    /** @var string[] */
    protected $serializedFields = array();
    /** @var string[] */
    protected $replacedAliases = array();
    /** @var callable[] */
    protected $fetchDataModifiers = array();
    /** @var int */
    protected $count;
    /**
     * @param resource $result Database-specific query result.
     * @param Connection $dbConnection Connection object.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Helps to collect debug information.
     */
    public function __construct($result, \Bitrix\Main\DB\Connection $dbConnection = null, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null)
    {
    }
    /**
     * Returns database-specific resource of this result.
     *
     * @return null|resource
     */
    public function getResource()
    {
    }
    /**
     * Sets list of aliased columns.
     * This allows to overcome database limits on length of the column names.
     *
     * @param array[string]string $replacedAliases Aliases map from tech to human.
     *
     * @return void
     * @see \Bitrix\Main\Db\Result::addReplacedAliases
     */
    public function setReplacedAliases(array $replacedAliases)
    {
    }
    /**
     * Extends list of aliased columns.
     *
     * @param array[string]string $replacedAliases Aliases map from tech to human.
     *
     * @return void
     * @see \Bitrix\Main\Db\Result::setReplacedAliases
     */
    public function addReplacedAliases(array $replacedAliases)
    {
    }
    /**
     * Sets internal list of fields which will be unserialized on fetch.
     *
     * @param array $serializedFields List of fields.
     *
     * @return void
     */
    public function setSerializedFields(array $serializedFields)
    {
    }
    /**
     * Modifier should accept once fetched array as an argument, then modify by link or return new array:
     * - function (&$data) { $data['AGE'] -= 7; }
     * - function ($data) { $data['AGE'] -= 7; return $data; }
     *
     * @param callable $fetchDataModifier Valid callback.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    public function addFetchDataModifier($fetchDataModifier)
    {
    }
    /**
     * Fetches one row of the query result and returns it in the associative array of raw DB data or false on empty data.
     *
     * @return array|false
     */
    public function fetchRaw()
    {
    }
    /**
     * Fetches one row of the query result and returns it in the associative array of converted data or false on empty data.
     *
     * @param \Bitrix\Main\Text\Converter $converter Optional converter to encode data on fetching.
     *
     * @return array|false
     */
    public function fetch(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    /**
     * Fetches all the rows of the query result and returns it in the array of associative arrays.
     * Returns an empty array if query has no data.
     *
     * @param \Bitrix\Main\Text\Converter $converter Optional converter to encode data on fetching.
     *
     * @return array
     */
    public function fetchAll(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    /**
     * Returns an array of fields according to columns in the result.
     *
     * @return \Bitrix\Main\ORM\Fields\ScalarField[]
     */
    public abstract function getFields();
    /**
     * Returns the number of rows in the result.
     *
     * @return int
     */
    public abstract function getSelectedRowsCount();
    /**
     * Returns next result row or false.
     *
     * @return array|false
     */
    protected abstract function fetchRowInternal();
    /**
     * Returns current query tracker.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery|null
     */
    public function getTrackerQuery()
    {
    }
    /**
     * @return callable[]
     */
    public function getConverters()
    {
    }
    /**
     * @param callable[] $converters
     */
    public function setConverters($converters)
    {
    }
    /**
     * Sets record count.
     * @param int $n
     */
    public function setCount($n)
    {
    }
    /**
     * Returns record count. It's required to set record count explicitly before.
     * @return int
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public function getCount()
    {
    }
    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
    }
}