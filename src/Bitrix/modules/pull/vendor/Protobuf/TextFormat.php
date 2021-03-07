<?php

namespace Protobuf;

/**
 * This serializes to text format
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class TextFormat
{
    /**
     * @param \Protobuf\Message $message
     * @param integer           $level
     *
     * @return \Protobuf\Stream
     */
    public function encodeMessage(\Protobuf\Message $message, $level = 0)
    {
    }
    /**
     * @param scalar|array $value
     *
     * @return string
     */
    public function encodeValue($value)
    {
    }
}