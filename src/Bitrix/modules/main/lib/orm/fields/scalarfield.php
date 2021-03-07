<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Scalar entity field class for non-array and non-object data types
 * @package bitrix
 * @subpackage main
 */
abstract class ScalarField extends \Bitrix\Main\ORM\Fields\Field implements \Bitrix\Main\ORM\Fields\IStorable, \Bitrix\Main\ORM\Fields\ITypeHintable
{
    protected $is_primary;
    protected $is_unique;
    protected $is_required;
    protected $is_autocomplete;
    /** @var boolean Permission to use in filter */
    protected $is_private;
    protected $column_name = '';
    /** @var null|callable|mixed  */
    protected $default_value;
    /**
     * ScalarField constructor.
     *
     * @param       $name
     * @param array $parameters deprecated, use configure* and add* methods instead
     *
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($name, $parameters = array())
    {
    }
    /**
     * @return int
     */
    public function getTypeMask()
    {
    }
    /**
     * @param boolean $value
     *
     * @return $this
     */
    public function configurePrimary($value = true)
    {
    }
    public function isPrimary()
    {
    }
    /**
     * @param boolean $value
     *
     * @return $this
     */
    public function configureRequired($value = true)
    {
    }
    public function isRequired()
    {
    }
    /**
     * @param boolean $value
     *
     * @return $this
     */
    public function configureUnique($value = true)
    {
    }
    public function isUnique()
    {
    }
    /**
     * @param boolean $value
     *
     * @return $this
     */
    public function configureAutocomplete($value = true)
    {
    }
    public function isAutocomplete()
    {
    }
    /**
     * @param bool $value
     *
     * @return ScalarField
     */
    public function configurePrivate($value = true)
    {
    }
    /**
     * @return bool
     */
    public function isPrivate()
    {
    }
    /**
     * @param string $value
     *
     * @return $this
     */
    public function configureColumnName($value)
    {
    }
    public function getColumnName()
    {
    }
    /**
     * @param string $column_name
     */
    public function setColumnName($column_name)
    {
    }
    /**
     * @param callable|mixed $value
     *
     * @return $this
     */
    public function configureDefaultValue($value)
    {
    }
    /**
     * @param array $row ORM data row in case of dependency value on other values
     *
     * @return callable|mixed|null
     */
    public function getDefaultValue($row = null)
    {
    }
    public function isValueEmpty($value)
    {
    }
    /**
     * @return string
     */
    public function getGetterTypeHint()
    {
    }
    /**
     * @return string
     */
    public function getSetterTypeHint()
    {
    }
}