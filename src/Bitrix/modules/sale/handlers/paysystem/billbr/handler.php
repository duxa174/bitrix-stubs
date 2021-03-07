<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class BillBrHandler
 * @package Sale\Handlers\PaySystem
 */
class BillBrHandler extends \Sale\Handlers\PaySystem\BillHandler
{
    /**
     * @param Sale\Payment $payment
     * @param Request|null $request
     * @return array
     */
    protected function getPreparedParams(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @return array
     */
    public function getDemoParams()
    {
    }
}