<?php

namespace Bitrix\Catalog\v2;

/**
 * Class BaseEntity
 *
 * @package Bitrix\Catalog\v2
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseEntity
{
    /** @var \Bitrix\Catalog\v2\RepositoryContract */
    protected $entityRepository;
    /** @var \Bitrix\Catalog\v2\Fields\FieldStorage */
    private $fieldStorage;
    /** @var \Bitrix\Catalog\v2\BaseCollection */
    private $parentCollection;
    // ToDo do we need $repository for every base entity?
    public function __construct(\Bitrix\Catalog\v2\RepositoryContract $repository = null)
    {
    }
    protected function getFieldStorage() : \Bitrix\Catalog\v2\Fields\FieldStorage
    {
    }
    protected function createFieldStorage() : \Bitrix\Catalog\v2\Fields\FieldStorage
    {
    }
    public function initFields(array $fields) : self
    {
    }
    public function setParentCollection(?\Bitrix\Catalog\v2\BaseCollection $collection) : self
    {
    }
    public function getParentCollection() : ?\Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function getParent() : ?self
    {
    }
    public function getHash() : string
    {
    }
    public function setField(string $name, $value) : self
    {
    }
    public function getField(string $name)
    {
    }
    // ToDo make map to execute set{$name} instead of setField($name) to check each field limitations? e.g. price with setFields is string instead of float
    public function setFields(array $fields) : self
    {
    }
    public function getFields() : array
    {
    }
    public function getChangedFields() : array
    {
    }
    public function hasChangedFields() : bool
    {
    }
    public function isChanged() : bool
    {
    }
    public function isNew() : bool
    {
    }
    public function getId() : ?int
    {
    }
    public function setId(int $id) : self
    {
    }
    public function remove() : self
    {
    }
    public function save() : \Bitrix\Main\Result
    {
    }
    protected function getFieldsMap() : ?array
    {
    }
    /**
     * ToDo is it a BaseEntity method? do all children need it? e.g. Property - doesn't
     *
     * @return \Bitrix\Main\Result
     * @internal
     */
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
    protected function saveInternalEntity() : \Bitrix\Main\Result
    {
    }
    /**
     * @internal
     */
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
    /**
     * @param bool $initCollections
     * @return \Generator|\Bitrix\Catalog\v2\BaseCollection[]
     */
    protected final function getChildCollections(bool $initCollections = false) : \Generator
    {
    }
    /**
     * @return $this
     * @internal
     */
    public function clearChangedFields() : self
    {
    }
}