<?php

namespace Protobuf;

/**
 * Used to keep track of fields which were seen when Unknown value parsing a message
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class UnknownFieldSet extends \ArrayObject implements \Protobuf\Collection
{
    /**
     * Adds an element to set.
     *
     * @param \Protobuf\Unknown $unknown
     */
    public function add(\Protobuf\Unknown $unknown)
    {
    }
}