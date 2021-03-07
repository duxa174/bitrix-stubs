<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for boolean data type
 * @package bitrix
 * @subpackage main
 */
class BooleanField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    /**
     * Value (false, true) equivalent map
     * @var array
     */
    protected $values;
    /**
     * BooleanField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws \Bitrix\Main\SystemException
     */
    function __construct($name, $parameters = array())
    {
    }
    /**
     * @param $falseValue
     * @param $trueValue
     *
     * @return $this
     */
    public function configureStorageValues($falseValue, $trueValue)
    {
    }
    /**
     * Short alias for configureStorageValues
     *
     * @param $falseValue
     * @param $trueValue
     *
     * @return BooleanField
     */
    public function configureValues($falseValue, $trueValue)
    {
    }
    /**
     * Convert true/false values to actual field values
     * @param boolean|integer|string $value
     * @return mixed
     */
    public function normalizeValue($value)
    {
    }
    /**
     * Converts any possible value to strict boolean.
     *
     * @param $value
     *
     * @return bool
     */
    public function booleanizeValue($value)
    {
    }
    /**
     * @return array|\Bitrix\Main\ORM\Fields\Validators\Validator[]|callback[]
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\SystemException
     */
    public function getValidators()
    {
    }
    public function getValues()
    {
    }
    public function isValueEmpty($value)
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
     * @param $value
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
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueToDb($value)
    {
    }
    /**
     * @return string
     */
    public function getGetterTypeHint()
    {
    }
    /**
     * @return string
     */
    public function getSetterTypeHint()
    {
    }
}