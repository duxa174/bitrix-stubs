<?php

namespace Protobuf\Binary;

/**
 * Implements writing primitives for Protobuf binary streams.
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class StreamWriter
{
    /**
     * @var \Protobuf\Configuration
     */
    protected $config;
    /**
     * @var \Protobuf\Binary\Platform\NegativeEncoder
     */
    protected $negativeEncoder;
    /**
     * @var bool
     */
    protected $isBigEndian;
    /**
     * Constructor
     *
     * @param \Protobuf\Configuration $config
     */
    public function __construct(\Protobuf\Configuration $config)
    {
    }
    /**
     * Store the given bytes in the stream.
     *
     * @param \Protobuf\Stream $stream
     * @param string           $bytes
     * @param int              $length
     */
    public function writeBytes(\Protobuf\Stream $stream, $bytes, $length = null)
    {
    }
    /**
     * Store a single byte.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeByte(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Store an integer encoded as varint.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeVarint(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encodes an integer with zigzag.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     * @param integer          $base
     */
    public function writeZigzag(\Protobuf\Stream $stream, $value, $base = 32)
    {
    }
    /**
     * Encodes an integer with zigzag.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeZigzag32(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encodes an integer with zigzag.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeZigzag64(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode an integer as a fixed of 32bits with sign.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeSFixed32(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode an integer as a fixed of 32bits without sign.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeFixed32(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode an integer as a fixed of 64bits with sign.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeSFixed64(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode an integer as a fixed of 64bits without sign.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $value
     */
    public function writeFixed64(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode a number as a 32bit float.
     *
     * @param \Protobuf\Stream $stream
     * @param float            $value
     */
    public function writeFloat(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode a number as a 64bit double.
     *
     * @param \Protobuf\Stream $stream
     * @param float            $value
     */
    public function writeDouble(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode a bool.
     *
     * @param \Protobuf\Stream $stream
     * @param bool             $value
     */
    public function writeBool(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode a string.
     *
     * @param \Protobuf\Stream $stream
     * @param string           $value
     */
    public function writeString(\Protobuf\Stream $stream, $value)
    {
    }
    /**
     * Encode a stream of bytes.
     *
     * @param \Protobuf\Stream $stream
     * @param \Protobuf\Stream $value
     */
    public function writeByteStream(\Protobuf\Stream $stream, \Protobuf\Stream $value)
    {
    }
    /**
     * Write the given stream.
     *
     * @param \Protobuf\Stream $stream
     * @param \Protobuf\Stream $value
     * @param int              $length
     */
    public function writeStream(\Protobuf\Stream $stream, \Protobuf\Stream $value, $length = null)
    {
    }
}