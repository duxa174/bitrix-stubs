<?php

namespace Protobuf;

/**
 * PHP stream implementation
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class Stream
{
    /**
     * @var resource
     */
    private $stream;
    /**
     * @var integer
     */
    private $size;
    /**
     * @param resource $stream
     * @param integer  $size
     *
     * @throws \InvalidArgumentException if the stream is not a stream resource
     */
    public function __construct($stream, $size = null)
    {
    }
    /**
     * Closes the stream when the destructed
     */
    public function __destruct()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
    }
    /**
     * Returns the remaining contents of the stream as a string.
     *
     * @return string
     */
    public function getContents()
    {
    }
    /**
     * Get the size of the stream
     *
     * @return int|null Returns the size in bytes if known
     *
     * @throws \InvalidArgumentException If cannot find out the stream size
     */
    public function getSize()
    {
    }
    /**
     * Returns true if the stream is at the end of the stream.
     *
     * @return bool
     */
    public function eof()
    {
    }
    /**
     * Returns the current position of the file read/write pointer
     *
     * @return int
     *
     * @throws \RuntimeException If cannot find out the stream position
     */
    public function tell()
    {
    }
    /**
     * Seek to a position in the stream
     *
     * @param int $offset
     * @param int $whence
     *
     * @throws \RuntimeException If cannot find out the stream position
     */
    public function seek($offset, $whence = SEEK_SET)
    {
    }
    /**
     * Read data from the stream
     *
     * @param int $length
     *
     * @return string
     */
    public function read($length)
    {
    }
    /**
     * Read stream
     *
     * @param int $length
     *
     * @return \Protobuf\Stream
     *
     * @throws \RuntimeException
     */
    public function readStream($length)
    {
    }
    /**
     * Write data to the stream
     *
     * @param string $bytes
     * @param int    $length
     *
     * @return int
     *
     * @throws \RuntimeException
     */
    public function write($bytes, $length)
    {
    }
    /**
     * Write stream
     *
     * @param \Protobuf\Stream $stream
     * @param int              $length
     *
     * @return int
     *
     * @throws \RuntimeException
     */
    public function writeStream(\Protobuf\Stream $stream, $length)
    {
    }
    /**
     * Wrap the input resource in a stream object.
     *
     * @param \Protobuf\Stream|resource|string $resource
     * @param integer                          $size
     *
     * @return \Protobuf\Stream
     *
     * @throws \InvalidArgumentException if the $resource arg is not valid.
     */
    public static function wrap($resource = '', $size = null)
    {
    }
    /**
     * Create a new stream.
     *
     * @return \Protobuf\Stream
     */
    public static function create()
    {
    }
    /**
     * Create a new stream from a string.
     *
     * @param string  $resource
     * @param integer $size
     *
     * @return \Protobuf\Stream
     */
    public static function fromString($resource = '', $size = null)
    {
    }
}