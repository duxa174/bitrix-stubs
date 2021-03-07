<?php

namespace Bitrix\Sender\Trigger;

abstract class TriggerConnectorClosed extends \Bitrix\Sender\Trigger\TriggerConnector
{
    /** @return bool */
    public static final function isClosed()
    {
    }
    /**
     * @return string
     */
    public final function getEventModuleId()
    {
    }
    /**
     * @return string
     */
    public final function getEventType()
    {
    }
    /** @return array */
    public final function getProxyFieldsFromEventToConnector()
    {
    }
}