<?php

namespace Bitrix\Main\Mail;

class EventManager
{
    /**
     * @return string|null
     */
    public static function checkEvents()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function executeEvents()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     */
    public static function cleanUpAgent()
    {
    }
    /**
     * Agent for clean up event attachments.
     *
     * @return string
     */
    public static function cleanUpAttachmentAgent()
    {
    }
    /**
     * Handler of event main/OnMailEventSubscriptionList
     *
     * @param array $data Data.
     * @return array
     */
    public static function onMailEventSubscriptionList(array $data)
    {
    }
    /**
     * Handler of event main/OnMailEventSubscriptionDisable
     *
     * @param array $data Data.
     * @return bool
     */
    public static function onMailEventSubscriptionDisable(array $data)
    {
    }
}