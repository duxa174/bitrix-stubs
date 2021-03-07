<?php

namespace Bitrix\Main\ORM\Fields\Validators;

abstract class Validator implements \Bitrix\Main\ORM\Fields\Validators\IValidator
{
    /**
     * @var string
     */
    protected $errorPhraseCode = 'MAIN_ENTITY_VALIDATOR';
    protected $errorPhrase;
    /**
     * @param null $errorPhrase
     * @throws ArgumentTypeException
     */
    public function __construct($errorPhrase = null)
    {
    }
    /**
     * @param $value
     * @param \Bitrix\Main\ORM\Fields\Field $field
     * @param null|string $errorPhrase
     * @param null|array $additionalTemplates
     *
     * @return string
     */
    protected function getErrorMessage($value, \Bitrix\Main\ORM\Fields\Field $field, $errorPhrase = null, $additionalTemplates = null)
    {
    }
}