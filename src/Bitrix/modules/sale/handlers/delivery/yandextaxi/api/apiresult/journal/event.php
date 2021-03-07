<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal;

/**
 * Class Event
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult
 * @internal
 */
abstract class Event
{
    /** @var string */
    protected $claimId;
    /** @var string */
    protected $updatedTs;
    /**
     * @return string
     */
    public abstract function getCode() : string;
    /**
     * @return string
     */
    public function getClaimId()
    {
    }
    /**
     * @param string $claimId
     * @return Event
     */
    public function setClaimId(string $claimId) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event
    {
    }
    /**
     * @return string
     */
    public function getUpdatedTs()
    {
    }
    /**
     * @param string $updatedTs
     * @return Event
     */
    public function setUpdatedTs(string $updatedTs) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event
    {
    }
    /**
     * @return array
     */
    public abstract function provideUpdateFields() : array;
}