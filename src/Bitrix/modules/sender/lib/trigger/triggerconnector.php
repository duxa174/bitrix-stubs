<?php

namespace Bitrix\Sender\Trigger;

abstract class TriggerConnector extends \Bitrix\Sender\Trigger\Base
{
    /** @var Connector\Base $connector */
    public $connector;
    /** @return string */
    protected final function getConnectorForm()
    {
    }
    /** @return bool */
    protected final function filterConnectorData()
    {
    }
    /** @return string */
    public function getForm()
    {
    }
    /** @return bool */
    public function filter()
    {
    }
    /** @return mixed */
    public function getRecipient()
    {
    }
    /** @return array */
    public function getProxyFieldsFromEventToConnector()
    {
    }
    /**
     * @return Connector\Result
     */
    public function getRecipientResult()
    {
    }
    /**
     * return filled array('MODULE_ID' => '', 'CODE' => '') that describes connector
     * or return object \Bitrix\Sender\Connector
     *
     * @return array|Connector\Base
     */
    public function getConnector()
    {
    }
}