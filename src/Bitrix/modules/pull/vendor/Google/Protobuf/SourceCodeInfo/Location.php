<?php

namespace google\protobuf\SourceCodeInfo;

/**
 * Protobuf message : google.protobuf.SourceCodeInfo.Location
 */
class Location extends \Protobuf\AbstractMessage
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
     * path repeated int32 = 1
     *
     * @var \Protobuf\Collection
     */
    protected $path = null;
    /**
     * span repeated int32 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $span = null;
    /**
     * leading_comments optional string = 3
     *
     * @var string
     */
    protected $leading_comments = null;
    /**
     * trailing_comments optional string = 4
     *
     * @var string
     */
    protected $trailing_comments = null;
    /**
     * leading_detached_comments repeated string = 6
     *
     * @var \Protobuf\Collection
     */
    protected $leading_detached_comments = null;
    /**
     * Check if 'path' has a value
     *
     * @return bool
     */
    public function hasPathList()
    {
    }
    /**
     * Get 'path' value
     *
     * @return \Protobuf\Collection
     */
    public function getPathList()
    {
    }
    /**
     * Set 'path' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPathList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'path'
     *
     * @param int $value
     */
    public function addPath($value)
    {
    }
    /**
     * Check if 'span' has a value
     *
     * @return bool
     */
    public function hasSpanList()
    {
    }
    /**
     * Get 'span' value
     *
     * @return \Protobuf\Collection
     */
    public function getSpanList()
    {
    }
    /**
     * Set 'span' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setSpanList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'span'
     *
     * @param int $value
     */
    public function addSpan($value)
    {
    }
    /**
     * Check if 'leading_comments' has a value
     *
     * @return bool
     */
    public function hasLeadingComments()
    {
    }
    /**
     * Get 'leading_comments' value
     *
     * @return string
     */
    public function getLeadingComments()
    {
    }
    /**
     * Set 'leading_comments' value
     *
     * @param string $value
     */
    public function setLeadingComments($value = null)
    {
    }
    /**
     * Check if 'trailing_comments' has a value
     *
     * @return bool
     */
    public function hasTrailingComments()
    {
    }
    /**
     * Get 'trailing_comments' value
     *
     * @return string
     */
    public function getTrailingComments()
    {
    }
    /**
     * Set 'trailing_comments' value
     *
     * @param string $value
     */
    public function setTrailingComments($value = null)
    {
    }
    /**
     * Check if 'leading_detached_comments' has a value
     *
     * @return bool
     */
    public function hasLeadingDetachedCommentsList()
    {
    }
    /**
     * Get 'leading_detached_comments' value
     *
     * @return \Protobuf\Collection
     */
    public function getLeadingDetachedCommentsList()
    {
    }
    /**
     * Set 'leading_detached_comments' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLeadingDetachedCommentsList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'leading_detached_comments'
     *
     * @param string $value
     */
    public function addLeadingDetachedComments($value)
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