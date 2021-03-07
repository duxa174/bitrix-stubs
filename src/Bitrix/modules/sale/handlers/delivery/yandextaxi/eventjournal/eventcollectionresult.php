<?php

namespace Sale\Handlers\Delivery\YandexTaxi\EventJournal;

/**
 * Class EventCollectionResult
 * @package Sale\Handlers\Delivery\YandexTaxi\EventJournal
 * @internal
 */
final class EventCollectionResult extends \Bitrix\Main\Result
{
    /** @var Event[] */
    private $events = [];
    /**
     * @return Event[]
     */
    public function getEvents() : array
    {
    }
    /**
     * @param Event $event
     */
    public function addEvent(\Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event $event)
    {
    }
}