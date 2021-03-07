<?php

namespace Bitrix\Catalog\v2\Fields\TypeCasters;

/**
 * Class NullTypeCaster
 *
 * @package Bitrix\Catalog\v2\Fields\TypeCasters
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class NullTypeCaster implements \Bitrix\Catalog\v2\Fields\TypeCasters\TypeCasterContract
{
    public function cast($name, $value)
    {
    }
    public function has($name) : bool
    {
    }
}