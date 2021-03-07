<?php

namespace Protobuf;

/**
 * Scalar collection
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ScalarCollection extends \ArrayObject implements \Protobuf\Collection
{
    /**
     * @param array<scalar> $values
     */
    public function __construct(array $values = [])
    {
    }
    /**
     * Adds a value to this collection
     *
     * @param scalar $value
     */
    public function add($value)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
    }
}