<?php

namespace Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests;

/**
 * Class UnreliableRecipient
 * @package Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests
 * Normalizes names
 * https://otpravka.pochta.ru/specification#/nogroup-unreliable_recipient
 */
class UnreliableRecipient extends \Sale\Handlers\Delivery\Additional\DeliveryRequests\RusPost\Requests\Base
{
    protected $path = "/1.0/unreliable-recipient";
    protected $type = \Bitrix\Main\Web\HttpClient::HTTP_POST;
}