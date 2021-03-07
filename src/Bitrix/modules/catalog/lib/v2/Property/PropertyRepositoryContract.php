<?php

namespace Bitrix\Catalog\v2\Property;

/**
 * Interface PropertyRepositoryContract
 *
 * @package Bitrix\Catalog\v2\Property
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface PropertyRepositoryContract extends \Bitrix\Catalog\v2\RepositoryContract
{
    public function getCollectionByParent(\Bitrix\Catalog\v2\BaseIblockElementEntity $entity) : \Bitrix\Catalog\v2\BaseCollection;
}