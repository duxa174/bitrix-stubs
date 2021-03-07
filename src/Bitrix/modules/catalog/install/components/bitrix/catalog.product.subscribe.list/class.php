<?php

class CatalogProductsSubscribeListComponent extends \CCatalogViewedProductsComponent
{
    const ACTION_SUBSCRIBER_IDENTIFICATION = 'subscriberIdentification';
    const ACTION_ACCESS_CODE_VERIFICATION = 'accessCodeVerification';
    const ACTION_UNSUBSCRIBE = 'unSubscribe';
    /**
     * @var integer
     */
    protected $userId = 0;
    /**
     * List of product ids which will be showed.
     * @var array
     */
    protected $listProductId = array();
    protected $codeList = array();
    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Takes component parameters as argument and should return it formatted as needed.</p>
     * @param array[string]mixed $arParams
     * @return array[string]mixed
     *
     */
    public function onPrepareComponentParams($params)
    {
    }
    protected function prepareData()
    {
    }
    /**
     * Returns list of product ids which will be showed.
     *
     * @return array
     */
    protected function getProductIds()
    {
    }
    protected function prepareItemData($itemId, array $sku, &$params, $offerId = 0)
    {
    }
    protected function getPropertyCodeList(array $sku)
    {
    }
    protected function formatResult()
    {
    }
    protected function doActionsList()
    {
    }
    protected function runSubscriberIdentification()
    {
    }
    protected function authorizeSubscriber()
    {
    }
    protected function unSubscribe()
    {
    }
}