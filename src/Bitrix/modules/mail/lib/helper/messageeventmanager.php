<?php

namespace Bitrix\Mail\Helper;

class MessageEventManager
{
    const EVENT_DELETE_MESSAGES = 'onMailMessageDeleted';
    /** Dispatches OnMessageModified event for compatibility
     * If event parameters do not have ['HEADER_MD5', 'MAILBOX_USER_ID']
     * data will be obtained from database
     * @param Event $event
     * @return MessageEventManager
     */
    public static function onMailMessageDeleted(\Bitrix\Main\Event $event)
    {
    }
    private function processOnMailMessageDeletedEvent(\Bitrix\Main\Event $event)
    {
    }
    /** Dispatches OnMessageObsolete event for compatibility
     * If messages data from event parameters do not have ['HEADER_MD5', 'MAILBOX_USER_ID', 'IS_SEEN']
     * data will be obtained from database
     * @param Event $event
     * @return MessageEventManager
     */
    public static function onMailMessageModified(\Bitrix\Main\Event $event)
    {
    }
    private function processOnMailMessageModified(\Bitrix\Main\Event $event)
    {
    }
    protected function sendMessageModifiedEvent($fieldsData)
    {
    }
    private function handleRemovedEvent($fieldsData, $filter)
    {
    }
    protected function sendMessageDeletedEvent($fieldsData)
    {
    }
    private function getMailsFieldsData($eventData, $requiredKeys, $filter)
    {
    }
    protected function getMailMessagesList($filter, $selectingFields)
    {
    }
    /**
     * @param array $data
     * @return array
     * @throws \Bitrix\Main\ObjectException
     * @throws \Exception
     */
    public static function onMailEventMailRead(array $data)
    {
    }
    public static function getPullTagName($messageId)
    {
    }
    public static function getRequiredFieldNamesForEvent($eventName)
    {
    }
}