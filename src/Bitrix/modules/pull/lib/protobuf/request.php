<?php

namespace Bitrix\Pull\Protobuf;

/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : request.proto
 */
/**
 * Protobuf message : Request
 */
class Request extends \Protobuf\AbstractMessage
{
    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;
    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;
    /**
     * incomingMessages optional message = 1
     *
     * @var \Bitrix\Pull\Protobuf\IncomingMessagesRequest
     */
    protected $incomingMessages = null;
    /**
     * channelStats optional message = 2
     *
     * @var \Bitrix\Pull\Protobuf\ChannelStatsRequest
     */
    protected $channelStats = null;
    /**
     * serverStats optional message = 3
     *
     * @var \Bitrix\Pull\Protobuf\ServerStatsRequest
     */
    protected $serverStats = null;
    /**
     * Check if 'incomingMessages' has a value
     *
     * @return bool
     */
    public function hasIncomingMessages()
    {
    }
    /**
     * Get 'incomingMessages' value
     *
     * @return \Bitrix\Pull\Protobuf\IncomingMessagesRequest
     */
    public function getIncomingMessages()
    {
    }
    /**
     * Set 'incomingMessages' value
     *
     * @param \Bitrix\Pull\Protobuf\IncomingMessagesRequest $value
     */
    public function setIncomingMessages(\Bitrix\Pull\Protobuf\IncomingMessagesRequest $value = null)
    {
    }
    /**
     * Check if 'channelStats' has a value
     *
     * @return bool
     */
    public function hasChannelStats()
    {
    }
    /**
     * Get 'channelStats' value
     *
     * @return \Bitrix\Pull\Protobuf\ChannelStatsRequest
     */
    public function getChannelStats()
    {
    }
    /**
     * Set 'channelStats' value
     *
     * @param \Bitrix\Pull\Protobuf\ChannelStatsRequest $value
     */
    public function setChannelStats(\Bitrix\Pull\Protobuf\ChannelStatsRequest $value = null)
    {
    }
    /**
     * Check if 'serverStats' has a value
     *
     * @return bool
     */
    public function hasServerStats()
    {
    }
    /**
     * Get 'serverStats' value
     *
     * @return \Bitrix\Pull\Protobuf\ServerStatsRequest
     */
    public function getServerStats()
    {
    }
    /**
     * Set 'serverStats' value
     *
     * @param \Bitrix\Pull\Protobuf\ServerStatsRequest $value
     */
    public function setServerStats(\Bitrix\Pull\Protobuf\ServerStatsRequest $value = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
    }
}