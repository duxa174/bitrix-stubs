<?php

namespace Bitrix\Sale\AdminPage;

/**
 * Class AjaxProcessor
 * @package Bitrix\Sale\AdminPage
 * Class helper for processing ajax requests
 */
class AjaxProcessor
{
    protected $userId;
    /** @var \Bitrix\Sale\Result $result*/
    protected $result;
    protected $request;
    /** @var \Bitrix\Sale\Order $order  */
    protected $order = null;
    protected $formDataChanged = false;
    protected $registry = null;
    public function __construct($userId, array $request)
    {
    }
    /**
     * @return Result
     * @throws SystemException
     */
    public function processRequest()
    {
    }
    /**
     * @param $message
     */
    public function addResultError($message)
    {
    }
    /**
     * @param $message
     */
    public function addResultWarning($message)
    {
    }
    protected function addResultData($dataKey, $data)
    {
    }
    /* * * * * * requests actions handlers * * * * * * * * */
    protected function getProductIdBySkuPropsAction()
    {
    }
    protected function addProductToBasketAction()
    {
    }
    protected function cancelOrderAction()
    {
    }
    protected function saveCommentsAction()
    {
    }
    protected function saveStatusAction()
    {
    }
    protected function getOrderFieldsAction()
    {
    }
    protected function refreshOrderDataAction()
    {
    }
    /* We don't show all errors during forming order via ajax requests */
    protected function addFilteredErrors(\Bitrix\Sale\Result $opResults)
    {
    }
    protected function changeResponsibleUserAction()
    {
    }
    protected function updatePaymentStatusAction()
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param $fields
     * @param $strict
     * @return Result
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     */
    private function setPaymentFields(\Bitrix\Sale\Payment $payment, $fields, $strict) : \Bitrix\Sale\Result
    {
    }
    protected function deletePaymentAction()
    {
    }
    protected function deleteShipmentAction()
    {
    }
    protected function saveBasketVisibleColumnsAction()
    {
    }
    protected function updateShipmentStatusAction()
    {
    }
    protected function createNewPaymentAction()
    {
    }
    protected function getProductEditDialogHtmlAction()
    {
    }
    protected function changeDeliveryServiceAction()
    {
    }
    protected function getDefaultDeliveryPriceAction()
    {
    }
    protected function checkProductBarcodeAction()
    {
    }
    protected function deleteCouponAction()
    {
    }
    protected function addCouponsAction()
    {
    }
    protected function getProductIdByBarcodeAction()
    {
    }
    /* * * * * * * accessory methods * * * * * * * */
    protected function getDemandedFields(array $demandedFields, array $incomingFields, \Bitrix\Sale\Order $order = null)
    {
    }
    /**
     * @param $formData
     * @param Result &$result
     * @return Sale\Order
     * @throws ArgumentNullException
     * @throws UserMessageException
     */
    protected function getOrder(array $formData, \Bitrix\Sale\Result &$result = null)
    {
    }
    public static function convertEncodingArray($arData, $charsetFrom, $charsetTo, &$errorMessage = "")
    {
    }
    protected function updatePaySystemInfoAction()
    {
    }
    protected function saveTrackingNumberAction()
    {
    }
    protected function refreshTrackingStatusAction()
    {
    }
    protected function unmarkOrderAction()
    {
    }
    protected function updatePriceCodAction($payment = null)
    {
    }
    protected function getOrderTailsAction()
    {
    }
    protected function fixMarkerAction()
    {
    }
    protected function deleteMarkerAction()
    {
    }
    /**
     * Create HTML for create check window
     *
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     */
    protected function addCheckPaymentAction()
    {
    }
    /**
     * Create HTML for create check window
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     */
    protected function addCheckShipmentAction()
    {
    }
    /**
     * Add new check
     *
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     */
    protected function saveCheckAction()
    {
    }
    protected function sendQueryCheckStatusAction()
    {
    }
    /**
     * @param array $filter
     *
     * @return array
     */
    private function calculateCheckSum($filter = array())
    {
    }
    /**
     * @return array
     */
    protected function loadCashboxCheckInfoAction()
    {
    }
    /**
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function addZReportAction()
    {
    }
    /**
     * @param Result $result
     *
     * @return Result
     */
    protected function convertErrorsToConfirmation(\Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param Result $result
     *
     * @return bool
     */
    protected function hasErrorsForConfirmation(\Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param Result $result
     *
     * @return Result
     */
    protected function removeErrorsForConfirmation(\Bitrix\Sale\Result $result)
    {
    }
    /**
     * @return array
     */
    protected function getListErrorsForConfirmation()
    {
    }
}