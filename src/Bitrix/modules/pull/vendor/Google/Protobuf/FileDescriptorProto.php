<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FileDescriptorProto
 */
class FileDescriptorProto extends \Protobuf\AbstractMessage
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
     * package optional string = 2
     *
     * @var string
     */
    protected $package = null;
    /**
     * dependency repeated string = 3
     *
     * @var \Protobuf\Collection
     */
    protected $dependency = null;
    /**
     * public_dependency repeated int32 = 10
     *
     * @var \Protobuf\Collection
     */
    protected $public_dependency = null;
    /**
     * weak_dependency repeated int32 = 11
     *
     * @var \Protobuf\Collection
     */
    protected $weak_dependency = null;
    /**
     * message_type repeated message = 4
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    protected $message_type = null;
    /**
     * enum_type repeated message = 5
     *
     * @var \Protobuf\Collection<\google\protobuf\EnumDescriptorProto>
     */
    protected $enum_type = null;
    /**
     * service repeated message = 6
     *
     * @var \Protobuf\Collection<\google\protobuf\ServiceDescriptorProto>
     */
    protected $service = null;
    /**
     * extension repeated message = 7
     *
     * @var \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    protected $extension = null;
    /**
     * options optional message = 8
     *
     * @var \google\protobuf\FileOptions
     */
    protected $options = null;
    /**
     * source_code_info optional message = 9
     *
     * @var \google\protobuf\SourceCodeInfo
     */
    protected $source_code_info = null;
    /**
     * syntax optional string = 12
     *
     * @var string
     */
    protected $syntax = null;
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
     * Check if 'package' has a value
     *
     * @return bool
     */
    public function hasPackage()
    {
    }
    /**
     * Get 'package' value
     *
     * @return string
     */
    public function getPackage()
    {
    }
    /**
     * Set 'package' value
     *
     * @param string $value
     */
    public function setPackage($value = null)
    {
    }
    /**
     * Check if 'dependency' has a value
     *
     * @return bool
     */
    public function hasDependencyList()
    {
    }
    /**
     * Get 'dependency' value
     *
     * @return \Protobuf\Collection
     */
    public function getDependencyList()
    {
    }
    /**
     * Set 'dependency' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setDependencyList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'dependency'
     *
     * @param string $value
     */
    public function addDependency($value)
    {
    }
    /**
     * Check if 'public_dependency' has a value
     *
     * @return bool
     */
    public function hasPublicDependencyList()
    {
    }
    /**
     * Get 'public_dependency' value
     *
     * @return \Protobuf\Collection
     */
    public function getPublicDependencyList()
    {
    }
    /**
     * Set 'public_dependency' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPublicDependencyList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'public_dependency'
     *
     * @param int $value
     */
    public function addPublicDependency($value)
    {
    }
    /**
     * Check if 'weak_dependency' has a value
     *
     * @return bool
     */
    public function hasWeakDependencyList()
    {
    }
    /**
     * Get 'weak_dependency' value
     *
     * @return \Protobuf\Collection
     */
    public function getWeakDependencyList()
    {
    }
    /**
     * Set 'weak_dependency' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setWeakDependencyList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'weak_dependency'
     *
     * @param int $value
     */
    public function addWeakDependency($value)
    {
    }
    /**
     * Check if 'message_type' has a value
     *
     * @return bool
     */
    public function hasMessageTypeList()
    {
    }
    /**
     * Get 'message_type' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    public function getMessageTypeList()
    {
    }
    /**
     * Set 'message_type' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto> $value
     */
    public function setMessageTypeList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'message_type'
     *
     * @param \google\protobuf\DescriptorProto $value
     */
    public function addMessageType(\google\protobuf\DescriptorProto $value)
    {
    }
    /**
     * Check if 'enum_type' has a value
     *
     * @return bool
     */
    public function hasEnumTypeList()
    {
    }
    /**
     * Get 'enum_type' value
     *
     * @return \Protobuf\Collection<\google\protobuf\EnumDescriptorProto>
     */
    public function getEnumTypeList()
    {
    }
    /**
     * Set 'enum_type' value
     *
     * @param \Protobuf\Collection<\google\protobuf\EnumDescriptorProto> $value
     */
    public function setEnumTypeList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'enum_type'
     *
     * @param \google\protobuf\EnumDescriptorProto $value
     */
    public function addEnumType(\google\protobuf\EnumDescriptorProto $value)
    {
    }
    /**
     * Check if 'service' has a value
     *
     * @return bool
     */
    public function hasServiceList()
    {
    }
    /**
     * Get 'service' value
     *
     * @return \Protobuf\Collection<\google\protobuf\ServiceDescriptorProto>
     */
    public function getServiceList()
    {
    }
    /**
     * Set 'service' value
     *
     * @param \Protobuf\Collection<\google\protobuf\ServiceDescriptorProto> $value
     */
    public function setServiceList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'service'
     *
     * @param \google\protobuf\ServiceDescriptorProto $value
     */
    public function addService(\google\protobuf\ServiceDescriptorProto $value)
    {
    }
    /**
     * Check if 'extension' has a value
     *
     * @return bool
     */
    public function hasExtensionList()
    {
    }
    /**
     * Get 'extension' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    public function getExtensionList()
    {
    }
    /**
     * Set 'extension' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FieldDescriptorProto> $value
     */
    public function setExtensionList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'extension'
     *
     * @param \google\protobuf\FieldDescriptorProto $value
     */
    public function addExtension(\google\protobuf\FieldDescriptorProto $value)
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
     * @return \google\protobuf\FileOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\FileOptions $value
     */
    public function setOptions(\google\protobuf\FileOptions $value = null)
    {
    }
    /**
     * Check if 'source_code_info' has a value
     *
     * @return bool
     */
    public function hasSourceCodeInfo()
    {
    }
    /**
     * Get 'source_code_info' value
     *
     * @return \google\protobuf\SourceCodeInfo
     */
    public function getSourceCodeInfo()
    {
    }
    /**
     * Set 'source_code_info' value
     *
     * @param \google\protobuf\SourceCodeInfo $value
     */
    public function setSourceCodeInfo(\google\protobuf\SourceCodeInfo $value = null)
    {
    }
    /**
     * Check if 'syntax' has a value
     *
     * @return bool
     */
    public function hasSyntax()
    {
    }
    /**
     * Get 'syntax' value
     *
     * @return string
     */
    public function getSyntax()
    {
    }
    /**
     * Set 'syntax' value
     *
     * @param string $value
     */
    public function setSyntax($value = null)
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