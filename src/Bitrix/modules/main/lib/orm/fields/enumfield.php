<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for enum data type
 * @package bitrix
 * @subpackage main
 */
class EnumField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    protected $values;
    /**
     * EnumField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws SystemException
     */
    function __construct($name, $parameters = array())
    {
    }
    public function postInitialize()
    {
    }
    /**
     * @param $values
     *
     * @return $this
     */
    public function configureValues($values)
    {
    }
    /**
     * @return array|Validators\Validator[]|callback[]
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function getValidators()
    {
    }
    public function getValues()
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
     * @throws SystemException
     */
    public function convertValueToDb($value)
    {
    }
}