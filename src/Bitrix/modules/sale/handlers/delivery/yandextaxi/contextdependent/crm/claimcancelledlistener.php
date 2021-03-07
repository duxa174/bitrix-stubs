<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class ClaimCancelledListener
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class ClaimCancelledListener
{
    /** @var ActivityManager */
    protected $activityManager;
    /** @var ShipmentDataExtractor */
    protected $extractor;
    /** @var BindingsMaker */
    protected $bindingsMaker;
    /**
     * ClaimCancelledListener constructor.
     * @param ActivityManager $activityManager
     * @param ShipmentDataExtractor $extractor
     * @param BindingsMaker $bindingsMaker
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ActivityManager $activityManager, \Sale\Handlers\Delivery\YandexTaxi\Common\ShipmentDataExtractor $extractor, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\BindingsMaker $bindingsMaker)
    {
    }
    /**
     * @param Event $event
     */
    public function listen(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param int $shipmentId
     * @param CancellationRequestResult $cancellationResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function createCancelledMessage(int $shipmentId, \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult $cancellationResult)
    {
    }
}