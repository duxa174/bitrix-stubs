<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for datetime data type
 * @package bitrix
 * @subpackage main
 */
class DatetimeField extends \Bitrix\Main\ORM\Fields\DateField
{
    /**
     * DatetimeField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($name, $parameters = array())
    {
    }
    /**
     * @param mixed $value
     *
     * @return \Bitrix\Main\Type\Date|DateTime
     * @throws \Bitrix\Main\ObjectException
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return \Bitrix\Main\Type\Date|DateTime
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
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