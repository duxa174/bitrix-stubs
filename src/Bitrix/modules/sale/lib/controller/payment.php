<?php

namespace Bitrix\Sale\Controller;

class Payment extends \Bitrix\Sale\Controller\Controller
{
    public function getPrimaryAutoWiredParameter()
    {
    }
    //region Actions
    public function getFieldsAction()
    {
    }
    public function modifyAction($fields)
    {
    }
    public function addAction(array $fields)
    {
    }
    public function updateAction(\Bitrix\Sale\Payment $payment, array $fields)
    {
    }
    public function deleteAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function listAction($select = [], $filter = [], $order = [], \Bitrix\Main\UI\PageNavigation $pageNavigation)
    {
    }
    public function getOrderIdAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getPaymentSystemIdAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getPaymentSystemNameAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getPersonTypeIdAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getSumAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function getSumPaidAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function isInnerAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function isMarkedAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function isPaidAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function isReturnAction(\Bitrix\Sale\Payment $payment)
    {
    }
    public function setPaidAction(\Bitrix\Sale\Payment $payment, $value)
    {
    }
    /*
    	public function setAccountNumberAction(\Bitrix\Sale\Payment $payment, $id)
    	{
    		$r = $payment->setAccountNumber($id);
    		return $this->save($payment, $r);
    	}
    */
    public function setReturnAction(\Bitrix\Sale\Payment $payment, $value)
    {
    }
    //endregion
    private function save(\Bitrix\Sale\Payment $payment, \Bitrix\Sale\Result $r)
    {
    }
    protected function get(\Bitrix\Sale\Payment $payment, array $fields = [])
    {
    }
    public static function prepareFields($fields)
    {
    }
    protected function checkPermissionEntity($name)
    {
    }
}