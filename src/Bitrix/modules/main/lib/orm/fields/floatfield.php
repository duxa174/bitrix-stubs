<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * Entity field class for enum data type
 * @package bitrix
 * @subpackage main
 */
class FloatField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    /** @var int|null */
    protected $scale;
    /**
     * FloatField constructor.
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
     * @param $scale
     *
     * @return $this
     */
    public function configureScale($scale)
    {
    }
    /**
     * @return int|null
     */
    public function getScale()
    {
    }
    /**
     * @param mixed $value
     *
     * @return float|mixed
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return float|mixed
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueToDb($value)
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