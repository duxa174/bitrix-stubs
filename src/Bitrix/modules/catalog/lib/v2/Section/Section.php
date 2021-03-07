<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Class Section
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class Section extends \Bitrix\Catalog\v2\BaseEntity
{
    public function __construct(\Bitrix\Catalog\v2\Section\SectionRepositoryContract $sectionRepository)
    {
    }
    public function setValue(int $value) : self
    {
    }
    public function getValue() : int
    {
    }
}