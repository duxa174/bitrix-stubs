<?php

class CAllSQLWhere
{
    const FT_MIN_TOKEN_SIZE = 3;
    var $fields = array();
    var $c_joins = array();
    var $l_joins = array();
    var $bDistinctReqired = \false;
    static $operations = array(
        "!><" => "NB",
        //not between
        "!=%" => "NM",
        //not Identical by like
        "!%=" => "NM",
        //not Identical by like
        "!==" => "SN",
        // strong negation for boolean and null
        "!=" => "NI",
        //not Identical
        "!%" => "NS",
        //not substring
        "><" => "B",
        //between
        ">=" => "GE",
        //greater or equal
        "<=" => "LE",
        //less or equal
        "=%" => "M",
        //Identical by like
        "%=" => "M",
        //Identical by like
        "!@" => "NIN",
        //not in
        "==" => "SE",
        // strong equality for boolean and null
        "=" => "I",
        //Identical
        "%" => "S",
        //substring
        "?" => "?",
        //logical
        ">" => "G",
        //greater
        "<" => "L",
        //less
        "!" => "N",
        // not field LIKE val
        "@" => "IN",
        // IN (new SqlExpression)
        "*" => "FT",
        // partial full text match
        "*=" => "FTI",
        // identical full text match
        "*%" => "FTL",
    );
    function _Upper($field)
    {
    }
    function _Empty($field)
    {
    }
    function _NotEmpty($field)
    {
    }
    function _StringEQ($field, $sql_value)
    {
    }
    function _StringNotEQ($field, $sql_value)
    {
    }
    function _StringIN($field, $sql_values)
    {
    }
    function _StringNotIN($field, $sql_values)
    {
    }
    function _ExprEQ($field, $val)
    {
    }
    function _ExprNotEQ($field, $val)
    {
    }
    function _NumberIN($field, $sql_values)
    {
    }
    function _NumberNotIN($field, $sql_values)
    {
    }
    /**
     * @deprecated Use \Bitrix\Main\ORM\Query\Filter\Helper::splitWords()
     * @param string $string
     * @return array
     */
    public static function splitWords($string)
    {
    }
    /**
     * @deprecated Use \Bitrix\Main\ORM\Query\Filter\Helper::getMinTokenSize()
     * @return int
     */
    public static function GetMinTokenSize()
    {
    }
    public function match($field, $fieldValue, $wildcard)
    {
    }
    public function matchLike($field, $fieldValue)
    {
    }
    function AddFields($arFields)
    {
    }
    function SetFields($arFields)
    {
    }
    public function MakeOperation($key)
    {
    }
    public static function getOperationByCode($code)
    {
    }
    function GetQuery($arFilter)
    {
    }
    function GetQueryEx($arFilter, &$arJoins, $level = 0)
    {
    }
    function GetJoins()
    {
    }
    public static function ForLIKE($str)
    {
    }
    function addIntFilter(&$result, $isMultiple, $FIELD_NAME, $operation, $value)
    {
    }
    function addFloatFilter(&$result, $isMultiple, $FIELD_NAME, $operation, $value)
    {
    }
    function addStringFilter(&$result, $isMultiple, $FIELD_NAME, $operation, $value)
    {
    }
    function addDateFilter(&$result, $isMultiple, $FIELD_NAME, $operation, $value, $format)
    {
    }
}
/**
 * Class CSQLWhereExpression
 * @deprecated  use \Bitrix\Main\DB\SqlExpression instead
 * @see \Bitrix\Main\DB\SqlExpression
 */
class CSQLWhereExpression
{
    protected $expression, $args;
    protected $i;
    protected $DB;
    public function __construct($expression, $args = \null)
    {
    }
    public function compile()
    {
    }
    protected function execPlaceholders($matches)
    {
    }
}