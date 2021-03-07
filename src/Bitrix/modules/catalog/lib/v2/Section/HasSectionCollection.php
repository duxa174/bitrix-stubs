<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Interface HasSectionCollection
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface HasSectionCollection
{
    public function getSectionCollection() : \Bitrix\Catalog\v2\Section\SectionCollection;
    public function setSectionCollection(\Bitrix\Catalog\v2\Section\SectionCollection $sectionCollection);
}