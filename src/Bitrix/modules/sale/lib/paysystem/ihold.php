<?php

namespace Bitrix\Sale\PaySystem;

interface IHold
{
    public function cancel(\Bitrix\Sale\Payment $payment);
    public function confirm(\Bitrix\Sale\Payment $payment);
}