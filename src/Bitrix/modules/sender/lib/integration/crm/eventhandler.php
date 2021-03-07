<?php

namespace Bitrix\Sender\Integration\Crm;

/**
 * Class EventHandler
 * @package Bitrix\Sender\Integration\Crm
 */
class EventHandler
{
    private const TIME_LINE_COUNT_LIMIT = 500;
    /**
     * Handler of event sender/OnAfterPostingSendRecipient.
     *
     * @param array $eventData Event.
     * @param Entity\Letter $letter Letter.
     */
    public static function onAfterPostingSendRecipient(array $eventData, \Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Handler of event sender/onAfterPostingSendRecipientMultiple.
     *
     * @param array $eventDataArray Event[].
     * @param Entity\Letter $letter Letter.
     */
    public static function onAfterPostingSendRecipientMultiple(array $eventDataArray, \Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function handleTimeLineEvents($letterId)
    {
    }
    protected static function addTimeLineEvent(\Bitrix\Crm\Integrity\ActualEntitySelector $selector, \Bitrix\Sender\Entity\Letter $letter, $recipient)
    {
    }
    protected static function buildTimeLineEvent(\Bitrix\Crm\Integrity\ActualEntitySelector $selector, \Bitrix\Sender\Entity\Letter $letter, $recipient)
    {
    }
    protected static function getEntitySelector()
    {
    }
    protected static function getEntitySelectorById($entityTypeId, $entityId)
    {
    }
    protected static function getEntitySelectorByRecipient($recipientTypeId, $recipientCode)
    {
    }
    /**
     * lock table from selecting of the other agents
     * @return bool
     * @throws SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function lockTimelineQueue($letterId)
    {
    }
    /**
     * unlock table for select
     * @return bool
     * @throws SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function unlockTimelineQueue($letterId)
    {
    }
}