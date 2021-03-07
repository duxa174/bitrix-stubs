<?php

namespace Bitrix\Catalog\Helpers\Admin;

class IblockPriceChanger
{
    private $iblockId = 0;
    private $userDialogParams = array();
    /**
     * IblockChangePrice constructor.
     *
     * @param array $userDialogParams
     * @param int $iblockId
     */
    public function __construct(array $userDialogParams, $iblockId)
    {
    }
    /**
     * Set of parameters which was set in CAdminDialog
     *
     * @param array $userDialogParams		Dialog's parameter.
     * @return array|bool
     */
    public function setUserDialogParams(array $userDialogParams)
    {
    }
    /**
     * Get list of all chosen elements
     *
     * @param @return array $productsIdList
     */
    private function collectAllSectionsElements(&$productsIdList)
    {
    }
    /**
     * Get list of id's price elements
     *
     * @param array $productsIdList
     * @return array priceElementsIdList
     */
    private function collectPriceSkuElementsId($productsIdList)
    {
    }
    /**
     * Return array of parameters for CPrice::GetList
     *
     * @return array $filterList
     */
    private function initFilterParams()
    {
    }
    /**
     * Calculate price element before update by user's params
     *
     * @param float $price
     * @return float $price
     */
    private function calculateResultPrice($price)
    {
    }
    /**
     * Function updates prices of chosen elements by GroupOperations
     *
     * @param array $productsIdList		 List of elements's IDs.
     * @return Main\Result
     */
    public function updatePrices($productsIdList)
    {
    }
    private function updatePriceBlock($productId, array $prices, $basePriceId)
    {
    }
}