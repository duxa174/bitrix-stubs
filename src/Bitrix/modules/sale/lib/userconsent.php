<?php

namespace Bitrix\Sale;

class UserConsent
{
    const PROVIDER_CODE = 'sale/order';
    const DATA_PROVIDER_CODE = 'sale/company';
    /**
     * Event `main/OnUserConsentProviderList` handler.
     *
     * @return EventResult
     */
    public static function onProviderList()
    {
    }
    /**
     * Event `main/OnUserConsentDataProviderList` handler.
     *
     * @return EventResult
     */
    public static function onDataProviderList()
    {
    }
}