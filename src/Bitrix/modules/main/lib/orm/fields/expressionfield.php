<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Expr field is to describe dynamic fields by expression, e.g. we have PRICE_USD field and need to count price in EUR
 * then we define expression field PRICE_EUR with expression = array('%s * 1.25', 'PRICE_USD')
 * @package bitrix
 * @subpackage main
 */
class ExpressionField extends \Bitrix\Main\ORM\Fields\Field implements \Bitrix\Main\ORM\Fields\IReadable
{
    /**
     * @var string
     */
    protected $expression;
    /**
     * Full expression, recursively includes expressions from buildFrom fields
     * @var string
     */
    protected $fullExpression;
    /** @var string Scalar field class name */
    protected $valueType;
    /**
     * @var ScalarField
     */
    protected $valueField;
    /**
     * @var array
     */
    protected $buildFrom;
    /** @var \Bitrix\Main\ORM\Query\Chain[] */
    protected $buildFromChains;
    protected $isAggregated;
    protected $hasSubquery;
    protected static $aggrFunctionsMYSQL = array('AVG', 'BIT_AND', 'BIT_OR', 'BIT_XOR', 'COUNT', 'GROUP_CONCAT', 'MAX', 'MIN', 'STD', 'STDDEV_POP', 'STDDEV_SAMP', 'STDDEV', 'SUM', 'VAR_POP', 'VAR_SAMP', 'VARIANCE'), $aggrFunctionsMSSQL = array('AVG', 'MIN', 'CHECKSUM_AGG', 'OVER', 'COUNT', 'ROWCOUNT_BIG', 'COUNT_BIG', 'STDEV', 'GROUPING', 'STDEVP', 'GROUPING_ID', 'SUM', 'MAX', 'VAR', 'VARP'), $aggrFunctionsORACLE = array('AVG', 'COLLECT', 'CORR', 'CORR_S', 'CORR_K', 'COUNT', 'COVAR_POP', 'COVAR_SAMP', 'CUME_DIST', 'DENSE_RANK', 'FIRST', 'GROUP_ID', 'GROUPING', 'GROUPING_ID', 'LAST', 'MAX', 'MEDIAN', 'MIN', 'PERCENTILE_CONT', 'PERCENTILE_DISC', 'PERCENT_RANK', 'RANK', 'REGR_SLOPE', 'REGR_INTERCEPT', 'REGR_COUNT', 'REGR_R2', 'REGR_AVGX', 'REGR_AVGY', 'REGR_SXX', 'REGR_SYY', 'REGR_SXY', 'STATS_BINOMIAL_TEST', 'STATS_CROSSTAB', 'STATS_F_TEST', 'STATS_KS_TEST', 'STATS_MODE', 'STATS_MW_TEST', 'STATS_ONE_WAY_ANOVA', 'STATS_T_TEST_ONE', 'STATS_T_TEST_PAIRED', 'STATS_T_TEST_INDEP', 'STATS_T_TEST_INDEPU', 'STATS_WSR_TEST', 'STDDEV', 'STDDEV_POP', 'STDDEV_SAMP', 'SUM', 'VAR_POP', 'VAR_SAMP', 'VARIANCE'), $aggrFunctions;
    /**
     * All fields in expression should be placed as %s (or as another placeholder for sprintf),
     * and the real field names being carrying in $buildFrom array (= args for sprintf)
     *
     * @param string            $name
     * @param string            $expression
     * @param array|string|null $buildFrom
     * @param array             $parameters deprecated, use configure* and add* instead
     *
     * @throws SystemException
     */
    public function __construct($name, $expression, $buildFrom = null, $parameters = array())
    {
    }
    public function __call($name, $arguments)
    {
    }
    /**
     * @return mixed
     */
    public function getTypeMask()
    {
    }
    /**
     * @param $class
     *
     * @return $this
     */
    public function configureValueType($class)
    {
    }
    /**
     * @param Entity $entity
     *
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public function setEntity(\Bitrix\Main\ORM\Entity $entity)
    {
    }
    public function getExpression()
    {
    }
    /**
     * @return mixed|string
     * @throws SystemException
     */
    public function getFullExpression()
    {
    }
    /**
     * @return bool
     * @throws SystemException
     */
    public function isAggregated()
    {
    }
    /**
     * @return bool
     * @throws SystemException
     */
    public function hasSubquery()
    {
    }
    public function isConstant()
    {
    }
    /**
     * @return array|\Bitrix\Main\ORM\Query\Chain[]
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getBuildFromChains()
    {
    }
    public static function checkAggregation($expression)
    {
    }
    public static function checkSubquery($expression)
    {
    }
    public static function removeSubqueries($expression)
    {
    }
    protected static function removeStrings($quote, $expression)
    {
    }
    protected static function removeSubqueryBody($query)
    {
    }
    /**
     * @deprecated
     * @return null|string
     */
    public function getDataType()
    {
    }
    /**
     * @return string
     */
    public function getValueType()
    {
    }
    /**
     * @return ScalarField
     */
    public function getValueField()
    {
    }
    public function __clone()
    {
    }
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     */
    public function convertValueToDb($value)
    {
    }
    public function validateValue($value, $primary, $row, \Bitrix\Main\ORM\Data\Result $result)
    {
    }
}