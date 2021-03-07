<?php

/**
 * Class SaleAccountPay
 */
class SaleOrderPaymentChange extends \CBitrixComponent
{
    /** @var  Main\ErrorCollection $errorCollection*/
    protected $errorCollection;
    /** @var \Bitrix\Sale\Order $order */
    protected $order = \null;
    protected $isRefreshPrice = \false;
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
     * Prepare data to render in new version of component.
     * @return void
     */
    protected function buildPaySystemsList()
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
     * Move all errors to $this->arResult, if there were any
     * @return void
     */
    protected function formatResultErrors()
    {
    }
    /**
     * Collect data for component
     * @throws Main\ArgumentNullException
     */
    protected function prepareData()
    {
    }
    /**
     * Initiate inner payment
     * @return Main\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    protected function initiateInnerPay()
    {
    }
    /**
     * Load user account data
     * @return void
     */
    protected function loadInnerData()
    {
    }
    /**
     * Ordering payment for calling in ajax callback
     * @return void
     */
    protected function orderPayment()
    {
    }
}