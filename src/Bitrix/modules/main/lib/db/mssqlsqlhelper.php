<?php

namespace Bitrix\Main\DB;

class MssqlSqlHelper extends \Bitrix\Main\DB\SqlHelper
{
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
    public function getAliasLength()
    {
    }
    /**
     * Returns database specific query delimiter for batch processing.
     *
     * @return string
     */
    public function getQueryDelimiter()
    {
    }
    /**
     * Escapes special characters in a string for use in an SQL statement.
     *
     * @param string $value Value to be escaped.
     * @param integer $maxLength Limits string length if set.
     *
     * @return string
     */
    function forSql($value, $maxLength = 0)
    {
    }
    /**
     * Returns function for getting current time.
     *
     * @return string
     */
    public function getCurrentDateTimeFunction()
    {
    }
    /**
     * Returns function for getting current date without time part.
     *
     * @return string
     */
    public function getCurrentDateFunction()
    {
    }
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
    public function addSecondsToDateTime($seconds, $from = null)
    {
    }
    /**
     * Returns function cast $value to datetime database type.
     * <p>
     * $value parameter is SQL unsafe.
     *
     * @param string $value Database field or expression to cast.
     *
     * @return string
     */
    public function getDatetimeToDateFunction($value)
    {
    }
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
    public function formatDate($format, $field = null)
    {
    }
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
    public function getConcatFunction()
    {
    }
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
    public function getIsNullFunction($expression, $result)
    {
    }
    /**
     * Returns function for getting length of database field or expression.
     * <p>
     * $field parameter is SQL unsafe.
     *
     * @param string $field Database field or expression.
     *
     * @return string
     */
    public function getLengthFunction($field)
    {
    }
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
    public function getCharToDateFunction($value)
    {
    }
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
    public function getDateToCharFunction($fieldName)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @param string $fieldName
     *
     * return string
     */
    public function castToChar($fieldName)
    {
    }
    /**
     * {@inheritDoc}
     *
     * @param string $fieldName
     *
     * return string
     */
    public function softCastTextToChar($fieldName)
    {
    }
    /**
     * Returns callback to be called for a field value on fetch.
     * Used for soft conversion. For strict results @see ORM\Query\Result::setStrictValueConverters()
     *
     * @param ScalarField $field Type "source".
     *
     * @return false|callback
     */
    public function getConverter(\Bitrix\Main\ORM\Fields\ScalarField $field)
    {
    }
    /**
     * @deprecated
     * Converts string into \Bitrix\Main\Type\DateTime object.
     * <p>
     * Helper function.
     *
     * @param string $value Value fetched.
     *
     * @return null|\Bitrix\Main\Type\DateTime
     * @see \Bitrix\Main\Db\MssqlSqlHelper::getConverter
     */
    public function convertDatetimeField($value)
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
     * @deprecated
     * Converts string into \Bitrix\Main\Type\Date object.
     * <p>
     * Helper function.
     *
     * @param string $value Value fetched.
     *
     * @return \Bitrix\Main\Type\Date
     * @see \Bitrix\Main\Db\MssqlSqlHelper::getConverter
     */
    public function convertDateField($value)
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
     * @deprecated
     * Converts string into \Bitrix\Main\Type\Date object if string has datetime specific format..
     * <p>
     * Helper function.
     *
     * @param string $value Value fetched.
     *
     * @return null|\Bitrix\Main\Type\DateTime
     * @see \Bitrix\Main\Db\MssqlSqlHelper::getConverter
     */
    public function convertStringField($value)
    {
    }
    /**
     * @param string $value
     * @param null   $length
     *
     * @return Type\DateTime|string
     * @throws Main\ObjectException
     */
    public function convertFromDbString($value, $length = null)
    {
    }
    /**
     * Returns a column type according to ScalarField object.
     *
     * @param ScalarField $field Type "source".
     *
     * @return string
     */
    public function getColumnTypeByField(\Bitrix\Main\ORM\Fields\ScalarField $field)
    {
    }
    /**
     * Returns instance of a descendant from Entity\ScalarField
     * that matches database type.
     *
     * @param string $name Database column name.
     * @param mixed $type Database specific type.
     * @param array $parameters Additional information.
     *
     * @return ScalarField
     */
    public function getFieldByColumnType($name, $type, array $parameters = null)
    {
    }
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
    public function getTopSql($sql, $limit, $offset = 0)
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
    public function prepareMerge($tableName, array $primaryFields, array $insertFields, array $updateFields)
    {
    }
}