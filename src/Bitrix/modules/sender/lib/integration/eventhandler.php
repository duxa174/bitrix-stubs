<?php

namespace Bitrix\Sender\Integration;

/**
 * Class EventHandler
 * @package Bitrix\Sender\Integration\Crm
 */
class EventHandler
{
    /**
     * Handler of event sender/onSenderPresetList.
     *
     * @return array
     */
    public static function onSenderPresetList()
    {
    }
    /**
     * Handler of event sender/onSenderPresetList.
     *
     * @return array
     */
    public static function onSenderCompanyCard()
    {
    }
    /**
     * Handler of event sender/OnAfterPostingSendRecipient.
     *
     * @param array $eventData Event.
     * @param Entity\Letter $letter Letter.
     * @return void
     */
    public static function onAfterPostingSendRecipient(array $eventData, \Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Handler of event sender/OnAfterPostingSendRecipientMultiple.
     *
     * @param array $eventDataArray Event[].
     * @param Entity\Letter $letter Letter.
     * @return void
     */
    public static function onAfterPostingSendRecipientMultiple(array $eventDataArray, \Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Handler of event sender/onAfterPostingRecipientUnsubscribe.
     *
     * @param array $eventData Event.
     * @return void
     */
    public static function onAfterPostingRecipientUnsubscribe(array $eventData)
    {
    }
    /**
     * Handler of event sender/onConstantList.
     *
     * @param string $className Class name.
     * @return array
     */
    public static function onConstantList($className)
    {
    }
    /**
     * Handler of event sender/onTemplateList.
     *
     * @param string $messageType Message type.
     * @return array
     */
    public static function onTemplateList($messageType)
    {
    }
    /**
     * Handler of event sender/onConnectorList.
     *
     * @param array $data Data.
     * @return array
     */
    public static function onConnectorList(array $data = array())
    {
    }
    /**
     * Handler of event sender/onTriggerList.
     *
     * @param array $data Data.
     * @return array
     */
    public static function onTriggerList(array $data = [])
    {
    }
    /**
     * Handler of event sender/onSenderMessageList.
     *
     * @return array
     */
    public static function onSenderMessageList()
    {
    }
    /**
     * Handler of event sender/OnPresetMailingList.
     *
     * @return array
     */
    public static function onSenderTriggerCampaignPreset()
    {
    }
    /**
     * Handler of event sender/onSenderTransportList.
     *
     * @return array
     */
    public static function onSenderTransportList()
    {
    }
    /**
     * On before update LetterTable.
     *
     * @param MainEntity\Event $event Event.
     * @param MainEntity\EventResult $result Result.
     * @return void
     */
    public static function onBeforeUpdateLetterTable(\Bitrix\Main\Entity\Event $event, \Bitrix\Main\Entity\EventResult $result)
    {
    }
    /**
     * Handler of event main/onMailEventMailChangeStatus.
     *
     * @param Main\Mail\Callback\Result $result Callback result instance.
     * @return void
     */
    public static function onMailEventMailChangeStatus($result)
    {
    }
}