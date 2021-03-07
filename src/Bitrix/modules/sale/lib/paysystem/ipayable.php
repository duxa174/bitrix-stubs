<?php

namespace Bitrix\Sale\PaySystem;

interface IPayable
{
    public function getPrice(\Bitrix\Sale\Payment $payment);
}