<?php

namespace Bitrix\Bizproc\Activity;

class Condition
{
    protected $operator;
    protected $value;
    public function __construct(array $params = null)
    {
    }
    /**
     * @param string $operator Operator like `=`, `<`, `>` etc.
     * @return Condition
     */
    public function setOperator($operator)
    {
    }
    /**
     * @return string
     */
    public function getOperator()
    {
    }
    /**
     * @param mixed $value Target condition value.
     * @return Condition
     */
    public function setValue($value)
    {
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * @param mixed $valueToCheck The field value to check.
     * @param FieldType $fieldType
     * @param array $documentId Document Id.
     * @return bool
     */
    public function checkValue($valueToCheck, \Bitrix\Bizproc\FieldType $fieldType, array $documentId)
    {
    }
    private function checkInOperation($toCheck, $base, $baseType) : bool
    {
    }
    private function checkContainOperation($toCheck, $base, $baseType) : bool
    {
    }
    /**
     * @return array Array presentation of condition.
     */
    public function toArray()
    {
    }
    public static function getOperatorList() : array
    {
    }
}