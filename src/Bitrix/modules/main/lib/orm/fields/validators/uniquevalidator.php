<?php

namespace Bitrix\Main\ORM\Fields\Validators;

class UniqueValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    /**
     * @var string
     */
    protected $errorPhraseCode = 'MAIN_ENTITY_VALIDATOR_UNIQUE';
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
}