<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Class CreationRequestResult
 * @package Bitrix\Sale\Delivery\Services\Taxi
 * @internal
 */
final class CreationRequestResult extends \Bitrix\Main\Result
{
    /** @var string */
    private $status;
    /** @var int */
    private $requestId;
    /**
     * @param string $status
     * @return CreationRequestResult
     * @throws ArgumentException
     */
    public function setStatus(string $status) : \Bitrix\Sale\Delivery\Services\Taxi\CreationRequestResult
    {
    }
    /**
     * @param int $requestId
     * @return CreationRequestResult
     */
    public function setRequestId(int $requestId) : \Bitrix\Sale\Delivery\Services\Taxi\CreationRequestResult
    {
    }
    /**
     * @return string|null
     */
    public function getStatus() : ?string
    {
    }
    /**
     * @return int|null
     */
    public function getRequestId() : ?int
    {
    }
}