<?php

namespace Sale\Handlers\Delivery\YandexTaxi;

/**
 * Class ServiceLocator
 * @package Sale\Handlers\Delivery\YandexTaxi
 * @internal
 */
final class ServiceContainer
{
    /** @var Api */
    private static $api;
    /** @var OauthTokenProvider */
    private static $oauthTokenProvider;
    /** @var ClaimReader */
    private static $claimReader;
    /** @var EventBuilder */
    private static $eventJournalBuilder;
    /** @var Logger */
    private static $logger;
    /** @var Client */
    private static $transport;
    /** @var JournalProcessor */
    private static $journalProcessor;
    /** @var EventReader */
    private static $eventReader;
    /** @var EventProcessor */
    private static $eventProcessor;
    /** @var RateCalculator */
    private static $rateCalculator;
    /** @var Installator */
    private static $installator;
    /** @var ClaimBuilder */
    private static $claimBuilder;
    /** @var Crm\ListenerRegisterer */
    private static $crmListenerRegisterer;
    /** @var Crm\ClaimCreatedListener */
    private static $crmClaimCreatedListener;
    /** @var Crm\ClaimCancelledListener */
    private static $crmClaimCancelledListener;
    /** @var Crm\ClaimUpdatesListener */
    private static $crmClaimUpdatesListener;
    /** @var Crm\ContactToRequiredListener */
    private static $crmContactToRequiredListener;
    /** @var Crm\ActivityManager */
    private static $crmActivityManager;
    /** @var StatusMapper */
    private static $statusMapper;
    /** @var Sale\ListenerRegisterer */
    private static $saleListenerRegisterer;
    /** @var ShipmentDataExtractor */
    private static $shipmentDataExtractor;
    /** @var Crm\BindingsMaker */
    private static $crmBindingsMaker;
    /**
     * @return Logger
     */
    private static function getLogger() : \Sale\Handlers\Delivery\YandexTaxi\Common\Logger
    {
    }
    /**
     * @return ClaimReader
     */
    private static function getClaimReader() : \Sale\Handlers\Delivery\YandexTaxi\Api\ClaimReader\ClaimReader
    {
    }
    /**
     * @return EventBuilder
     */
    private static function getEventJournalBuilder() : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\EventBuilder
    {
    }
    /**
     * @return Client
     */
    private static function getTransport() : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
    /**
     * @return OauthTokenProvider
     */
    public static function getOauthTokenProvider() : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\OauthTokenProvider
    {
    }
    /**
     * @return Api
     */
    public static function getApi() : \Sale\Handlers\Delivery\YandexTaxi\Api\Api
    {
    }
    /**
     * @return JournalProcessor
     */
    public static function getJournalProcessor() : \Sale\Handlers\Delivery\YandexTaxi\EventJournal\JournalProcessor
    {
    }
    /**
     * @return EventReader
     */
    private static function getEventReader() : \Sale\Handlers\Delivery\YandexTaxi\EventJournal\EventReader
    {
    }
    /**
     * @return EventProcessor
     */
    private static function getEventProcessor() : \Sale\Handlers\Delivery\YandexTaxi\EventJournal\EventProcessor
    {
    }
    /**
     * @return RateCalculator
     */
    public static function getRateCalculator() : \Sale\Handlers\Delivery\YandexTaxi\RateCalculator
    {
    }
    /**
     * @return Installator
     */
    public static function getInstallator() : \Sale\Handlers\Delivery\YandexTaxi\Installator\Installator
    {
    }
    /**
     * @return ClaimBuilder
     */
    public static function getClaimBuilder() : \Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder\ClaimBuilder
    {
    }
    /**
     * @return IListenerRegisterer
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getListenerRegisterer() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @return IListenerRegisterer
     */
    private static function getCrmListenerRegisterer() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @return Crm\ClaimCreatedListener
     */
    private static function getCrmClaimCreatedListener() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimCreatedListener
    {
    }
    /**
     * @return Crm\ClaimCancelledListener
     */
    private static function getCrmClaimCancelledListener() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimCancelledListener
    {
    }
    /**
     * @return Crm\ClaimUpdatesListener
     */
    private static function getCrmClaimUpdatesListener() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ClaimUpdatesListener
    {
    }
    /**
     * @return Crm\ContactToRequiredListener
     */
    private static function getCrmContactToRequiredListener() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ContactToRequiredListener
    {
    }
    /**
     * @return Crm\ActivityManager
     */
    private static function getCrmClaimActivityManager() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\ActivityManager
    {
    }
    /**
     * @return StatusMapper
     */
    public static function getStatusMapper() : \Sale\Handlers\Delivery\YandexTaxi\Common\StatusMapper
    {
    }
    /**
     * @return IListenerRegisterer
     */
    private static function getSaleListenerRegisterer() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\IListenerRegisterer
    {
    }
    /**
     * @return ShipmentDataExtractor
     */
    public static function getShipmentDataExtractor() : \Sale\Handlers\Delivery\YandexTaxi\Common\ShipmentDataExtractor
    {
    }
    /**
     * @return Crm\BindingsMaker
     */
    public static function getCrmBindingsMaker() : \Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm\BindingsMaker
    {
    }
}