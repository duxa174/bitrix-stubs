<?php

namespace Bitrix\Sale\Discount\Preset;

final class ArrayHelper
{
    /**
     * Returns value, that belongs to path.   
     *
     * @param array|\ArrayAccess $array Target array.
     * @param string $path Path. Example CONDITIONS.CHILDREN.0.DATA.Value
     * @param null $defaultValue Default value
     * @return array|\ArrayAccess|mixed|null
     * @throws ArgumentException
     */
    public static function getByPath($array, $path, $defaultValue = null)
    {
    }
}