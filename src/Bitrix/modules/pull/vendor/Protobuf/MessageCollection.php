<?php

namespace Protobuf;

/**
 * Message collection
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class MessageCollection extends \ArrayObject implements \Protobuf\Collection
{
    /**
     * @param array<\Protobuf\Message> $values
     */
    public function __construct(array $values = [])
    {
    }
    /**
     * Adds a message to this collection
     *
     * @param \Protobuf\Message $message
     */
    public function add(\Protobuf\Message $message)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
    }
}