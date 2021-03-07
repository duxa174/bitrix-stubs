<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class BillFrHandler
 * @package Sale\Handlers\PaySystem
 */
class BillFrHandler extends \Sale\Handlers\PaySystem\BillHandler
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