<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Class CancellationRequestResult
 * @package Bitrix\Sale\Delivery\Services\Taxi
 * @internal
 */
final class CancellationRequestResult extends \Bitrix\Main\Result
{
    /** @var bool */
    private $isPaid = false;
    /**
     * @return bool
     */
    public function isPaid() : bool
    {
    }
    /**
     * @param bool $isPaid
     * @return CancellationRequestResult
     */
    public function setIsPaid(bool $isPaid) : \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult
    {
    }
}