<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FieldDescriptorProto
 */
class FieldDescriptorProto extends \Protobuf\AbstractMessage
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
     * number optional int32 = 3
     *
     * @var int
     */
    protected $number = null;
    /**
     * label optional enum = 4
     *
     * @var \google\protobuf\FieldDescriptorProto\Label
     */
    protected $label = null;
    /**
     * type optional enum = 5
     *
     * @var \google\protobuf\FieldDescriptorProto\Type
     */
    protected $type = null;
    /**
     * type_name optional string = 6
     *
     * @var string
     */
    protected $type_name = null;
    /**
     * extendee optional string = 2
     *
     * @var string
     */
    protected $extendee = null;
    /**
     * default_value optional string = 7
     *
     * @var string
     */
    protected $default_value = null;
    /**
     * oneof_index optional int32 = 9
     *
     * @var int
     */
    protected $oneof_index = null;
    /**
     * json_name optional string = 10
     *
     * @var string
     */
    protected $json_name = null;
    /**
     * options optional message = 8
     *
     * @var \google\protobuf\FieldOptions
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
     * Check if 'number' has a value
     *
     * @return bool
     */
    public function hasNumber()
    {
    }
    /**
     * Get 'number' value
     *
     * @return int
     */
    public function getNumber()
    {
    }
    /**
     * Set 'number' value
     *
     * @param int $value
     */
    public function setNumber($value = null)
    {
    }
    /**
     * Check if 'label' has a value
     *
     * @return bool
     */
    public function hasLabel()
    {
    }
    /**
     * Get 'label' value
     *
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public function getLabel()
    {
    }
    /**
     * Set 'label' value
     *
     * @param \google\protobuf\FieldDescriptorProto\Label $value
     */
    public function setLabel(\google\protobuf\FieldDescriptorProto\Label $value = null)
    {
    }
    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
    }
    /**
     * Get 'type' value
     *
     * @return \google\protobuf\FieldDescriptorProto\Type
     */
    public function getType()
    {
    }
    /**
     * Set 'type' value
     *
     * @param \google\protobuf\FieldDescriptorProto\Type $value
     */
    public function setType(\google\protobuf\FieldDescriptorProto\Type $value = null)
    {
    }
    /**
     * Check if 'type_name' has a value
     *
     * @return bool
     */
    public function hasTypeName()
    {
    }
    /**
     * Get 'type_name' value
     *
     * @return string
     */
    public function getTypeName()
    {
    }
    /**
     * Set 'type_name' value
     *
     * @param string $value
     */
    public function setTypeName($value = null)
    {
    }
    /**
     * Check if 'extendee' has a value
     *
     * @return bool
     */
    public function hasExtendee()
    {
    }
    /**
     * Get 'extendee' value
     *
     * @return string
     */
    public function getExtendee()
    {
    }
    /**
     * Set 'extendee' value
     *
     * @param string $value
     */
    public function setExtendee($value = null)
    {
    }
    /**
     * Check if 'default_value' has a value
     *
     * @return bool
     */
    public function hasDefaultValue()
    {
    }
    /**
     * Get 'default_value' value
     *
     * @return string
     */
    public function getDefaultValue()
    {
    }
    /**
     * Set 'default_value' value
     *
     * @param string $value
     */
    public function setDefaultValue($value = null)
    {
    }
    /**
     * Check if 'oneof_index' has a value
     *
     * @return bool
     */
    public function hasOneofIndex()
    {
    }
    /**
     * Get 'oneof_index' value
     *
     * @return int
     */
    public function getOneofIndex()
    {
    }
    /**
     * Set 'oneof_index' value
     *
     * @param int $value
     */
    public function setOneofIndex($value = null)
    {
    }
    /**
     * Check if 'json_name' has a value
     *
     * @return bool
     */
    public function hasJsonName()
    {
    }
    /**
     * Get 'json_name' value
     *
     * @return string
     */
    public function getJsonName()
    {
    }
    /**
     * Set 'json_name' value
     *
     * @param string $value
     */
    public function setJsonName($value = null)
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
     * @return \google\protobuf\FieldOptions
     */
    public function getOptions()
    {
    }
    /**
     * Set 'options' value
     *
     * @param \google\protobuf\FieldOptions $value
     */
    public function setOptions(\google\protobuf\FieldOptions $value = null)
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