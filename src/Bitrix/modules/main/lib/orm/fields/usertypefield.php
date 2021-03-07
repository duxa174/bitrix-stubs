<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * UserType proxy fields. Works like expressions and allows to be set.
 * @package    bitrix
 * @subpackage main
 */
class UserTypeField extends \Bitrix\Main\ORM\Fields\ExpressionField
{
    /** @var bool */
    protected $isMultiple = false;
    /**
     * @param mixed $value
     *
     * @return mixed
     * @throws ArgumentException
     */
    public function cast($value)
    {
    }
    /**
     * @return mixed
     */
    public function getTypeMask()
    {
    }
    /**
     * @param bool $isMultiple
     *
     * @return $this
     */
    public function configureMultiple($isMultiple = true)
    {
    }
    /**
     * @return mixed
     */
    public function isMultiple()
    {
    }
}