<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal;

/**
 * Class StatusChanged
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult
 * @internal
 */
final class StatusChanged extends \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event
{
    public const EVENT_CODE = 'status_changed';
    /** @var string */
    protected $newStatus;
    /** @var string */
    protected $resolution;
    /**
     * @return string
     */
    public function getCode() : string
    {
    }
    /**
     * @return string
     */
    public function getNewStatus()
    {
    }
    /**
     * @param string $newStatus
     * @return StatusChanged
     */
    public function setNewStatus(string $newStatus) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\StatusChanged
    {
    }
    /**
     * @return string
     */
    public function getResolution()
    {
    }
    /**
     * @param string $resolution
     * @return StatusChanged
     */
    public function setResolution(string $resolution) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\StatusChanged
    {
    }
    /**
     * @inheritdoc
     */
    public function provideUpdateFields() : array
    {
    }
}