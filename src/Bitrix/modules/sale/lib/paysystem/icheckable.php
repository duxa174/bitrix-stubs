<?php

namespace Bitrix\Sale\PaySystem;

interface ICheckable
{
    /**
     * @param Payment $payment
     * @return ServiceResult
     */
    public function check(\Bitrix\Sale\Payment $payment);
}