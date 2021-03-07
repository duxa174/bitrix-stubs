<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Interface IRecurring
 *
 * @package Bitrix\Sale\PaySystem
 */
interface IRecurring
{
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     */
    public function repeatRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult;
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     */
    public function cancelRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult;
    /**
     * @param Payment $payment
     * @return bool
     */
    public function isRecurring(\Bitrix\Sale\Payment $payment) : bool;
}