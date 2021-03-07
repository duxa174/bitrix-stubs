<?php

namespace Protobuf;

/**
 * Abstract message class
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
abstract class AbstractMessage implements \Protobuf\Message
{
    /**
     * Message constructor
     *
     * @param \Protobuf\Stream|resource|string $stream
     * @param \Protobuf\Configuration          $configuration
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function __set_state(array $values)
    {
    }
}