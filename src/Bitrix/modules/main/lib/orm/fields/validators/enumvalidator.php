<?php

namespace Bitrix\Main\ORM\Fields\Validators;

class EnumValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    /**
     * @param $value
     * @param $primary
     * @param array $row
     * @param \Bitrix\Main\ORM\Fields\Field | \Bitrix\Main\ORM\Fields\EnumField | \Bitrix\Main\ORM\Fields\BooleanField $field
     *
     * @return bool|string
     */
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
}