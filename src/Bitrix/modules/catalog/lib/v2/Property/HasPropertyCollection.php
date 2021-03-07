<?php

namespace Bitrix\Catalog\v2\Property;

/**
 * Interface HasPropertyCollection
 *
 * @package Bitrix\Catalog\v2\Property
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
interface HasPropertyCollection
{
    public function getPropertyCollection() : \Bitrix\Catalog\v2\Property\PropertyCollection;
    public function setPropertyCollection(\Bitrix\Catalog\v2\Property\PropertyCollection $propertyCollection);
}