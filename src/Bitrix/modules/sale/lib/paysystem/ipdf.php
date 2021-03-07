<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Interface IPdf
 * @package Bitrix\Sale\PaySystem
 */
interface IPdf
{
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function getContent(\Bitrix\Sale\Payment $payment);
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function getFile(\Bitrix\Sale\Payment $payment);
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function isGenerated(\Bitrix\Sale\Payment $payment);
}