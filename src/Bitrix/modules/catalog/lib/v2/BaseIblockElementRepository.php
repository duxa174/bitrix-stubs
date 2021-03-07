<?php

namespace Bitrix\Catalog\v2;

/**
 * Class BaseIblockElementRepository
 *
 * @package Bitrix\Catalog\v2
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseIblockElementRepository implements \Bitrix\Catalog\v2\RepositoryContract
{
    /** @var \Bitrix\Catalog\v2\BaseIblockElementFactory */
    protected $factory;
    /** @var \Bitrix\Catalog\v2\Iblock\IblockInfo */
    protected $iblockInfo;
    /**
     * BaseIblockElementRepository constructor.
     *
     * @param \Bitrix\Catalog\v2\BaseIblockElementFactory $factory
     * @param \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo
     */
    public function __construct(\Bitrix\Catalog\v2\BaseIblockElementFactory $factory, \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo)
    {
    }
    public function getEntityById(int $id) : ?\Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
    public function getEntitiesBy($params) : array
    {
    }
    public function save(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    public function delete(\Bitrix\Catalog\v2\BaseEntity ...$entities) : \Bitrix\Main\Result
    {
    }
    protected function getList(array $params) : array
    {
    }
    protected function getAdditionalFilter() : array
    {
    }
    protected function getAdditionalProductFilter() : array
    {
    }
    protected function createEntity(array $fields = []) : \Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
    protected abstract function makeEntity(array $fields) : \Bitrix\Catalog\v2\BaseIblockElementEntity;
    protected function addInternal(array $fields) : \Bitrix\Main\Result
    {
    }
    protected function updateInternal(int $id, array $fields) : \Bitrix\Main\Result
    {
    }
    protected function deleteInternal(int $id) : \Bitrix\Main\Result
    {
    }
    protected function prepareElementFields(array $fields) : array
    {
    }
    protected function prepareProductFields(array $fields) : array
    {
    }
}