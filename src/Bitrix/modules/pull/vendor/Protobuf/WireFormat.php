<?php

namespace Protobuf;

/**
 * This class contains constants and helper functions useful for dealing with
 * the Protocol Buffer wire format.
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class WireFormat
{
    const WIRE_VARINT = 0;
    const WIRE_FIXED64 = 1;
    const WIRE_LENGTH = 2;
    const WIRE_GROUP_START = 3;
    const WIRE_GROUP_END = 4;
    const WIRE_FIXED32 = 5;
    const WIRE_UNKNOWN = -1;
    const TAG_TYPE_BITS = 3;
    const TAG_TYPE_MASK = 0x7;
    /**
     * @var array
     */
    private static $wireTypeMap = [\Protobuf\Field::TYPE_INT32 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_INT64 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_UINT32 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_UINT64 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_SINT32 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_SINT64 => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_BOOL => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_ENUM => \Protobuf\WireFormat::WIRE_VARINT, \Protobuf\Field::TYPE_FIXED64 => \Protobuf\WireFormat::WIRE_FIXED64, \Protobuf\Field::TYPE_SFIXED64 => \Protobuf\WireFormat::WIRE_FIXED64, \Protobuf\Field::TYPE_DOUBLE => \Protobuf\WireFormat::WIRE_FIXED64, \Protobuf\Field::TYPE_STRING => \Protobuf\WireFormat::WIRE_LENGTH, \Protobuf\Field::TYPE_BYTES => \Protobuf\WireFormat::WIRE_LENGTH, \Protobuf\Field::TYPE_MESSAGE => \Protobuf\WireFormat::WIRE_LENGTH, \Protobuf\Field::TYPE_FIXED32 => \Protobuf\WireFormat::WIRE_FIXED32, \Protobuf\Field::TYPE_SFIXED32 => \Protobuf\WireFormat::WIRE_FIXED32, \Protobuf\Field::TYPE_FLOAT => \Protobuf\WireFormat::WIRE_FIXED32];
    /**
     * Given a field type, determines the wire type.
     *
     * @param integer $type
     * @param integer $default
     *
     * @return integer
     */
    public static function getWireType($type, $default)
    {
    }
    /**
     * Assert the wire type match
     *
     * @param integer $wire
     * @param integer $type
     */
    public static function assertWireType($wire, $type)
    {
    }
    /**
     * Given a tag value, determines the field number (the upper 29 bits).
     *
     * @param integer $tag
     *
     * @return integer
     */
    public static function getTagFieldNumber($tag)
    {
    }
    /**
     * Given a tag value, determines the wire type (the lower 3 bits).
     *
     * @param integer $tag
     *
     * @return integer
     */
    public static function getTagWireType($tag)
    {
    }
    /**
     * Makes a tag value given a field number and wire type
     *
     * @param integer $tag
     * @param integer $wireType
     *
     * @return integer
     */
    public static function getFieldKey($tag, $wireType)
    {
    }
}