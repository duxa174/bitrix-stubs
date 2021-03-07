<?php

namespace Bitrix\Main\ORM\Fields\Validators;

class LengthValidator extends \Bitrix\Main\ORM\Fields\Validators\Validator
{
    /** @var integer */
    protected $min;
    /** @var integer */
    protected $max;
    /** @var string */
    protected $errorPhraseMinCode = 'MAIN_ENTITY_VALIDATOR_LENGTH_MIN';
    protected $errorPhraseMin;
    /** @var string */
    protected $errorPhraseMaxCode = 'MAIN_ENTITY_VALIDATOR_LENGTH_MAX';
    protected $errorPhraseMax;
    /**
     * @param int|null  $min
     * @param int|null  $max
     * @param array $errorPhrase
     *
     * @throws ArgumentTypeException
     */
    public function __construct($min = 1, $max = null, $errorPhrase = array('MIN' => null, 'MAX' => null))
    {
    }
    /**
     * Checks minimum and/or maximum length (as string) of the value.
     * Returns true if check was successful or string with error text otherwise.
     *
     * @param mixed $value   Value to check.
     * @param array $primary Has no use in this function.
     * @param array $row     Has no use in this function.
     * @param Field $field   Field metadata.
     *
     * @return boolean|string
     */
    public function validate($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
    /**
     * Returns minimum allowed length.
     * null if not set.
     *
     * @return integer|null
     */
    public function getMin()
    {
    }
    /**
     * Returns maximum allowed length.
     * null if not set.
     *
     * @return integer|null
     */
    public function getMax()
    {
    }
}