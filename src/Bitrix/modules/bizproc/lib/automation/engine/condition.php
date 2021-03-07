<?php

namespace Bitrix\Bizproc\Automation\Engine;

class Condition extends \Bitrix\Bizproc\Activity\Condition
{
    protected $field;
    public function __construct(array $params = null)
    {
    }
    /**
     * @param string $field The field name.
     * @return Condition
     */
    public function setField($field)
    {
    }
    /**
     * @return string
     */
    public function getField()
    {
    }
    /**
     * @param mixed $needle The field value to check.
     * @param string $fieldType Type of the field.
     * @param BaseTarget $target Automation target.
     * @param FieldType $fieldTypeObject
     * @return bool
     */
    public function check($needle, $fieldType, \Bitrix\Bizproc\Automation\Target\BaseTarget $target, \Bitrix\Bizproc\FieldType $fieldTypeObject)
    {
    }
    /**
     * @return array Array presentation of condition.
     */
    public function toArray()
    {
    }
}