<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.UninterpretedOption
 */
class UninterpretedOption extends \Protobuf\AbstractMessage
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
     * name repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart>
     */
    protected $name = null;
    /**
     * identifier_value optional string = 3
     *
     * @var string
     */
    protected $identifier_value = null;
    /**
     * positive_int_value optional uint64 = 4
     *
     * @var int
     */
    protected $positive_int_value = null;
    /**
     * negative_int_value optional int64 = 5
     *
     * @var int
     */
    protected $negative_int_value = null;
    /**
     * double_value optional double = 6
     *
     * @var float
     */
    protected $double_value = null;
    /**
     * string_value optional bytes = 7
     *
     * @var \Protobuf\Stream
     */
    protected $string_value = null;
    /**
     * aggregate_value optional string = 8
     *
     * @var string
     */
    protected $aggregate_value = null;
    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasNameList()
    {
    }
    /**
     * Get 'name' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart>
     */
    public function getNameList()
    {
    }
    /**
     * Set 'name' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart> $value
     */
    public function setNameList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'name'
     *
     * @param \google\protobuf\UninterpretedOption\NamePart $value
     */
    public function addName(\google\protobuf\UninterpretedOption\NamePart $value)
    {
    }
    /**
     * Check if 'identifier_value' has a value
     *
     * @return bool
     */
    public function hasIdentifierValue()
    {
    }
    /**
     * Get 'identifier_value' value
     *
     * @return string
     */
    public function getIdentifierValue()
    {
    }
    /**
     * Set 'identifier_value' value
     *
     * @param string $value
     */
    public function setIdentifierValue($value = null)
    {
    }
    /**
     * Check if 'positive_int_value' has a value
     *
     * @return bool
     */
    public function hasPositiveIntValue()
    {
    }
    /**
     * Get 'positive_int_value' value
     *
     * @return int
     */
    public function getPositiveIntValue()
    {
    }
    /**
     * Set 'positive_int_value' value
     *
     * @param int $value
     */
    public function setPositiveIntValue($value = null)
    {
    }
    /**
     * Check if 'negative_int_value' has a value
     *
     * @return bool
     */
    public function hasNegativeIntValue()
    {
    }
    /**
     * Get 'negative_int_value' value
     *
     * @return int
     */
    public function getNegativeIntValue()
    {
    }
    /**
     * Set 'negative_int_value' value
     *
     * @param int $value
     */
    public function setNegativeIntValue($value = null)
    {
    }
    /**
     * Check if 'double_value' has a value
     *
     * @return bool
     */
    public function hasDoubleValue()
    {
    }
    /**
     * Get 'double_value' value
     *
     * @return float
     */
    public function getDoubleValue()
    {
    }
    /**
     * Set 'double_value' value
     *
     * @param float $value
     */
    public function setDoubleValue($value = null)
    {
    }
    /**
     * Check if 'string_value' has a value
     *
     * @return bool
     */
    public function hasStringValue()
    {
    }
    /**
     * Get 'string_value' value
     *
     * @return \Protobuf\Stream
     */
    public function getStringValue()
    {
    }
    /**
     * Set 'string_value' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setStringValue($value = null)
    {
    }
    /**
     * Check if 'aggregate_value' has a value
     *
     * @return bool
     */
    public function hasAggregateValue()
    {
    }
    /**
     * Get 'aggregate_value' value
     *
     * @return string
     */
    public function getAggregateValue()
    {
    }
    /**
     * Set 'aggregate_value' value
     *
     * @param string $value
     */
    public function setAggregateValue($value = null)
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