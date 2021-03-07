<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

final class SettingsContainer
{
    const DISALLOW_NEW_USER_CREATION = 0;
    const ALLOW_NEW_USER_CREATION = 1;
    const SET_ANONYMOUS_USER = 2;
    private $settings = [
        //Delete clients which is not in the parameters
        'deleteClientsIfNotExists' => false,
        //Allow creation new user if it doesn't exist yet.
        'createUserIfNeed' => self::ALLOW_NEW_USER_CREATION,
        //Delete tradeBindings which is not in the parameters
        'deleteTradeBindingIfNotExists' => false,
        //Delete basketItems which is not in the parameters
        'deleteBaketItemsIfNotExists' => true,
        //Delete payment which is not in the parameters
        'deletePaymentIfNotExists' => false,
        //Delete shipment which is not in the parameters
        'deleteShipmentIfNotExists' => false,
        //Delete shipmentItem which is not in the parameters
        'deleteShipmentItemIfNotExists' => false,
        //Delete propertyValues which is not in the parameters
        'deletePropertyValuesIfNotExists' => false,
        //Do we need to create a new payment by default, if payments empty?
        'createDefaultPaymentIfNeed' => true,
        //Do we need to create a new shipment by default, if shipments empty?
        'createDefaultShipmentIfNeed' => true,
        //Do we need update the price of just added products.
        //Now it is used only after the buyerId was changed.
        'needUpdateNewProductPrice' => false,
        //Refresh all products data.
        //Now it is used only during order recalculation
        'isRefreshData' => false,
        //For performance purposes
        'cacheProductProviderData' => true,
        //Other errors will be ignored.
        //We need this mostly during order creation
        //empty means - all acceptable
        'acceptableErrorCodes' => [],
        //We need this if some of order properties upload files.
        'propsFiles' => [],
    ];
    public function __construct(array $settings)
    {
    }
    public function getItemValue($name)
    {
    }
    private function getAvailableItems()
    {
    }
}