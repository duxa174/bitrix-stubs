<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.DescriptorProto
 */
class DescriptorProto extends \Protobuf\AbstractMessage
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
     * field repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    protected $field = null;
    /**
     * extension repeated message = 6
     *
     * @var \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    protected $extension = null;
    /**
     * nested_type repeated message = 3
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    protected $nested_type = null;
    /**
     * enum_type repeated message = 4
     *
     * @var \Protobuf\Collection<\google\protobuf\EnumDescriptorProto>
     */
    protected $enum_type = null;
    /**
     * extension_range repeated message = 5
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange>
     */
    protected $extension_range = null;
    /**
     * oneof_decl repeated message = 8
     *
     * @var \Protobuf\Collection<\google\protobuf\OneofDescriptorProto>
     */
    protected $oneof_decl = null;
    /**
     * options optional message = 7
     *
     * @var \google\protobuf\MessageOptions
     */
    protected $options = null;
    /**
     * reserved_range repeated message = 9
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange>
     */
    protected $reserved_range = null;
    /**
     * reserved_name repeated string = 10
     *
     * @var \Protobuf\Collection
     */
    protected $reserved_name = null;
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
     * Check if 'field' has a value
     *
     * @return bool
     */
    public function hasFieldList()
    {
    }
    /**
     * Get 'field' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    public function getFieldList()
    {
    }
    /**
     * Set 'field' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FieldDescriptorProto> $value
     */
    public function setFieldList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'field'
     *
     * @param \google\protobuf\FieldDescriptorProto $value
     */
    public function addField(\google\protobuf\FieldDescriptorProto $value)
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
     * Check if 'nested_type' has a value
     *
     * @return bool
     */
    public function hasNestedTypeList()
    {
    }
    /**
     * Get 'nested_type' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    public function getNestedTypeList()
    {
    }
    /**
     * Set 'nested_type' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto> $value
     */
    public function setNestedTypeList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'nested_type'
     *
     * @param \google\protobuf\DescriptorProto $value
     */
    public function addNestedType(\google\protobuf\DescriptorProto $value)
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
     * Check if 'extension_range' has a value
     *
     * @return bool
     */
    public function hasExtensionRangeList()
    {
    }
    /**
     * Get 'extension_range' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange>
     */
    public function getExtensionRangeList()
    {
    }
    /**
     * Set 'extension_range' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange> $value
     */
    public function setExtensionRangeList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'extension_range'
     *
     * @param \google\protobuf\DescriptorProto\ExtensionRange $value
     */
    public function addExtensionRange(\google\protobuf\DescriptorProto\ExtensionRange $value)
    {
    }
    /**
     * Check if 'oneof_decl' has a value
     *
     * @return bool
     */
    public function hasOneofDeclList()
    {
    }
    /**
     * Get 'oneof_decl' value
     *
     * @return \Protobuf\Collection<\google\protobuf\OneofDescriptorProto>
     */
    public function getOneofDeclList()
    {
    }
    /**
     * Set 'oneof_decl' value
     *
     * @param \Protobuf\Collection<\google\protobuf\OneofDescriptorProto> $value
     */
    public function setOneofDeclList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'oneof_decl'
     *
     * @param \google\protobuf\OneofDescriptorProto $value
     */
    public function addOneofDecl(\google\protobuf\OneofDescriptorProto $value)
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
     * @return \google\protobuf\MessageOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\MessageOptions $value
     */
    public function setOptions(\google\protobuf\MessageOptions $value = null)
    {
    }
    /**
     * Check if 'reserved_range' has a value
     *
     * @return bool
     */
    public function hasReservedRangeList()
    {
    }
    /**
     * Get 'reserved_range' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange>
     */
    public function getReservedRangeList()
    {
    }
    /**
     * Set 'reserved_range' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange> $value
     */
    public function setReservedRangeList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'reserved_range'
     *
     * @param \google\protobuf\DescriptorProto\ReservedRange $value
     */
    public function addReservedRange(\google\protobuf\DescriptorProto\ReservedRange $value)
    {
    }
    /**
     * Check if 'reserved_name' has a value
     *
     * @return bool
     */
    public function hasReservedNameList()
    {
    }
    /**
     * Get 'reserved_name' value
     *
     * @return \Protobuf\Collection
     */
    public function getReservedNameList()
    {
    }
    /**
     * Set 'reserved_name' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setReservedNameList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'reserved_name'
     *
     * @param string $value
     */
    public function addReservedName($value)
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