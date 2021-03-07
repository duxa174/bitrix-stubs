<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class ClaimUpdatesListener
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class ClaimUpdatesListener
{
    /** @var ActivityManager */
    protected $activityManager;
    /** @var StatusMapper */
    protected $statusMapper;
    /** @var Api */
    protected $api;
    /** @var ShipmentDataExtractor */
    protected $extractor;
    /** @var BindingsMaker */
    protected $bindingsMaker;
    /** @var Base */
    protected $deliveryService;
    /**
     * ClaimUpdatesListener constructor.
     * @param ActivityManager $activityManager
     * @param StatusMapper $statusMapper
     * @param Api $api
     * @param ShipmentDataExtractor $extractor
     * @param BindingsMaker $bindingsMaker
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ActivityManager $activityManager, \Sale\Handlers\Delivery\YandexTaxi\Common\StatusMapper $statusMapper, \Sale\Handlers\Delivery\YandexTaxi\Api\Api $api, \Sale\Handlers\Delivery\YandexTaxi\Common\ShipmentDataExtractor $extractor, \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\BindingsMaker $bindingsMaker)
    {
    }
    /**
     * @param Event $event
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function listen(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param Shipment $shipment
     * @param array $performer
     * @param array $claim
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function sendSmsToClient(\Bitrix\Crm\Order\Shipment $shipment, array $performer, array $claim)
    {
    }
    /**
     * @param Order $order
     * @return Company|Contact|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\SystemException
     */
    private function getEntityCommunication(\Bitrix\Crm\Order\Order $order)
    {
    }
    /**
     * @param ContactCompanyEntity $entity
     * @return mixed|string
     * @throws \Bitrix\Main\NotImplementedException
     */
    private function getEntityCommunicationPhone(\Bitrix\Crm\Order\ContactCompanyEntity $entity)
    {
    }
    /**
     * @param array $claim
     * @return array
     */
    private function getPerformer(array $claim)
    {
    }
    /**
     * @param array $request
     * @param array $performer
     */
    private function updateTaxiActivityWithPerformer(array $request, array $performer)
    {
    }
    /**
     * @param string $claimId
     * @return string
     */
    private function getTrackingLink(string $claimId) : string
    {
    }
    /**
     * @return Uri
     */
    private function getSmsProviderSetupLink()
    {
    }
    /**
     * @param array $claim
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private function getSmsBody(array $claim) : string
    {
    }
    /**
     * @param Base $deliveryService
     * @return ClaimUpdatesListener
     */
    public function setDeliveryService(\Bitrix\Sale\Delivery\Services\Base $deliveryService) : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimUpdatesListener
    {
    }
}