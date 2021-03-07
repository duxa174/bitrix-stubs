<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.ServiceDescriptorProto
 */
class ServiceDescriptorProto extends \Protobuf\AbstractMessage
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
     * method repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\MethodDescriptorProto>
     */
    protected $method = null;
    /**
     * options optional message = 3
     *
     * @var \google\protobuf\ServiceOptions
     */
    protected $options = null;
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
     * Check if 'method' has a value
     *
     * @return bool
     */
    public function hasMethodList()
    {
    }
    /**
     * Get 'method' value
     *
     * @return \Protobuf\Collection<\google\protobuf\MethodDescriptorProto>
     */
    public function getMethodList()
    {
    }
    /**
     * Set 'method' value
     *
     * @param \Protobuf\Collection<\google\protobuf\MethodDescriptorProto> $value
     */
    public function setMethodList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'method'
     *
     * @param \google\protobuf\MethodDescriptorProto $value
     */
    public function addMethod(\google\protobuf\MethodDescriptorProto $value)
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
     * @return \google\protobuf\ServiceOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\ServiceOptions $value
     */
    public function setOptions(\google\protobuf\ServiceOptions $value = null)
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