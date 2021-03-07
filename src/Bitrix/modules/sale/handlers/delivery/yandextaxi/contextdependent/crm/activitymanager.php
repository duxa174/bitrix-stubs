<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class ActivityManager
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class ActivityManager
{
    /** @var BindingsMaker */
    protected $bindingsMaker;
    /**
     * ActivityManager constructor.
     * @param BindingsMaker $bindingsMaker
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\BindingsMaker $bindingsMaker)
    {
    }
    /**
     * @param int $shipmentId
     * @param array $fields
     * @param int|null $requestId
     */
    public function updateActivity(int $shipmentId, array $fields, int $requestId = null)
    {
    }
    /**
     * @param int $shipmentId
     * @param int $requestId
     */
    public function resetActivity(int $shipmentId, int $requestId)
    {
    }
    /**
     * @param int $shipmentId
     * @param int|null $requestId
     */
    public function completeActivity(int $shipmentId, int $requestId = null)
    {
    }
    /**
     * @param int $shipmentId
     * @param int|null $requestId
     * @return array|null
     */
    private function getByShipmentId(int $shipmentId, int $requestId = null)
    {
    }
}