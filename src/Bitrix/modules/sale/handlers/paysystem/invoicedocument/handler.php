<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class InvoiceDocumentHandler
 * @package Sale\Handlers\PaySystem
 */
class InvoiceDocumentHandler extends \Sale\Handlers\PaySystem\OrderDocumentHandler
{
    /**
     * @return string
     */
    protected static function getDataProviderClass()
    {
    }
    /**
     * @param $payment
     * @return mixed
     */
    protected function getInvoiceNumber(\Bitrix\Sale\Payment $payment)
    {
    }
}