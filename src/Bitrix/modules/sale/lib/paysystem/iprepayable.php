<?php

namespace Bitrix\Sale\PaySystem;

interface IPrePayable
{
    public function initPrePayment(\Bitrix\Sale\Payment $payment = null, \Bitrix\Main\Request $request);
    public function getProps();
    public function payOrder($orderData = array());
    public function setOrderConfig($orderData = array());
    public function basketButtonAction($orderData);
}