<?php

namespace Bitrix\Advertising\Internals;

final class ConversionHandlers
{
    /**
     * Returns conversion counter types
     *
     * @return array
     */
    public static function onGetCounterTypes()
    {
    }
    /**
     * Returns conversion rate types
     *
     * @return array
     */
    public static function onGetRateTypes()
    {
    }
    /**
     * Increments conversion banner click day counter
     *
     * @param int $id Banner ID.
     * @param array $fields Banner fields.
     * @return void
     */
    public static function onBannerClick($id, $fields)
    {
    }
}