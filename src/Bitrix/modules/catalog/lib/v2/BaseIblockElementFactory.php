<?php

namespace Bitrix\Catalog\v2;

/**
 * Class BaseIblockElementFactory
 *
 * @package Bitrix\Catalog\v2
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
abstract class BaseIblockElementFactory
{
    /** @var \Bitrix\Catalog\v2\IoC\ContainerContract */
    protected $container;
    /** @var \Bitrix\Catalog\v2\Iblock\IblockInfo */
    protected $iblockInfo;
    /**
     * BaseIblockElementFactory constructor.
     *
     * @param \Bitrix\Catalog\v2\IoC\ContainerContract $container
     * @param \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo
     */
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container, \Bitrix\Catalog\v2\Iblock\IblockInfo $iblockInfo)
    {
    }
    /**
     * @param string $entityClass
     * @return \Bitrix\Catalog\v2\BaseIblockElementEntity
     */
    public abstract function createEntity(string $entityClass) : \Bitrix\Catalog\v2\BaseIblockElementEntity;
    protected function makeEntity(string $entityClass) : \Bitrix\Catalog\v2\BaseIblockElementEntity
    {
    }
}