<?php

namespace Protobuf\Binary;

/**
 * Implements reading primitives for Protobuf binary streams.
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class StreamReader
{
    /**
     * @var \Protobuf\Configuration
     */
    protected $config;
    /**
     * @var \Protobuf\Stream
     */
    protected $stream;
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
     * Reads a byte.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readByte(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a varint.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readVarint(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decodes a zigzag integer of the given bits.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readZigzag(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a fixed 32bit integer with sign.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readSFixed32(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a fixed 32bit integer without sign.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readFixed32(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a fixed 64bit integer with sign.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readSFixed64(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a fixed 64bit integer without sign.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return integer
     */
    public function readFixed64(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a 32bit float.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return float
     */
    public function readFloat(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a 64bit double.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return float
     */
    public function readDouble(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a bool.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return bool
     */
    public function readBool(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a string.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return string
     */
    public function readString(\Protobuf\Stream $stream)
    {
    }
    /**
     * Decode a stream of bytes.
     *
     * @param \Protobuf\Stream $stream
     *
     * @return \Protobuf\Stream
     */
    public function readByteStream(\Protobuf\Stream $stream)
    {
    }
    /**
     * Read unknown scalar value.
     *
     * @param \Protobuf\Stream $stream
     * @param integer          $wire
     *
     * @return scalar
     */
    public function readUnknown(\Protobuf\Stream $stream, $wire)
    {
    }
}