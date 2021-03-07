<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FieldOptions
 */
class FieldOptions extends \Protobuf\AbstractMessage
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
     * ctype optional enum = 1
     *
     * @var \google\protobuf\FieldOptions\CType
     */
    protected $ctype = null;
    /**
     * packed optional bool = 2
     *
     * @var bool
     */
    protected $packed = null;
    /**
     * jstype optional enum = 6
     *
     * @var \google\protobuf\FieldOptions\JSType
     */
    protected $jstype = null;
    /**
     * lazy optional bool = 5
     *
     * @var bool
     */
    protected $lazy = null;
    /**
     * deprecated optional bool = 3
     *
     * @var bool
     */
    protected $deprecated = null;
    /**
     * weak optional bool = 10
     *
     * @var bool
     */
    protected $weak = null;
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
     * Check if 'ctype' has a value
     *
     * @return bool
     */
    public function hasCtype()
    {
    }
    /**
     * Get 'ctype' value
     *
     * @return \google\protobuf\FieldOptions\CType
     */
    public function getCtype()
    {
    }
    /**
     * Set 'ctype' value
     *
     * @param \google\protobuf\FieldOptions\CType $value
     */
    public function setCtype(\google\protobuf\FieldOptions\CType $value = null)
    {
    }
    /**
     * Check if 'packed' has a value
     *
     * @return bool
     */
    public function hasPacked()
    {
    }
    /**
     * Get 'packed' value
     *
     * @return bool
     */
    public function getPacked()
    {
    }
    /**
     * Set 'packed' value
     *
     * @param bool $value
     */
    public function setPacked($value = null)
    {
    }
    /**
     * Check if 'jstype' has a value
     *
     * @return bool
     */
    public function hasJstype()
    {
    }
    /**
     * Get 'jstype' value
     *
     * @return \google\protobuf\FieldOptions\JSType
     */
    public function getJstype()
    {
    }
    /**
     * Set 'jstype' value
     *
     * @param \google\protobuf\FieldOptions\JSType $value
     */
    public function setJstype(\google\protobuf\FieldOptions\JSType $value = null)
    {
    }
    /**
     * Check if 'lazy' has a value
     *
     * @return bool
     */
    public function hasLazy()
    {
    }
    /**
     * Get 'lazy' value
     *
     * @return bool
     */
    public function getLazy()
    {
    }
    /**
     * Set 'lazy' value
     *
     * @param bool $value
     */
    public function setLazy($value = null)
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
     * Check if 'weak' has a value
     *
     * @return bool
     */
    public function hasWeak()
    {
    }
    /**
     * Get 'weak' value
     *
     * @return bool
     */
    public function getWeak()
    {
    }
    /**
     * Set 'weak' value
     *
     * @param bool $value
     */
    public function setWeak($value = null)
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