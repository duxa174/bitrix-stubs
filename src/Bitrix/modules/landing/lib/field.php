<?php

namespace Bitrix\Landing;

abstract class Field
{
    /**
     * Field id.
     * @var string
     */
    protected $id;
    /**
     * Field code.
     * @var string
     */
    protected $code;
    /**
     * Field value.
     * @var string
     */
    protected $value;
    /**
     * Field title.
     * @var string
     */
    protected $title;
    /**
     * Default value.
     * @var string
     */
    protected $default;
    /**
     * Field help.
     * @var string
     */
    protected $help;
    /**
     * Searchable flag of field.
     * @var bool
     */
    protected $searchable = false;
    /**
     * Modificator, which called within getting value.
     * @var callable
     */
    protected $fetchModificator = null;
    /**
     * Class constructor.
     * @param string $code Field code.
     * @param array $params Field params.
     */
    public function __construct($code, array $params = array())
    {
    }
    /**
     * Gets true, if current value is empty.
     * @return bool
     */
    public function isEmptyValue()
    {
    }
    /**
     * Set value to the field.
     * @param string $value Value.
     * @return void
     */
    public function setValue($value)
    {
    }
    /**
     * Get value of the field.
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * Get help value of the field.
     * @return string
     */
    public function getHelpValue()
    {
    }
    /**
     * Returns searchable flag of field.
     * @return bool
     */
    public function isSearchable()
    {
    }
    /**
     * Set new code of the field..
     * @param string $code Code.
     * @return void
     */
    public function setCode($code)
    {
    }
    /**
     * Get code of the field.
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get label (title) of the field.
     * @return mixed
     */
    public function getLabel()
    {
    }
    /**
     * Get type.
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Magic method return value as string.
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Vew field.
     * @param array $params Array params:
     * name_format - format for field name (for example ADDITIONAL[#field_code#])
     * class - css-class for this element
     * additional - some additional params as is.
     * @return html
     */
    public abstract function viewForm(array $params = array());
}