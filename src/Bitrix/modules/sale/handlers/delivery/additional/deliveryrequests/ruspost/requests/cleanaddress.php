<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class CleanAddress
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Normalize addresses
 * https://otpravka.pochta.ru/specification#/nogroup-normalization_adress
 */
class CleanAddress extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/clean/address";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_POST;
}