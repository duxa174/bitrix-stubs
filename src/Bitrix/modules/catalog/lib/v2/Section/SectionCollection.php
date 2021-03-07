<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Class SectionCollection
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SectionCollection extends \Bitrix\Catalog\v2\BaseCollection
{
    /** @var \Bitrix\Catalog\v2\Section\SectionFactory */
    protected $factory;
    /** @var \Bitrix\Catalog\v2\Section\SectionRepositoryContract */
    protected $repository;
    public function __construct(\Bitrix\Catalog\v2\Section\SectionFactory $factory, \Bitrix\Catalog\v2\Section\SectionRepositoryContract $repository)
    {
    }
    /**
     * @param \Bitrix\Catalog\v2\BaseEntity|\Bitrix\Catalog\v2\Section\HasSectionCollection|null $parent
     * @return \Bitrix\Catalog\v2\BaseCollection
     */
    public function setParent(?\Bitrix\Catalog\v2\BaseEntity $parent) : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    /**
     * @param array|int[] $values
     * @return $this
     */
    public function setValues(array $values) : self
    {
    }
    public function getValues() : array
    {
    }
    private function filterValues(array $values) : array
    {
    }
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
}