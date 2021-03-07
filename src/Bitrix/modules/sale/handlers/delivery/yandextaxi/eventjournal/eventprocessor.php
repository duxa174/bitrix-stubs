<?php

namespace Sale\Handlers\Delivery\YandexTaxi\EventJournal;

/**
 * Class EventProcessor
 * @package Sale\Handlers\Delivery\YandexTaxi\EventJournal
 * @internal
 */
final class EventProcessor
{
    public const CLAIM_UPDATED_EVENT_CODE = 'OnDeliveryYandexTaxiClaimUpdated';
    /** @var Api */
    protected $api;
    /** @var array */
    private $claims = [];
    /** @var Event[] */
    private $events = [];
    /**
     * Processor constructor.
     * @param Api $api
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Api\Api $api)
    {
    }
    /**
     * @param array $events
     */
    public function process(array $events)
    {
    }
    /**
     * @param Event[] $events
     */
    private function prepareClaims(array $events)
    {
    }
    /**
     * @param Event[] $events
     */
    private function prepareEvents(array $events)
    {
    }
    /**
     * @return array
     */
    private function getKnownEventTypes()
    {
    }
    /**
     * @return void
     */
    private function findChanges()
    {
    }
    /**
     * @return void
     */
    private function applyChanges()
    {
    }
    /**
     * @param int $id
     * @param string $newUpdatedTs
     * @param array $fields
     */
    private function updateClaim(int $id, string $newUpdatedTs, array $fields)
    {
    }
    /**
     * @param string $dateTime
     * @return bool|\DateTime
     */
    private function readDate(string $dateTime)
    {
    }
}