<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent;

/**
 * Interface IListenerRegisterer
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent
 * @internal
 */
interface IListenerRegisterer
{
    /**
     * @param YandextaxiHandler $deliveryService
     * @return IListenerRegisterer
     */
    public function registerOnClaimCreated(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer;
    /**
     * @param YandextaxiHandler $deliveryService
     * @return IListenerRegisterer
     */
    public function registerOnClaimCancelled(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer;
    /**
     * @param YandextaxiHandler $deliveryService
     * @return IListenerRegisterer
     */
    public function registerOnClaimUpdated(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer;
    /**
     * @param YandextaxiHandler $deliveryService
     * @return IListenerRegisterer
     */
    public function registerOnNeedContactTo(\Sale\Handlers\Delivery\YandextaxiHandler $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer;
}