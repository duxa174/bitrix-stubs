<?php

class CCatalogViewedProductsMailComponent extends \CCatalogViewedProductsComponent
{
    /**
     * Check Required Modules
     * @throws Exception
     */
    protected function checkModules()
    {
    }
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
    /**
     * @override
     * @return integer[]
     */
    protected function getProductIds()
    {
    }
    protected function prepareItemData($itemId, array $sku, &$params, $offerId = 0, $iteration = \false)
    {
    }
    protected function getPropertyCodeList(array $sku)
    {
    }
}