<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class NormalizeFio
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Normalizes names
 * https://otpravka.pochta.ru/specification#/nogroup-normalization_fio
 */
class NormalizeFio extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/clean/physical";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_POST;
}