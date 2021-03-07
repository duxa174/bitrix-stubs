<?php

namespace Bitrix\Sale\Internals;

abstract class Entity
{
    /** @var Fields */
    protected $fields;
    protected $eventName = null;
    protected function __construct(array $fields = array())
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getRegistryEntity()
    {
    }
    /**
     * @return array
     *
     * @throws Main\NotImplementedException
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    public static function getCustomizableFields() : array
    {
    }
    /**
     * @return array|null
     * @throws Main\NotImplementedException
     */
    public static function getAvailableFieldsMap()
    {
    }
    /**
     * @return array
     *
     * @throws Main\NotImplementedException
     */
    public static function getAllFields()
    {
    }
    /**
     * @return array
     * @throws Main\NotImplementedException
     */
    public static function getFieldsDescription()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return array
     */
    protected static function getFieldsMap()
    {
    }
    /**
     * @return array
     *
     * @throws Main\NotImplementedException
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * @param $name
     * @return string|null
     */
    public function getField($name)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws \Exception
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @param $value
     * @return Result
     */
    protected function checkValueBeforeSet($name, $value)
    {
    }
    /**
     * @param bool $isMeaningfulField
     * @return bool
     */
    public abstract function isStartField($isMeaningfulField = false);
    /**
     *
     */
    public abstract function clearStartField();
    /**
     * @return bool
     */
    public abstract function hasMeaningfulField();
    /**
     * @param bool $hasMeaningfulField
     * @return Result
     */
    public abstract function doFinalAction($hasMeaningfulField = false);
    /**
     * @internal
     * @param bool|false $value
     */
    public abstract function setMathActionOnly($value = false);
    /**
     * @return bool
     */
    public abstract function isMathActionOnly();
    /**
     * @internal
     *
     * @param $name
     * @param $value
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setFieldNoDemand($name, $value)
    {
    }
    /**
     *
     * @param array $values
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setFields(array $values)
    {
    }
    /**
     * @param array $values
     * @return array
     */
    protected function onBeforeSetFields(array $values)
    {
    }
    /**
     * @internal
     *
     * @param array $values
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setFieldsNoDemand(array $values)
    {
    }
    /**
     * @internal
     *
     * @param $name
     * @param $value
     * @throws Main\ArgumentOutOfRangeException
     */
    public function initField($name, $value)
    {
    }
    /**
     * @internal
     *
     * @param array $values
     * @throws Main\ArgumentOutOfRangeException
     */
    public function initFields(array $values)
    {
    }
    /**
     * @return array
     */
    public function getFieldValues()
    {
    }
    /**
     * @internal
     * @return Fields
     */
    public function getFields()
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @param string $name
     * @param null|string $oldValue
     * @param null|string $value
     */
    protected function addChangesToHistory($name, $oldValue = null, $value = null)
    {
    }
    /**
     * @internal
     *
     * @throws Main\NotImplementedException
     * @return mixed
     */
    public static function getEntityEventName()
    {
    }
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    /**
     * @return bool
     */
    public function isChanged()
    {
    }
    /**
     * @param string $name
     * @throws Main\ArgumentOutOfRangeException
     */
    public function markFieldCustom(string $name)
    {
    }
    /**
     * @param string $name
     * @throws Main\ArgumentOutOfRangeException
     */
    public function unmarkFieldCustom(string $name)
    {
    }
    /**
     * @param string $name
     * @return bool
     */
    public function isMarkedFieldCustom(string $name) : bool
    {
    }
    /**
     * @return Result
     */
    public function verify()
    {
    }
    /**
     * @internal
     */
    public function clearChanged()
    {
    }
}