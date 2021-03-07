<?php

namespace Bitrix\Sale\PaySystem;

interface IRefund
{
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum);
}