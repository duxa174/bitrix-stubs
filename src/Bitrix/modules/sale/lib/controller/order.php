<?php

namespace Bitrix\Sale\Controller;

class Order extends \Bitrix\Sale\Controller\Controller
{
    public function getPrimaryAutoWiredParameter()
    {
    }
    //region Actions
    public function getFieldsAction()
    {
    }
    public function getAction(\Bitrix\Sale\Order $order)
    {
    }
    public function tryModifyAction(array $fields)
    {
    }
    public function modifyAction(array $fields)
    {
    }
    public function tryAddAction(array $fields)
    {
    }
    public function addAction(array $fields)
    {
    }
    public function tryUpdateAction(\Bitrix\Sale\Order $order, array $fields)
    {
    }
    public function updateAction(\Bitrix\Sale\Order $order, array $fields)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation = null)
    {
    }
    public function deleteAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getDeliveryIdListAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPaymentsAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPaySystemIdListAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPrintedChecksAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getShipmentsAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getBasketAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getCurrencyAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getDateInsertAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getApplyDiscountAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPersonTypeIdAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPriceAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getPropertyValuesAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getSiteIdAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getSumPaidAction(\Bitrix\Sale\Order $order)
    {
    }
    /*
    	public function getTaxListAction(\Bitrix\Sale\Order $order)
    	{
    		//TODO: return $order->getTax()->toArray();
    		return $this->toArray($order)['TAX'];
    	}
    
    	public function getTaxLocationAction(\Bitrix\Sale\Order $order)
    	{
    		return $order->getTaxLocation();
    	}
    */
    public function getTaxPriceAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getTaxValueAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getUserIdAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getVatRateAction(\Bitrix\Sale\Order $order)
    {
    }
    public function getVatSumAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isCanceledAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isExternalAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isMarkedAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isPaidAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isShippedAction(\Bitrix\Sale\Order $order)
    {
    }
    public function isUsedVatAction(\Bitrix\Sale\Order $order)
    {
    }
    //public function applyDiscountAction(\Bitrix\Sale\Order $order, array $data)
    //public function refreshAction(\Bitrix\Sale\Order $order, array $data)
    //endregion
    //region admin Actions
    //public function cancelOrderAction(\Bitrix\Sale\Order $order, array $data)
    //public function saveCommentsAction(\Bitrix\Sale\Order $order, array $data)
    //public function saveStatusAction(\Bitrix\Sale\Order $order, array $data)
    //public function changeResponsibleUserAction(\Bitrix\Sale\Order $order, array $data)
    //public function updatePaymentStatusAction()
    //public function updateShipmentStatusAction()
    //public function changeDeliveryServiceAction()
    //public function checkProductBarcodeAction()
    //public function deleteCouponAction(\Bitrix\Sale\Order $order, array $data)
    //public function addCouponsAction(\Bitrix\Sale\Order $order, array $data)
    //public function getProductIdByBarcodeAction()
    //public function refreshOrderDataAction(\Bitrix\Sale\Order $order, array $data)
    //endregion
    protected function modify(array $fields)
    {
    }
    protected function add(array $fields)
    {
    }
    protected function update(\Bitrix\Sale\Order $order, array $fields)
    {
    }
    protected function get(\Bitrix\Sale\Order $order, array $fields = [])
    {
    }
    public static function prepareFields(array $fields)
    {
    }
    private static function setFlagActionImport()
    {
    }
    public function importDeleteAction(\Bitrix\Sale\Order $order)
    {
    }
    public function resolveExternalIdToInternalId(array $fields)
    {
    }
    protected function getInternalId($externalId, $typeName, $params = [])
    {
    }
    private function prepareFieldsBasketItem($fields)
    {
    }
    private function prepareFieldsShipment($item)
    {
    }
    public function importAction(array $fields)
    {
    }
    public function prepareFieldsImport($fields)
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
}