<?php

namespace Bitrix\Main\ORM\Fields\Validators;

class RegExpValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    /**
     * @var string
     */
    protected $pattern;
    /**
     * @var string
     */
    protected $errorPhraseCode = 'MAIN_ENTITY_VALIDATOR_REGEXP';
    /**
     * @param string $pattern
     * @param null   $errorPhrase
     *
     * @throws ArgumentTypeException
     */
    public function __construct($pattern, $errorPhrase = null)
    {
    }
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
}