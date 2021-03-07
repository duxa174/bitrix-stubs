<?php

namespace Bitrix\Main\ORM\Fields\Validators;

/**
 * Checks if field value exists in referenced entity
 *
 * example: new Foreign(GroupTable::getEntity()->getField('ID'));
 *
 * @package Bitrix\Main\ORM\Validator
 */
class ForeignValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    protected $errorPhraseCode = 'MAIN_ENTITY_VALIDATOR_FOREIGN';
    protected $reference = null;
    protected $filter = null;
    const NOT_EXISTS = 'BX_FOREIGN_NOT_EXISTS';
    /**
     * @param ORM\Fields\Field $reference
     * @param array            $filter
     */
    public function __construct(\Bitrix\Main\ORM\Fields\Field $reference, array $filter = array())
    {
    }
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
}