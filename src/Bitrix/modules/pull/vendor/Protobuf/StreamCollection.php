<?php

namespace Protobuf;

/**
 * Protobuf Stream collection
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class StreamCollection extends \ArrayObject implements \Protobuf\Collection
{
    /**
     * @param array<\Protobuf\Stream> $values
     */
    public function __construct(array $values = [])
    {
    }
    /**
     * Adds a \Protobuf\Stream to this collection
     *
     * @param \Protobuf\Stream $stream
     */
    public function add(\Protobuf\Stream $stream)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
    }
}