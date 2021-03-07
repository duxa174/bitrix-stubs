<?php

namespace Bitrix\Pull;

class ProtobufTransport
{
    protected $hits = 0;
    protected $bytes = 0;
    /**
     * @param array $messages Messages to send to the pull server.
     */
    public static function sendMessages(array $messages)
    {
    }
    /**
     * Returns online status for each known channel in the list of private channel ids.
     * @param array $channels Array of private channel ids.
     * @return array Return online status for known channels in format [channelId => bool].
     */
    public static function getOnlineChannels(array $channels)
    {
    }
    /**
     * @param array $messages
     * @return Protobuf\IncomingMessage[]
     */
    protected static function convertMessages(array $messages)
    {
    }
    /**
     * @param array $channels
     * @param array $event
     *
     * @return Protobuf\IncomingMessage[]
     */
    protected static function convertMessage(array $channels, array $event)
    {
    }
    /**
     * @param Protobuf\Request[] $requests
     * @return Protobuf\RequestBatch[]
     */
    protected static function createRequestBatches(array $requests)
    {
    }
    /**
     * @param Protobuf\IncomingMessage[] $messages
     * @return Protobuf\Request[]
     */
    protected static function createRequests(array $messages)
    {
    }
    /**
     * @param Protobuf\IncomingMessage $message
     * @param $maxReceivers
     * @return Protobuf\IncomingMessage[]
     */
    protected static function splitReceivers(\Bitrix\Pull\Protobuf\IncomingMessage $message, $maxReceivers)
    {
    }
    protected static function getMessageSize(\Bitrix\Pull\Protobuf\IncomingMessage $message)
    {
    }
}