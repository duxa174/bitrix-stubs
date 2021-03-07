<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for date data type
 * @package bitrix
 * @subpackage main
 */
class DateField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    protected $format = null;
    /**
     * DateField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws Main\SystemException
     */
    public function __construct($name, $parameters = array())
    {
    }
    public function configureFormat($format)
    {
    }
    /**
     * @return array|\Bitrix\Main\ORM\Fields\Validators\Validator[]|callback[]
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public function getValidators()
    {
    }
    /**
     * @param $value
     *
     * @return Type\Date
     * @throws Main\ObjectException
     */
    public function assureValueObject($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return Type\Date
     * @throws Main\ObjectException
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return Type\Date
     * @throws Main\ObjectException
     * @throws Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
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