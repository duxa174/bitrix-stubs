<?php

namespace Bitrix\Sale\PaySystem;

interface IPartialHold extends \Bitrix\Sale\PaySystem\IHold
{
    public function confirm(\Bitrix\Sale\Payment $payment, $sum = 0);
}