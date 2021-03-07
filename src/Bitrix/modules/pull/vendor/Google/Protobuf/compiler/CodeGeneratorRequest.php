<?php

namespace google\protobuf\compiler;

/**
 * Protobuf message : google.protobuf.compiler.CodeGeneratorRequest
 */
class CodeGeneratorRequest extends \Protobuf\AbstractMessage
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
     * file_to_generate repeated string = 1
     *
     * @var \Protobuf\Collection
     */
    protected $file_to_generate = null;
    /**
     * parameter optional string = 2
     *
     * @var string
     */
    protected $parameter = null;
    /**
     * proto_file repeated message = 15
     *
     * @var \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    protected $proto_file = null;
    /**
     * Check if 'file_to_generate' has a value
     *
     * @return bool
     */
    public function hasFileToGenerateList()
    {
    }
    /**
     * Get 'file_to_generate' value
     *
     * @return \Protobuf\Collection
     */
    public function getFileToGenerateList()
    {
    }
    /**
     * Set 'file_to_generate' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setFileToGenerateList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'file_to_generate'
     *
     * @param string $value
     */
    public function addFileToGenerate($value)
    {
    }
    /**
     * Check if 'parameter' has a value
     *
     * @return bool
     */
    public function hasParameter()
    {
    }
    /**
     * Get 'parameter' value
     *
     * @return string
     */
    public function getParameter()
    {
    }
    /**
     * Set 'parameter' value
     *
     * @param string $value
     */
    public function setParameter($value = null)
    {
    }
    /**
     * Check if 'proto_file' has a value
     *
     * @return bool
     */
    public function hasProtoFileList()
    {
    }
    /**
     * Get 'proto_file' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    public function getProtoFileList()
    {
    }
    /**
     * Set 'proto_file' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FileDescriptorProto> $value
     */
    public function setProtoFileList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'proto_file'
     *
     * @param \google\protobuf\FileDescriptorProto $value
     */
    public function addProtoFile(\google\protobuf\FileDescriptorProto $value)
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