<?php

namespace Sale\Handlers\Delivery\Additional\RusPost\Reliability;

/**
 * Class Reliability
 * @package Sale\Handlers\Delivery\Additional\RusPost\Reliability
 */
class Reliability extends \Bitrix\Sale\Internals\EO_Reliability
{
    /**
     * @param string $fullName
     * @param string $address
     * @param string $phone
     * @return Reliability
     */
    public static function create(string $fullName, string $address, string $phone)
    {
    }
}