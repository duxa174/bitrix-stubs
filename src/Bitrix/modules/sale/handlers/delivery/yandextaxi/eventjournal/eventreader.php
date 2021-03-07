<?php

namespace Sale\Handlers\Delivery\YandexTaxi\EventJournal;

/**
 * Class EventReader
 * @package Sale\Handlers\Delivery\YandexTaxi\EventJournal
 * @internal
 */
final class EventReader
{
    /** @var Api */
    protected $api;
    /**
     * Reader constructor.
     * @param Api $api
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Api\Api $api)
    {
    }
    /**
     * @param int $deliveryServiceId
     * @param string|null $prevCursor
     * @return EventCollectionResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function read(int $deliveryServiceId, $prevCursor) : \Sale\Handlers\Delivery\YandexTaxi\EventJournal\EventCollectionResult
    {
    }
}