<?php

namespace Bitrix\Catalog\v2\Sku;

/**
 * Class SimpleSku
 *
 * @package Bitrix\Catalog\v2\Sku
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class SimpleSku extends \Bitrix\Catalog\v2\Sku\BaseSku
{
    /**
     * @return \Bitrix\Catalog\v2\BaseIblockElementEntity
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function getParent() : \Bitrix\Catalog\v2\BaseEntity
    {
    }
    protected function createFieldStorage() : \Bitrix\Catalog\v2\Fields\FieldStorage
    {
    }
    /**
     * @return \Bitrix\Catalog\v2\Property\PropertyCollection|\Bitrix\Catalog\v2\Property\Property[]
     */
    protected function loadPropertyCollection() : \Bitrix\Catalog\v2\BaseCollection
    {
    }
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
}