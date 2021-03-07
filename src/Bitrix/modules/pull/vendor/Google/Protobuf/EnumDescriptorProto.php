<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.EnumDescriptorProto
 */
class EnumDescriptorProto extends \Protobuf\AbstractMessage
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
     * value repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\EnumValueDescriptorProto>
     */
    protected $value = null;
    /**
     * options optional message = 3
     *
     * @var \google\protobuf\EnumOptions
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
     * Check if 'value' has a value
     *
     * @return bool
     */
    public function hasValueList()
    {
    }
    /**
     * Get 'value' value
     *
     * @return \Protobuf\Collection<\google\protobuf\EnumValueDescriptorProto>
     */
    public function getValueList()
    {
    }
    /**
     * Set 'value' value
     *
     * @param \Protobuf\Collection<\google\protobuf\EnumValueDescriptorProto> $value
     */
    public function setValueList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'value'
     *
     * @param \google\protobuf\EnumValueDescriptorProto $value
     */
    public function addValue(\google\protobuf\EnumValueDescriptorProto $value)
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
     * @return \google\protobuf\EnumOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\EnumOptions $value
     */
    public function setOptions(\google\protobuf\EnumOptions $value = null)
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