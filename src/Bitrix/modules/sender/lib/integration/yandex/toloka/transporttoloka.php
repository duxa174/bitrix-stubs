<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka;

/**
 * Class TransportToloka
 */
class TransportToloka implements \Bitrix\Sender\Transport\iBase
{
    const CODE = 'toloka';
    /**
     * @inheritDoc
     */
    public function getName()
    {
    }
    /**
     * @inheritDoc
     */
    public function getCode()
    {
    }
    /**
     * Get supported recipient types.
     *
     * @return integer[]
     */
    public function getSupportedRecipientTypes()
    {
    }
    /**
     * @inheritDoc
     */
    public function loadConfiguration()
    {
    }
    /**
     * @inheritDoc
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * @inheritDoc
     */
    public function start()
    {
    }
    /**
     * @inheritDoc
     */
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * @inheritDoc
     */
    public function end()
    {
    }
}