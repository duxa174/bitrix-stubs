<?php

namespace Protobuf;

/**
 * Default protocol buffers serializer implementation
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class MessageSerializer implements \Protobuf\Serializer
{
    /**
     * @var \Protobuf\Configuration
     */
    private $config;
    /**
     * @param \Protobuf\Configuration $config
     */
    public function __construct(\Protobuf\Configuration $config = null)
    {
    }
    /**
     * @return \Protobuf\Configuration
     */
    public function getConfiguration()
    {
    }
    /**
     * Serializes the given message.
     *
     * @param \Protobuf\Message $message
     *
     * @return \Protobuf\Stream
     */
    public function serialize(\Protobuf\Message $message)
    {
    }
    /**
     * Deserializes the given data to the specified message.
     *
     * @param string                           $class
     * @param \Protobuf\Stream|resource|string $stream
     *
     * @return \Protobuf\Message
     */
    public function unserialize($class, $stream)
    {
    }
}