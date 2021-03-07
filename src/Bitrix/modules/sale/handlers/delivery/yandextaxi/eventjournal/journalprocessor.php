<?php

namespace Sale\Handlers\Delivery\YandexTaxi\EventJournal;

/**
 * Class JournalProcessor
 * @package Sale\Handlers\Delivery\YandexTaxi\EventJournal
 * @internal
 */
final class JournalProcessor
{
    /** @var EventReader */
    protected $eventReader;
    /** @var EventProcessor */
    protected $eventProcessor;
    /**
     * Process constructor.
     * @param EventReader $eventReader
     * @param EventProcessor $eventProcessor
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\EventJournal\EventReader $eventReader, \Sale\Handlers\Delivery\YandexTaxi\EventJournal\EventProcessor $eventProcessor)
    {
    }
    /**
     * @param int $serviceId
     * @return string|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function processJournal(int $serviceId)
    {
    }
    /**
     * @param int $serviceId
     * @return string
     */
    public function getAgentName(int $serviceId) : string
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function hasMore()
    {
    }
}