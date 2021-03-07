<?php

namespace Protobuf;

/**
 * Read context
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ReadContext
{
    /**
     * @var \Protobuf\Extension\ExtensionRegistry
     */
    private $extensionRegistry;
    /**
     * @var \Protobuf\Binary\StreamReader
     */
    private $reader;
    /**
     * @var \Protobuf\Stream
     */
    private $stream;
    /**
     * @var integer
     */
    private $length;
    /**
     * @param \Protobuf\Stream|resource|string      $stream
     * @param \Protobuf\Binary\StreamReader         $reader
     * @param \Protobuf\Extension\ExtensionRegistry $extensionRegistry
     */
    public function __construct($stream, \Protobuf\Binary\StreamReader $reader, \Protobuf\Extension\ExtensionRegistry $extensionRegistry = null)
    {
    }
    /**
     * Return a ExtensionRegistry.
     *
     * @return \Protobuf\Extension\ExtensionRegistry
     */
    public function getExtensionRegistry()
    {
    }
    /**
     * @return \Protobuf\Binary\StreamReader
     */
    public function getReader()
    {
    }
    /**
     * @return \Protobuf\Stream
     */
    public function getStream()
    {
    }
    /**
     * @return integer
     */
    public function getLength()
    {
    }
    /**
     * @param integer $length
     */
    public function setLength($length)
    {
    }
}