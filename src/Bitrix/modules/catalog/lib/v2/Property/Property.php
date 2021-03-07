<?php

namespace Bitrix\Catalog\v2\Property;

/**
 * Class Property
 *
 * @package Bitrix\Catalog\v2\Property
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class Property extends \Bitrix\Catalog\v2\BaseEntity implements \Bitrix\Catalog\v2\PropertyValue\HasPropertyValueCollection
{
    /** @var \Bitrix\Catalog\v2\Fields\FieldStorage */
    protected $settings;
    /** @var \Bitrix\Catalog\v2\PropertyValue\PropertyValueCollection */
    protected $propertyValueCollection;
    public function __construct(\Bitrix\Catalog\v2\Property\PropertyRepositoryContract $productRepository)
    {
    }
    public function getPropertyValueCollection() : \Bitrix\Catalog\v2\PropertyValue\PropertyValueCollection
    {
    }
    public function setPropertyValueCollection(\Bitrix\Catalog\v2\PropertyValue\PropertyValueCollection $propertyValueCollection) : void
    {
    }
    /**
     * @param array $settings
     * @return \Bitrix\Catalog\v2\Property\Property
     */
    public function setSettings(array $settings) : \Bitrix\Catalog\v2\Property\Property
    {
    }
    public function getSettings() : array
    {
    }
    public function getSetting(string $name)
    {
    }
    public function getId() : ?int
    {
    }
    public function setId(int $id) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function getCode() : string
    {
    }
    public function getName()
    {
    }
    public function getDefaultValue()
    {
    }
    public function getPropertyType()
    {
    }
    public function getUserType()
    {
    }
    public function getListType()
    {
    }
    public function isRequired() : bool
    {
    }
    public function isMultiple() : bool
    {
    }
    public function isFileType() : bool
    {
    }
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
    // ToDo rethink PropertyValueCollection saving and clearing
    public function clearChangedFields() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
}