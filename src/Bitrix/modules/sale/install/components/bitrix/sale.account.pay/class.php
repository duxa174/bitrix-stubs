<?php

/**
 * Class SaleAccountPay
 */
class SaleAccountPay extends \CBitrixComponent
{
    /** @var  Main\ErrorCollection $errorCollection*/
    protected $errorCollection;
    /**
     * @var Sale\Registry registry
     */
    protected $registry = \null;
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $params List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * Check Required Modules
     * @throws Main\SystemException
     * @return bool
     */
    protected function checkModules()
    {
    }
    /**
     * Prepare data to render in old version of component.
     * @return void
     */
    protected function fillArrayResultOld()
    {
    }
    /**
     * Get list of paysystems by user's type
     * @return array
     */
    protected function getListPaySystems()
    {
    }
    /**
     * Prepare data to render in new version of component.
     * @return void
     */
    protected function fillArrayResult()
    {
    }
    /**
     * Function implements all the life cycle of our component
     * @return void
     */
    public function executeComponent()
    {
    }
    /**
     * Return current class registry
     *
     * @param mixed[] array that date conversion performs in
     * @return void
     */
    protected function setRegistry()
    {
    }
    /**
     * Move all errors to $this->arResult, if there were any
     * @return void
     */
    protected function formatResultErrors()
    {
    }
    /**
     * Initialize empty shipment of order
     * @param Sale\Order $order
     * @return void
     */
    protected function initOrderShipment($order)
    {
    }
    /**
     * Initialize new basket with payment value
     * @param float $requestValue
     * @param bool $savePropertyCharge
     * @return Sale\Basket $basket
     */
    protected function initBasket($requestValue, $savePropertyCharge = \true)
    {
    }
    /**
     * Initialize new order
     * @param Sale\Basket $basket
     * @param int $personType
     * @return Sale\Order $order
     */
    protected function initOrder($basket, $personType)
    {
    }
    /**
     * Sending value payment to basket in old version component. Made for compatibility
     * @param Main\HttpRequest $request
     * @return void
     */
    protected function sendToBasketOld($request)
    {
    }
    /**
     * Preparing data for ordering payment
     * @param Main\HttpRequest $request
     * @return bool $result
     */
    protected function checkRequestData($request)
    {
    }
    /**
     * Ordering payment for calling in ajax callback
     * @param Main\HttpRequest $request			Params were selected in template.
     * @return void
     */
    protected function orderPayment($request)
    {
    }
}