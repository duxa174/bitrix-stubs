<?php

namespace Bitrix\Main\ORM\Fields\Validators;

interface IValidator
{
    /**
     * @param       $value
     * @param       $primary
     * @param array $row
     * @param Field $field
     *
     * @return string|boolean|EntityError
     */
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field);
}