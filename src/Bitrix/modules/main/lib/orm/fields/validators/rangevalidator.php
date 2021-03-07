<?php

namespace Bitrix\Main\ORM\Fields\Validators;

class RangeValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    /** @var integer */
    protected $min;
    /** @var integer */
    protected $max;
    /** @var boolean */
    protected $equality;
    /** @var string */
    protected $errorPhraseMinCode = 'MAIN_ENTITY_VALIDATOR_RANGE_MIN';
    protected $errorPhraseMin;
    /** @var string */
    protected $errorPhraseMaxCode = 'MAIN_ENTITY_VALIDATOR_RANGE_MAX';
    protected $errorPhraseMax;
    /**
     * @param int   $min
     * @param null  $max
     * @param bool  $equality  Check "or equal" to the edges of the range
     * @param array $errorPhrase
     *
     * @throws ArgumentTypeException
     */
    public function __construct($min = 0, $max = null, $equality = false, $errorPhrase = array('MIN' => null, 'MAX' => null))
    {
    }
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
}