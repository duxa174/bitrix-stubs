<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class ListenerRegisterer
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class ListenerRegisterer implements \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
{
    /** @var ClaimCreatedListener */
    private $claimCreatedListener;
    /** @var ClaimCancelledListener */
    private $claimCancelledListener;
    /** @var ClaimUpdatesListener */
    private $claimUpdatesListener;
    /** @var ContactToRequiredListener */
    private $contactToRequiredListener;
    /**
     * ListenerRegisterer constructor.
     * @param ClaimCreatedListener $claimCreatedListener
     * @param ClaimCancelledListener $claimCancelledListener
     * @param ClaimUpdatesListener $claimUpdatesListener
     * @param ContactToRequiredListener $needContactToListener
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimCreatedListener $claimCreatedListener, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimCancelledListener $claimCancelledListener, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimUpdatesListener $claimUpdatesListener, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ContactToRequiredListener $needContactToListener)
    {
    }
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