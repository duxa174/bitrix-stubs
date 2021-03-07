<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class OPS
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Receives shipping points for user
 * https://otpravka.pochta.ru/specification#/settings-shipping_points
 */
class OPS extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/user-shipping-points";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_GET;
}