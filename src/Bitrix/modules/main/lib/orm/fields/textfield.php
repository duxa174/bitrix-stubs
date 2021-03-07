<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for text data type
 * @package bitrix
 * @subpackage main
 */
class TextField extends \Bitrix\Main\ORM\Fields\StringField
{
    /**
     * @param mixed $value
     *
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param string $value
     *
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueToDb($value)
    {
    }
}