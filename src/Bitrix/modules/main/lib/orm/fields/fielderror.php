<?php

namespace Bitrix\Main\ORM\Fields;

class FieldError extends \Bitrix\Main\ORM\EntityError
{
    const EMPTY_REQUIRED = 'BX_EMPTY_REQUIRED';
    const INVALID_VALUE = 'BX_INVALID_VALUE';
    /** @var Field */
    protected $field;
    public function __construct(\Bitrix\Main\ORM\Fields\Field $field, $message, $code = 'BX_ERROR')
    {
    }
    public function getField()
    {
    }
}