<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.MessageOptions
 */
class MessageOptions extends \Protobuf\AbstractMessage
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
     * message_set_wire_format optional bool = 1
     *
     * @var bool
     */
    protected $message_set_wire_format = null;
    /**
     * no_standard_descriptor_accessor optional bool = 2
     *
     * @var bool
     */
    protected $no_standard_descriptor_accessor = null;
    /**
     * deprecated optional bool = 3
     *
     * @var bool
     */
    protected $deprecated = null;
    /**
     * map_entry optional bool = 7
     *
     * @var bool
     */
    protected $map_entry = null;
    /**
     * uninterpreted_option repeated message = 999
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    protected $uninterpreted_option = null;
    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * Check if 'message_set_wire_format' has a value
     *
     * @return bool
     */
    public function hasMessageSetWireFormat()
    {
    }
    /**
     * Get 'message_set_wire_format' value
     *
     * @return bool
     */
    public function getMessageSetWireFormat()
    {
    }
    /**
     * Set 'message_set_wire_format' value
     *
     * @param bool $value
     */
    public function setMessageSetWireFormat($value = null)
    {
    }
    /**
     * Check if 'no_standard_descriptor_accessor' has a value
     *
     * @return bool
     */
    public function hasNoStandardDescriptorAccessor()
    {
    }
    /**
     * Get 'no_standard_descriptor_accessor' value
     *
     * @return bool
     */
    public function getNoStandardDescriptorAccessor()
    {
    }
    /**
     * Set 'no_standard_descriptor_accessor' value
     *
     * @param bool $value
     */
    public function setNoStandardDescriptorAccessor($value = null)
    {
    }
    /**
     * Check if 'deprecated' has a value
     *
     * @return bool
     */
    public function hasDeprecated()
    {
    }
    /**
     * Get 'deprecated' value
     *
     * @return bool
     */
    public function getDeprecated()
    {
    }
    /**
     * Set 'deprecated' value
     *
     * @param bool $value
     */
    public function setDeprecated($value = null)
    {
    }
    /**
     * Check if 'map_entry' has a value
     *
     * @return bool
     */
    public function hasMapEntry()
    {
    }
    /**
     * Get 'map_entry' value
     *
     * @return bool
     */
    public function getMapEntry()
    {
    }
    /**
     * Set 'map_entry' value
     *
     * @param bool $value
     */
    public function setMapEntry($value = null)
    {
    }
    /**
     * Check if 'uninterpreted_option' has a value
     *
     * @return bool
     */
    public function hasUninterpretedOptionList()
    {
    }
    /**
     * Get 'uninterpreted_option' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    public function getUninterpretedOptionList()
    {
    }
    /**
     * Set 'uninterpreted_option' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption> $value
     */
    public function setUninterpretedOptionList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'uninterpreted_option'
     *
     * @param \google\protobuf\UninterpretedOption $value
     */
    public function addUninterpretedOption(\google\protobuf\UninterpretedOption $value)
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