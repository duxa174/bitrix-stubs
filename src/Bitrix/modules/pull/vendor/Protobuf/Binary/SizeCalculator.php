<?php

namespace Protobuf\Binary;

/**
 * Compute the number of bytes that would be needed to encode a value
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class SizeCalculator
{
    /**
     * @var \Protobuf\Configuration
     */
    protected $config;
    /**
     * Constructor
     *
     * @param \Protobuf\Configuration $config
     */
    public function __construct(\Protobuf\Configuration $config)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a varint.
     *
     * @param integer $value
     *
     * @return integer
     */
    public function computeVarintSize($value)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a zigzag 32.
     *
     * @param integer $value
     *
     * @return integer
     */
    public function computeZigzag32Size($value)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a zigzag 64.
     *
     * @param integer $value
     *
     * @return integer
     */
    public function computeZigzag64Size($value)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a string.
     *
     * @param integer $value
     *
     * @return integer
     */
    public function computeStringSize($value)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a stream of bytes.
     *
     * @param \Protobuf\Stream $value
     *
     * @return integer
     */
    public function computeByteStreamSize(\Protobuf\Stream $value)
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a sFixed32.
     *
     * @return integer
     */
    public function computeSFixed32Size()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a fixed32.
     *
     * @return integer
     */
    public function computeFixed32Size()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a sFixed64.
     *
     * @return integer
     */
    public function computeSFixed64Size()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a fixed64.
     *
     *
     * @return integer
     */
    public function computeFixed64Size()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a float.
     *
     * @return integer
     */
    public function computeFloatSize()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a double.
     *
     * @return integer
     */
    public function computeDoubleSize()
    {
    }
    /**
     * Compute the number of bytes that would be needed to encode a bool.
     *
     * @return integer
     */
    public function computeBoolSize()
    {
    }
}