<?php

namespace Bitrix\Sale\Delivery\Rest;

class BaseService extends \IRestService
{
    /**
     * @throws AccessException
     * @throws Main\LoaderException
     */
    protected static function checkDeliveryPermission() : void
    {
    }
    /**
     * @param array $data
     * @return array
     */
    protected static function prepareParams(array $data) : array
    {
    }
}