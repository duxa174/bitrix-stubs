<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for integer data type
 * @package bitrix
 * @subpackage main
 */
class IntegerField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    /**
     * @param mixed $value
     *
     * @return int
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return int
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param int $value
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