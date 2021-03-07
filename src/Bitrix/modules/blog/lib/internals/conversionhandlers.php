<?php

namespace Bitrix\Blog\Internals;

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
     * Increments conversion post day counter
     *
     * @param int $id Post ID.
     * @param array $fields Post fields.
     * @return void
     */
    public static function onPostAdd($id, $fields)
    {
    }
}