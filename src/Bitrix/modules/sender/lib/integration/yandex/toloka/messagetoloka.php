<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka;

class MessageToloka implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iToloka
{
    const CODE = 'toloka';
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /**
     * MessageBase constructor.
     */
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function getName()
    {
    }
    /**
     * @inheritDoc
     */
    public function getSupportedTransports()
    {
    }
    /**
     * Load configuration.
     *
     * @param integer|null $id ID.
     *
     * @return Message\Configuration
     */
    public function loadConfiguration($id = null)
    {
    }
    protected function setConfigurationOptions()
    {
    }
    public function getUiFilterFields()
    {
    }
    /**
     * @inheritDoc
     */
    public function getCode()
    {
    }
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration Configuration.
     *
     * @return \Bitrix\Main\Result
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * @inheritDoc
     */
    public function copyConfiguration($id)
    {
    }
}