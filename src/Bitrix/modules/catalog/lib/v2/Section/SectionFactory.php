<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Class SectionFactory
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SectionFactory
{
    public const SECTION = \Bitrix\Catalog\v2\Section\Section::class;
    public const SECTION_COLLECTION = \Bitrix\Catalog\v2\Section\SectionCollection::class;
    protected $container;
    /**
     * SectionFactory constructor.
     *
     * @param \Bitrix\Catalog\v2\IoC\ContainerContract $container
     */
    public function __construct(\Bitrix\Catalog\v2\IoC\ContainerContract $container)
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Section\Section
     */
    public function createEntity() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|null $parent
     * @return \Bitrix\Catalog\v2\Section\SectionCollection
     */
    public function createCollection(\Bitrix\Catalog\v2\BaseEntity $parent = null) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
}