<?php

namespace Bitrix\Catalog\v2;

/**
 * Class BaseIblockElementEntity
 *
 * @package Bitrix\Catalog\v2
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseIblockElementEntity extends \Bitrix\Catalog\v2\BaseEntity implements \Bitrix\Catalog\v2\Property\HasPropertyCollection
{
    /** @var \Bitrix\Catalog\v2\Iblock\IblockInfo */
    protected $iblockInfo;
    /** @var \Bitrix\Catalog\v2\Property\PropertyRepositoryContract */
    protected $propertyRepository;
    /** @var \Bitrix\Catalog\v2\Property\PropertyCollection|\Bitrix\Catalog\v2\Property\Property[] */
    protected $propertyCollection;
    public function __construct(\Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo, \Bitrix\Catalog\v2\RepositoryContract $repository, \Bitrix\Catalog\v2\Property\PropertyRepositoryContract $propertyRepository)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Iblock\IblockInfo
     */
    public function getIblockInfo() : \Bitrix\Catalog\v2\Iblock\IblockInfo
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Property\PropertyCollection|\Bitrix\Catalog\v2\Property\Property[]
     */
    public function getPropertyCollection() : \Bitrix\Catalog\v2\Property\PropertyCollection
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Property\PropertyCollection|\Bitrix\Catalog\v2\Property\Property[]
     */
    protected function loadPropertyCollection() : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\Property\PropertyCollection $propertyCollection
     * @return $this
     *
     * @internal
     */
    public function setPropertyCollection(\Bitrix\Catalog\v2\Property\PropertyCollection $propertyCollection) : self
    {
    }
    public function getIblockId() : ?int
    {
    }
    public function setIblockId(int $iblockId) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function setField(string $name, $value) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    // ToDo make tests coverage for TYPEs
    public function setType(int $type) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function getType() : int
    {
    }
    public function isSimple() : bool
    {
    }
    public function setActive(bool $active) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function isActive() : bool
    {
    }
    public function setName($name) : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    public function getName()
    {
    }
    public function hasName() : bool
    {
    }
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
    protected function getFieldsMap() : array
    {
    }
}