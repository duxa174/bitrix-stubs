<?php

namespace Bitrix\Sale\Discount\Result;

final class CompatibleFormat
{
    /**
     * Create simple description for unknown discount.
     *
     * @param float $newPrice			New price.
     * @param float $oldPrice			Old price.
     * @param string $currency			Currency.
     * @return array
     */
    public static function createResultDescription($newPrice, $oldPrice, $currency)
    {
    }
    /**
     * Returns result after apply one discount in old format.
     *
     * @param array $currentOrder			Current order data.
     * @param array $oldOrder				Old order data.
     * @return array
     */
    public static function getStepResult(array $currentOrder, array $oldOrder)
    {
    }
    /**
     * Returns description for old discount.
     *
     * @param array $stepResult		Action results.
     * @return array
     */
    public static function getDiscountDescription(array $stepResult)
    {
    }
}