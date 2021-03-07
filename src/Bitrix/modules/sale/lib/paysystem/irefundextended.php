<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Interface IRefundExtended
 * @package Bitrix\Sale\PaySystem
 */
interface IRefundExtended extends \Bitrix\Sale\PaySystem\IRefund
{
    /**
     * @return bool
     */
    public function isRefundableExtended();
}