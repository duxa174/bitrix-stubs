<?php

namespace Bitrix\MessageService\Sender;

class SmsManager
{
    private static $senders;
    /**
     * @return Base[] List of senders.
     */
    public static function getSenders()
    {
    }
    private static function fireSendersEvent()
    {
    }
    /**
     * @return array Simple list of senders, array(id => name)
     */
    public static function getSenderSelectList()
    {
    }
    /**
     * @return array Sender list information.
     */
    public static function getSenderInfoList()
    {
    }
    /**
     * @param $id
     * @return Base|null Sender instance.
     */
    public static function getSenderById($id)
    {
    }
    /**
     * Get default SMS sender.
     * @return Base
     */
    public static function getDefaultSender()
    {
    }
    /**
     * @return bool Can use SMS transport.
     */
    public static function canUse()
    {
    }
    /**
     * @return string Manage url
     */
    public static function getManageUrl()
    {
    }
    /**
     * Get first Sender which is ready to use it.
     * @return Base|null Sender instance.
     */
    public static function getUsableSender()
    {
    }
    /**
     * @param array $messageFields
     * @param Base|null $sender
     * @return Message
     * @throws Main\ArgumentTypeException
     */
    public static function createMessage(array $messageFields, \Bitrix\MessageService\Sender\Base $sender = null)
    {
    }
    /**
     * @param array $messageFields
     * @param Base|null $sender
     * @return Main\Entity\AddResult
     * @throws Main\ArgumentTypeException
     */
    public static function sendMessage(array $messageFields, \Bitrix\MessageService\Sender\Base $sender = null)
    {
    }
    /**
     * @param array $messageFields
     * @param Base|null $sender
     * @return Main\Entity\AddResult
     * @throws Main\ArgumentTypeException
     */
    public static function sendMessageDirectly(array $messageFields, \Bitrix\MessageService\Sender\Base $sender = null)
    {
    }
    public static function getMessageStatus($messageId)
    {
    }
}