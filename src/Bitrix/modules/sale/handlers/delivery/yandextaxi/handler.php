<?php

namespace Sale\Handlers\Delivery;

/**
 * Class YandextaxiHandler
 * @package Sale\Handlers\Delivery\YandexTaxi
 */
final class YandextaxiHandler extends \Bitrix\Sale\Delivery\Services\Taxi\Taxi implements \Bitrix\Sale\Delivery\Services\Crm\ICrmActivityProvider, \Bitrix\Sale\Delivery\Services\Crm\ICrmEstimationMessageProvider
{
    public const SERVICE_CODE = 'YANDEX_TAXI';
    /** @var RateCalculator */
    private $rateCalculator;
    /** @var Api */
    private $api;
    /** @var ClaimBuilder */
    private $claimBuilder;
    /** @var StatusMapper */
    private $statusMapper;
    /** @var JournalProcessor */
    private $journalProcessor;
    /** @var Installator */
    private $installator;
    /** @var ShipmentDataExtractor */
    private $extractor;
    /** @var Crm\BindingsMaker */
    private $crmBindingsMaker;
    /** @var bool */
    protected static $whetherAdminExtraServicesShow = true;
    /**
     * @inheritdoc
     */
    public function __construct(array $initParams)
    {
    }
    /**
     * @inheritdoc
     */
    public static function getClassTitle()
    {
    }
    /**
     * @inheritdoc
     */
    public static function getClassDescription()
    {
    }
    /**
     * @inheritdoc
     */
    protected function calculateConcrete(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @inheritDoc
     */
    protected function createTaxiExternalRequest(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Taxi\CreationExternalRequestResult
    {
    }
    /**
     * @inheritDoc
     */
    protected function cancelTaxiExternalRequest(string $externalRequestId) : \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult
    {
    }
    /**
     * @inheritDoc
     */
    public function provideCrmActivity(\Bitrix\Crm\Order\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @inheritDoc
     */
    public function provideCrmEstimationMessage(\Bitrix\Crm\Order\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage
    {
    }
    /**
     * @param \Bitrix\Crm\Order\Shipment $shipment
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function makeCrmEntitySharedFields(\Bitrix\Crm\Order\Shipment $shipment)
    {
    }
    /**
     * @inheritdoc
     */
    public static function onBeforeAdd(array &$fields = array()) : \Bitrix\Main\Result
    {
    }
    /**
     * @inheritdoc
     */
    public static function onAfterAdd($serviceId, array $fields = [])
    {
    }
    /**
     * @inheritDoc
     */
    public static function onAfterDelete($serviceId)
    {
    }
    /**
     * @return JournalProcessor
     */
    public function getYandexTaxiJournalProcessor() : \Sale\Handlers\Delivery\YandexTaxi\EventJournal\JournalProcessor
    {
    }
    /**
     * @inheritdoc
     */
    protected function getConfigStructure()
    {
    }
    /**
     * @inheritdoc
     */
    public static function isHandlerCompatible()
    {
    }
    /**
     * @inheritDoc
     */
    public static function whetherAdminExtraServicesShow()
    {
    }
}