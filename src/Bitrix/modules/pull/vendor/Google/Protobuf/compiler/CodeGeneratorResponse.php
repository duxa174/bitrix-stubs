<?php

namespace google\protobuf\compiler;

/**
 * Protobuf message : google.protobuf.compiler.CodeGeneratorResponse
 */
class CodeGeneratorResponse extends \Protobuf\AbstractMessage
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
     * error optional string = 1
     *
     * @var string
     */
    protected $error = null;
    /**
     * file repeated message = 15
     *
     * @var \Protobuf\Collection<\google\protobuf\compiler\CodeGeneratorResponse\File>
     */
    protected $file = null;
    /**
     * Check if 'error' has a value
     *
     * @return bool
     */
    public function hasError()
    {
    }
    /**
     * Get 'error' value
     *
     * @return string
     */
    public function getError()
    {
    }
    /**
     * Set 'error' value
     *
     * @param string $value
     */
    public function setError($value = null)
    {
    }
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
     * @return \Protobuf\Collection<\google\protobuf\compiler\CodeGeneratorResponse\File>
     */
    public function getFileList()
    {
    }
    /**
     * Set 'file' value
     *
     * @param \Protobuf\Collection<\google\protobuf\compiler\CodeGeneratorResponse\File> $value
     */
    public function setFileList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'file'
     *
     * @param \google\protobuf\compiler\CodeGeneratorResponse\File $value
     */
    public function addFile(\google\protobuf\compiler\CodeGeneratorResponse\File $value)
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