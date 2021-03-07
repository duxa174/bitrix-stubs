<?php

namespace Protobuf;

/**
 * Protobuf enum collection
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class EnumCollection extends \ArrayObject implements \Protobuf\Collection
{
    /**
     * @param array<\Protobuf\Enum> $values
     */
    public function __construct(array $values = [])
    {
    }
    /**
     * Adds a \Protobuf\Enum to this collection
     *
     * @param \Protobuf\Enum $enum
     */
    public function add(\Protobuf\Enum $enum)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
    }
}