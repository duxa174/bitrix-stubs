<?php

namespace Bitrix\Catalog\v2\Section;

/**
 * Interface SectionRepositoryContract
 *
 * @package Bitrix\Catalog\v2\Section
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface SectionRepositoryContract extends \Bitrix\Catalog\v2\RepositoryContract
{
    public function getCollectionByProduct(\Bitrix\Catalog\v2\Product\BaseProduct $product) : \Bitrix\Catalog\v2\BaseCollection;
}