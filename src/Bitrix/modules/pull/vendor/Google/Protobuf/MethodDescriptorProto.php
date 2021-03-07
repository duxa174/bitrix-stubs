<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.MethodDescriptorProto
 */
class MethodDescriptorProto extends \Protobuf\AbstractMessage
{
    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;
    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;
    /**
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;
    /**
     * input_type optional string = 2
     *
     * @var string
     */
    protected $input_type = null;
    /**
     * output_type optional string = 3
     *
     * @var string
     */
    protected $output_type = null;
    /**
     * options optional message = 4
     *
     * @var \google\protobuf\MethodOptions
     */
    protected $options = null;
    /**
     * client_streaming optional bool = 5
     *
     * @var bool
     */
    protected $client_streaming = null;
    /**
     * server_streaming optional bool = 6
     *
     * @var bool
     */
    protected $server_streaming = null;
    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
    }
    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
    }
    /**
     * Check if 'input_type' has a value
     *
     * @return bool
     */
    public function hasInputType()
    {
    }
    /**
     * Get 'input_type' value
     *
     * @return string
     */
    public function getInputType()
    {
    }
    /**
     * Set 'input_type' value
     *
     * @param string $value
     */
    public function setInputType($value = null)
    {
    }
    /**
     * Check if 'output_type' has a value
     *
     * @return bool
     */
    public function hasOutputType()
    {
    }
    /**
     * Get 'output_type' value
     *
     * @return string
     */
    public function getOutputType()
    {
    }
    /**
     * Set 'output_type' value
     *
     * @param string $value
     */
    public function setOutputType($value = null)
    {
    }
    /**
     * Check if 'options' has a value
     *
     * @return bool
     */
    public function hasOptions()
    {
    }
    /**
     * Get 'options' value
     *
     * @return \google\protobuf\MethodOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\MethodOptions $value
     */
    public function setOptions(\google\protobuf\MethodOptions $value = null)
    {
    }
    /**
     * Check if 'client_streaming' has a value
     *
     * @return bool
     */
    public function hasClientStreaming()
    {
    }
    /**
     * Get 'client_streaming' value
     *
     * @return bool
     */
    public function getClientStreaming()
    {
    }
    /**
     * Set 'client_streaming' value
     *
     * @param bool $value
     */
    public function setClientStreaming($value = null)
    {
    }
    /**
     * Check if 'server_streaming' has a value
     *
     * @return bool
     */
    public function hasServerStreaming()
    {
    }
    /**
     * Get 'server_streaming' value
     *
     * @return bool
     */
    public function getServerStreaming()
    {
    }
    /**
     * Set 'server_streaming' value
     *
     * @param bool $value
     */
    public function setServerStreaming($value = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
    }
}