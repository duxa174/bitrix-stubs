<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Class CreationExternalRequestResult
 * @package Bitrix\Sale\Delivery\Services\Taxi
 * @internal
 */
final class CreationExternalRequestResult extends \Bitrix\Main\Result
{
    /** @var string */
    private $status;
    /** @var string */
    private $externalRequestId;
    /**
     * @return string
     */
    public function getStatus() : ?string
    {
    }
    /**
     * @param string $status
     * @return CreationExternalRequestResult
     * @throws ArgumentException
     */
    public function setStatus(string $status) : \Bitrix\Sale\Delivery\Services\Taxi\CreationExternalRequestResult
    {
    }
    /**
     * @return string
     */
    public function getExternalRequestId() : ?string
    {
    }
    /**
     * @param string $externalRequestId
     * @return $this
     */
    public function setExternalRequestId(string $externalRequestId) : \Bitrix\Sale\Delivery\Services\Taxi\CreationExternalRequestResult
    {
    }
}