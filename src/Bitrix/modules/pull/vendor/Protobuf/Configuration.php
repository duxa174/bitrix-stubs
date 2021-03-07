<?php

namespace Protobuf;

/**
 * Base configuration class for the protobuf
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class Configuration
{
    /**
     * @var \Protobuf\Extension\ExtensionRegistry
     */
    private $extensionRegistry;
    /**
     * @var \Protobuf\Binary\Platform\PlatformFactory
     */
    private $platformFactory;
    /**
     * @var \Protobuf\Binary\StreamWriter
     */
    private $streamWriter;
    /**
     * @var \Protobuf\Binary\StreamReader
     */
    private $streamReader;
    /**
     * @var \Protobuf\Binary\SizeCalculator
     */
    private $sizeCalculator;
    /**
     * @var \Protobuf\DescriptorLoader
     */
    protected static $instance;
    /**
     * Return a ExtensionRegistry.
     *
     * @return \Protobuf\Extension\ExtensionRegistry
     */
    public function getExtensionRegistry()
    {
    }
    /**
     * Set a ExtensionRegistry.
     *
     * @param \Protobuf\Extension\ExtensionRegistry $extensionRegistry
     */
    public function setExtensionRegistry(\Protobuf\Extension\ExtensionRegistry $extensionRegistry)
    {
    }
    /**
     * Return a PlatformFactory.
     *
     * @return \Protobuf\Binary\Platform\PlatformFactory
     */
    public function getPlatformFactory()
    {
    }
    /**
     * Return a StreamReader
     *
     * @return \Protobuf\Binary\StreamReader
     */
    public function getStreamReader()
    {
    }
    /**
     * Return a StreamWriter
     *
     * @return \Protobuf\Binary\StreamWriter
     */
    public function getStreamWriter()
    {
    }
    /**
     * Return a SizeCalculator
     *
     * @return \Protobuf\Binary\SizeCalculator
     */
    public function getSizeCalculator()
    {
    }
    /**
     * Sets the PlatformFactory.
     *
     * @param \Protobuf\Binary\Platform\PlatformFactory $platformFactory
     */
    public function setPlatformFactory(\Protobuf\Binary\Platform\PlatformFactory $platformFactory)
    {
    }
    /**
     * Create a compute size context.
     *
     * @return \Protobuf\ComputeSizeContext
     */
    public function createComputeSizeContext()
    {
    }
    /**
     * Create a write context.
     *
     * @return \Protobuf\WriteContext
     */
    public function createWriteContext()
    {
    }
    /**
     * Create a read context.
     *
     * @param \Protobuf\Stream|resource|string $stream
     *
     * @return \Protobuf\ReadContext
     */
    public function createReadContext($stream)
    {
    }
    /**
     * Returns single instance of this class
     *
     * @return \Protobuf\Configuration
     */
    public static function getInstance()
    {
    }
}