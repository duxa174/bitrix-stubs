<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Interface IPdfDocumentGeneratable
 * @package Bitrix\Sale\PaySystem
 */
interface IDocumentGeneratePdf extends \Bitrix\Sale\PaySystem\IPdf
{
    /**
     * @param Payment $payment
     * @param $params
     * @return mixed
     */
    public function registerCallbackOnGenerate(\Bitrix\Sale\Payment $payment, $params);
}