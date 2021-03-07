<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Sale;

/**
 * Class ListenerRegisterer
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Sale
 * @internal
 */
final class ListenerRegisterer implements \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
{
    /**
     * @inheritDoc
     */
    public function registerOnClaimCreated(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @inheritDoc
     */
    public function registerOnClaimCancelled(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @inheritDoc
     */
    public function registerOnClaimUpdated(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @inheritDoc
     */
    public function registerOnNeedContactTo(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
}