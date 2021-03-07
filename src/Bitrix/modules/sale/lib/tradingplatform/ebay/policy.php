<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

class Policy
{
    protected $http;
    protected $authToken = "";
    protected $siteId = "";
    const TYPE_RETURN = 0;
    const TYPE_PAYMENT = 1;
    const TYPE_SHIPPING = 2;
    const URL = "https://svcs.ebay.com/services/selling/v1/SellerProfilesManagementService";
    public function __construct($authToken, $siteId)
    {
    }
    public function getItemsList()
    {
    }
    /**
     * @param int $type Policy::TYPE_RETURN||Policy::TYPE_PAYMENT||Policy::TYPE_SHIPPING
     * @return array
     */
    public function getPoliciesNames($type)
    {
    }
    protected function getItems()
    {
    }
    protected function sendRequest($operationName, $data)
    {
    }
}