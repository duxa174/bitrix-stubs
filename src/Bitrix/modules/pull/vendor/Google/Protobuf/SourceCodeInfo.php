<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.SourceCodeInfo
 */
class SourceCodeInfo extends \Protobuf\AbstractMessage
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
     * location repeated message = 1
     *
     * @var \Protobuf\Collection<\google\protobuf\SourceCodeInfo\Location>
     */
    protected $location = null;
    /**
     * Check if 'location' has a value
     *
     * @return bool
     */
    public function hasLocationList()
    {
    }
    /**
     * Get 'location' value
     *
     * @return \Protobuf\Collection<\google\protobuf\SourceCodeInfo\Location>
     */
    public function getLocationList()
    {
    }
    /**
     * Set 'location' value
     *
     * @param \Protobuf\Collection<\google\protobuf\SourceCodeInfo\Location> $value
     */
    public function setLocationList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'location'
     *
     * @param \google\protobuf\SourceCodeInfo\Location $value
     */
    public function addLocation(\google\protobuf\SourceCodeInfo\Location $value)
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