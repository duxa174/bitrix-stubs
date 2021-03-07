<?php

namespace Bitrix\Sale;

/**
 * Class PropertyValueBase
 * @package Bitrix\Sale
 */
abstract class PropertyBase
{
    protected $fields = [];
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param $name
     * @return mixed
     */
    public function getField($name)
    {
    }
    /**
     * @param array $parameters
     * @throws Main\NotImplementedException
     * @return Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * @param $propertyId
     * @return PropertyBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getObjectById($propertyId)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getGroupInfo()
    {
    }
    /**
     * PropertyBase constructor.
     * @param array $property
     * @param array|null $relation
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function __construct(array $property, array $relation = null)
    {
    }
    /**
     * @param $value
     * @return array|mixed|string|null
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function normalizeValue($value)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function loadOptions()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function loadRelations()
    {
    }
    /**
     * @param $personTypeId
     * @param $request
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\SystemException
     */
    public static function getMeaningfulValues($personTypeId, $request)
    {
    }
    /**
     * @param $value
     * @return Result
     * @throws Main\SystemException
     */
    public function checkValue($value)
    {
    }
    /**
     * @param $key
     * @param $value
     *
     * @return Result
     * @throws Main\SystemException
     */
    public function checkRequiredValue($value)
    {
    }
    /**
     * @param PropertyValueBase $propertyValue
     * @return array|mixed|string|null
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public function getPreparedValueForSave(\Bitrix\Sale\PropertyValueBase $propertyValue)
    {
    }
    /**
     * @param $value
     * @return string
     * @throws Main\SystemException
     */
    public function getViewHtml($value)
    {
    }
    /**
     * @param array $values
     * @return string
     * @throws Main\SystemException
     */
    public function getEditHtml(array $values)
    {
    }
    /**
     * @return mixed
     */
    public function getFields()
    {
    }
    /**
     * @return mixed
     */
    public function getId()
    {
    }
    /**
     * @return mixed
     */
    public function getPersonTypeId()
    {
    }
    /**
     * @return mixed
     */
    public function getGroupId()
    {
    }
    /**
     * @return mixed
     */
    public function getName()
    {
    }
    /**
     * @return mixed
     */
    public function getRelations()
    {
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
    }
    /**
     * @return mixed
     */
    public function getType()
    {
    }
    /**
     * @return bool
     */
    public function isRequired()
    {
    }
    /**
     * @return bool
     */
    public function isUtil()
    {
    }
    /**
     * @return mixed
     */
    public function getOptions()
    {
    }
    /**
     * @param $value
     */
    public function onValueDelete($value)
    {
    }
}