<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FileDescriptorSet
 */
class FileDescriptorSet extends \Protobuf\AbstractMessage
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
     * file repeated message = 1
     *
     * @var \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    protected $file = null;
    /**
     * Check if 'file' has a value
     *
     * @return bool
     */
    public function hasFileList()
    {
    }
    /**
     * Get 'file' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    public function getFileList()
    {
    }
    /**
     * Set 'file' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FileDescriptorProto> $value
     */
    public function setFileList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'file'
     *
     * @param \google\protobuf\FileDescriptorProto $value
     */
    public function addFile(\google\protobuf\FileDescriptorProto $value)
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