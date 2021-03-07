<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class ClaimCreatedListener
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class ClaimCreatedListener
{
    /** @var ActivityManager */
    protected $activityManager;
    /** @var ShipmentDataExtractor */
    protected $extractor;
    /** @var RateCalculator */
    protected $calculator;
    /** @var BindingsMaker */
    protected $bindingsMaker;
    /**
     * ClaimCreatedListener constructor.
     * @param ActivityManager $activityManager
     * @param ShipmentDataExtractor $extractor
     * @param RateCalculator $calculator
     * @param BindingsMaker $bindingsMaker
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ActivityManager $activityManager, \Sale\Handlers\Delivery\YandexTaxi\Common\ShipmentDataExtractor $extractor, \Sale\Handlers\Delivery\YandexTaxi\RateCalculator $calculator, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\BindingsMaker $bindingsMaker)
    {
    }
    /**
     * @param Event $event
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public function listen(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Shipment $shipment
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    private function createCallMessage(\Bitrix\Crm\Order\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @param CreationRequestResult $creationRequestResult
     */
    private function updateActivity(\Bitrix\Crm\Order\Shipment $shipment, \Bitrix\Sale\Delivery\Services\Taxi\CreationRequestResult $creationRequestResult)
    {
    }
}