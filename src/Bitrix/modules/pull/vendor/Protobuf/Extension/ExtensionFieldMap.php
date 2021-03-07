<?php

namespace Protobuf\Extension;

/**
 * A table of known extensions values
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ExtensionFieldMap extends \SplObjectStorage implements \Protobuf\Collection
{
    /**
     * @var string
     */
    protected $extendee;
    /**
     * @param string $extendee
     */
    public function __construct($extendee = null)
    {
    }
    /**
     * @param \Protobuf\Extension\ExtensionField $extension
     * @param mixed                              $value
     */
    public function add(\Protobuf\Extension\ExtensionField $extension, $value)
    {
    }
    /**
     * @param \Protobuf\Extension\ExtensionField $extension
     * @param mixed                              $value
     */
    public function put(\Protobuf\Extension\ExtensionField $extension, $value)
    {
    }
    /**
     * @param \Protobuf\Extension\ExtensionField $key
     *
     * @return mixed
     */
    public function get(\Protobuf\Extension\ExtensionField $key)
    {
    }
    /**
     * @param \Protobuf\ComputeSizeContext $context
     *
     * @return integer
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
    }
    /**
     * @param \Protobuf\WriteContext $context
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
    }
}