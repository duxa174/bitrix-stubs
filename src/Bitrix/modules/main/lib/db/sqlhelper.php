<?php

namespace Bitrix\Main\DB;

abstract class SqlHelper
{
    /** @var Connection $connection */
    protected $connection;
    protected $idCache;
    /**
     * @param Connection $connection Database connection.
     */
    public function __construct(\Bitrix\Main\DB\Connection $connection)
    {
    }
    /**
     * Returns an identificator escaping left character.
     *
     * @return string
     */
    public function getLeftQuote()
    {
    }
    /**
     * Returns an identificator escaping right character.
     *
     * @return string
     */
    public function getRightQuote()
    {
    }
    /**
     * Returns maximum length of an alias in a select statement
     *
     * @return integer
     */
    public abstract function getAliasLength();
    /**
     * Returns quoted identifier.
     * <p>
     * For example Title become :
     * - `Title` for MySQL
     * - "TITLE" for Oracle
     * - [Title] for Ms SQL
     * <p>
     * @param string $identifier Table or Column name.
     *
     * @return string
     * @see \Bitrix\Main\DB\SqlHelper::getLeftQuote
     * @see \Bitrix\Main\DB\SqlHelper::getRightQuote
     */
    public function quote($identifier)
    {
    }
    /**
     * Returns database specific query delimiter for batch processing.
     *
     * @return string
     */
    public abstract function getQueryDelimiter();
    /**
     * Escapes special characters in a string for use in an SQL statement.
     *
     * @param string $value Value to be escaped.
     * @param integer $maxLength Limits string length if set.
     *
     * @return string
     */
    public abstract function forSql($value, $maxLength = 0);
    /**
     * Returns function for getting current time.
     *
     * @return string
     */
    public abstract function getCurrentDateTimeFunction();
    /**
     * Returns function for getting current date without time part.
     *
     * @return string
     */
    public abstract function getCurrentDateFunction();
    /**
     * Returns function for adding seconds time interval to $from.
     * <p>
     * If $from is null or omitted, then current time is used.
     * <p>
     * $seconds and $from parameters are SQL unsafe.
     *
     * @param integer $seconds How many seconds to add.
     * @param integer $from Datetime database field of expression.
     *
     * @return string
     */
    public abstract function addSecondsToDateTime($seconds, $from = null);
    /**
     * Returns function cast $value to datetime database type.
     * <p>
     * $value parameter is SQL unsafe.
     *
     * @param string $value Database field or expression to cast.
     *
     * @return string
     */
    public abstract function getDatetimeToDateFunction($value);
    /**
     * Returns database expression for converting $field value according the $format.
     * <p>
     * Following format parts converted:
     * - YYYY   A full numeric representation of a year, 4 digits
     * - MMMM   A full textual representation of a month, such as January or March
     * - MM     Numeric representation of a month, with leading zeros
     * - MI     Minutes with leading zeros
     * - M      A short textual representation of a month, three letters
     * - DD     Day of the month, 2 digits with leading zeros
     * - HH     24-hour format of an hour with leading zeros
     * - H      24-hour format of an hour without leading zeros
     * - GG     12-hour format of an hour with leading zeros
     * - G      12-hour format of an hour without leading zeros
     * - SS     Seconds with leading zeros
     * - TT     AM or PM
     * - T      AM or PM
     * <p>
     * $field parameter is SQL unsafe.
     *
     * @param string $format Format string.
     * @param string $field Database field or expression.
     *
     * @return string
     */
    public abstract function formatDate($format, $field = null);
    /**
     * Returns function for getting part of string.
     * <p>
     * If length is null or omitted, the substring starting
     * from start until the end of the string will be returned.
     * <p>
     * $str and $from parameters are SQL unsafe.
     *
     * @param string $str Database field or expression.
     * @param integer $from Start position.
     * @param integer $length Maximum length.
     *
     * @return string
     */
    public function getSubstrFunction($str, $from, $length = null)
    {
    }
    /**
     * Returns function for concatenating database fields or expressions.
     * <p>
     * All parameters are SQL unsafe.
     *
     * @param string $field,... Database fields or expressions.
     *
     * @return string
     */
    public abstract function getConcatFunction();
    /**
     * Returns function for testing database field or expressions
     * against NULL value. When it is NULL then $result will be returned.
     * <p>
     * All parameters are SQL unsafe.
     *
     * @param string $expression Database field or expression for NULL test.
     * @param string $result Database field or expression to return when $expression is NULL.
     *
     * @return string
     */
    public abstract function getIsNullFunction($expression, $result);
    /**
     * Returns function for getting length of database field or expression.
     * <p>
     * $field parameter is SQL unsafe.
     *
     * @param string $field Database field or expression.
     *
     * @return string
     */
    public abstract function getLengthFunction($field);
    /**
     * Returns function for converting string value into datetime.
     * $value must be in YYYY-MM-DD HH:MI:SS format.
     * <p>
     * $value parameter is SQL unsafe.
     *
     * @param string $value String in YYYY-MM-DD HH:MI:SS format.
     *
     * @return string
     * @see \Bitrix\Main\DB\MssqlSqlHelper::formatDate
     */
    public abstract function getCharToDateFunction($value);
    /**
     * Returns function for converting database field or expression into string.
     * <p>
     * Result string will be in YYYY-MM-DD HH:MI:SS format.
     * <p>
     * $fieldName parameter is SQL unsafe.
     *
     * @param string $fieldName Database field or expression.
     *
     * @return string
     * @see \Bitrix\Main\DB\MssqlSqlHelper::formatDate
     */
    public abstract function getDateToCharFunction($fieldName);
    /**
     * Returns CAST expression for converting field or expression into string
     *
     * @param string $fieldName
     *
     * @return string
     */
    public abstract function castToChar($fieldName);
    /**
     * Returns expression for text field being used in group or order
     * @see \Bitrix\Main\ORM\Query\Query::buildGroup
     * @see \Bitrix\Main\ORM\Query\Query::buildOrder
     *
     * @param string $fieldName
     *
     * @return string
     */
    public abstract function softCastTextToChar($fieldName);
    /**
     * Transforms Sql according to $limit and $offset limitations.
     * <p>
     * You must specify $limit when $offset is set.
     *
     * @param string $sql Sql text.
     * @param integer $limit Maximum number of rows to return.
     * @param integer $offset Offset of the first row to return, starting from 0.
     *
     * @return string
     * @throws Main\ArgumentException
     */
    public abstract function getTopSql($sql, $limit, $offset = 0);
    /**
     * Builds the strings for the SQL INSERT command for the given table.
     *
     * @param string $tableName A table name.
     * @param array  $fields    Array("column" => $value)[].
     *
     * @param bool   $returnAsArray
     *
     * @return array (columnList, valueList, binds)
     * @throws Main\ArgumentTypeException
     * @throws SqlQueryException
     */
    public function prepareInsert($tableName, array $fields, $returnAsArray = false)
    {
    }
    /**
     * Builds the strings for the SQL UPDATE command for the given table.
     *
     * @param string $tableName A table name.
     * @param array $fields Array("column" => $value)[].
     *
     * @return array (update, binds)
     */
    public function prepareUpdate($tableName, array $fields)
    {
    }
    /**
     * Builds the strings for the SQL MERGE command for the given table.
     *
     * @param string $tableName A table name.
     * @param array $primaryFields Array("column")[] Primary key columns list.
     * @param array $insertFields Array("column" => $value)[] What to insert.
     * @param array $updateFields Array("column" => $value)[] How to update.
     *
     * @return array (merge)
     */
    public abstract function prepareMerge($tableName, array $primaryFields, array $insertFields, array $updateFields);
    /**
     * Performs additional processing of CLOB fields.
     *
     * @param ORM\Fields\ScalarField[] $tableFields Table fields.
     * @param array                    $fields      Data fields.
     *
     * @return array
     */
    protected function prepareBinds(array $tableFields, array $fields)
    {
    }
    /**
     * Builds the string for the SQL assignment operation of the given column.
     *
     * @param string $tableName A table name.
     * @param string $columnName A column name.
     * @param string $value A value to assign.
     *
     * @return string
     */
    public function prepareAssignment($tableName, $columnName, $value)
    {
    }
    /**
     * Converts values to the string according to the column type to use it in a SQL query.
     *
     * @param mixed                $value Value to be converted.
     * @param ORM\Fields\IReadable $field Type "source".
     *
     * @return string Value to write to column.
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function convertToDb($value, \Bitrix\Main\ORM\Fields\IReadable $field = null)
    {
    }
    /**
     * Returns $value converted to an type according to $field type.
     * <p>
     * For example if $field is Entity\DatetimeField then returned value will be instance of Type\DateTime.
     *
     * @param mixed                $value Value to be converted.
     * @param ORM\Fields\IReadable $field Type "source".
     *
     * @return mixed
     */
    public function convertFromDb($value, \Bitrix\Main\ORM\Fields\IReadable $field)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     *
     * @return string Value to write to column.
     */
    public function convertToDbInteger($value)
    {
    }
    /**
     * @param $value
     *
     * @return int
     */
    public function convertFromDbInteger($value)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     * @param int|null $scale Precise to round float value.
     *
     * @return string Value to write to column.
     */
    public function convertToDbFloat($value, $scale = null)
    {
    }
    /**
     * @param      $value
     * @param int $scale
     *
     * @return float
     */
    public function convertFromDbFloat($value, $scale = null)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     * @param int|null $length Maximum acceptable length of the value
     *
     * @return string Value to write to column.
     */
    public function convertToDbString($value, $length = null)
    {
    }
    /**
     * @param string $value
     * @param int $length
     *
     * @return string
     */
    public function convertFromDbString($value, $length = null)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     *
     * @return string Value to write to column.
     */
    public function convertToDbText($value)
    {
    }
    /**
     * @param $value
     *
     * @return string
     */
    public function convertFromDbText($value)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     *
     * @return string Value to write to column.
     * @throws Main\ArgumentTypeException
     */
    public function convertToDbDate($value)
    {
    }
    /**
     * @param $value
     *
     * @return Type\Date
     * @throws Main\ObjectException
     */
    public function convertFromDbDate($value)
    {
    }
    /**
     * Converts value to the string according to the data type to use it in a SQL query.
     *
     * @param mixed $value Value to be converted.
     *
     * @return string Value to write to column.
     * @throws Main\ArgumentTypeException
     */
    public function convertToDbDateTime($value)
    {
    }
    /**
     * @param $value
     *
     * @return Type\DateTime
     * @throws Main\ObjectException
     */
    public function convertFromDbDateTime($value)
    {
    }
    /**
     * Returns callback to be called for a field value on fetch.
     * Used for soft conversion. For strict results @see ORM\Query\Result::setStrictValueConverters()
     *
     * @param ORM\Fields\ScalarField $field Type "source".
     *
     * @return false|callback
     */
    public function getConverter(\Bitrix\Main\ORM\Fields\ScalarField $field)
    {
    }
    /**
     * Returns a column type according to ScalarField object.
     *
     * @param \Bitrix\Main\ORM\Fields\ScalarField $field Type "source".
     *
     * @return string
     */
    public abstract function getColumnTypeByField(\Bitrix\Main\ORM\Fields\ScalarField $field);
    /**
     * Returns instance of a descendant from Entity\ScalarField
     * that matches database type.
     *
     * @param string $name Database column name.
     * @param mixed $type Database specific type.
     * @param array $parameters Additional information.
     *
     * @return \Bitrix\Main\ORM\Fields\ScalarField
     */
    public abstract function getFieldByColumnType($name, $type, array $parameters = null);
    /**
     * Returns ascending order specifier for ORDER BY clause.
     *
     * @return string
     */
    public function getAscendingOrder()
    {
    }
    /**
     * Returns descending order specifier for ORDER BY clause.
     *
     * @return string
     */
    public function getDescendingOrder()
    {
    }
}