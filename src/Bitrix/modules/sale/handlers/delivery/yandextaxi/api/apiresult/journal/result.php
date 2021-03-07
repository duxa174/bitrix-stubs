<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal;

/**
 * Class Result
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal
 * @internal
 */
final class Result extends \Bitrix\Main\Result
{
    /** @var string */
    private $cursor;
    /** @var Event[]  */
    private $events = [];
    /**
     * @return string
     */
    public function getCursor()
    {
    }
    /**
     * @param string $cursor
     * @return Result
     */
    public function setCursor(string $cursor) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Result
    {
    }
    /**
     * @param Event $event
     */
    public function addEvent(\Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Event $event)
    {
    }
    /**
     * @return Event[]
     */
    public function getEvents() : array
    {
    }
}