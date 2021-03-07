<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for string data type
 * @package bitrix
 * @subpackage main
 */
class StringField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    /**
     * Shortcut for Regexp validator
     * @var null|string
     */
    protected $format = null;
    /** @var int|null  */
    protected $size = null;
    /**
     * StringField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws \Bitrix\Main\SystemException
     */
    function __construct($name, $parameters = array())
    {
    }
    /**
     * @param $format
     *
     * @return $this
     */
    public function configureFormat($format)
    {
    }
    /**
     * Shortcut for Regexp validator
     * @return null|string
     */
    public function getFormat()
    {
    }
    /**
     * @return array|Validators\Validator[]|callback[]
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\SystemException
     */
    public function getValidators()
    {
    }
    /**
     * @param $size
     *
     * @return $this
     */
    public function configureSize($size)
    {
    }
    /**
     * Returns the size of the field in a database (in characters).
     * @return int|null
     */
    public function getSize()
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     */
    public function cast($value)
    {
    }
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