<?php

namespace google\protobuf\FieldOptions;

/**
 * Protobuf enum : google.protobuf.FieldOptions.CType
 */
class CType extends \Protobuf\Enum
{
    /**
     * STRING = 0
     */
    const STRING_VALUE = 0;
    /**
     * CORD = 1
     */
    const CORD_VALUE = 1;
    /**
     * STRING_PIECE = 2
     */
    const STRING_PIECE_VALUE = 2;
    /**
     * @var \google\protobuf\FieldOptions\CType
     */
    protected static $STRING = null;
    /**
     * @var \google\protobuf\FieldOptions\CType
     */
    protected static $CORD = null;
    /**
     * @var \google\protobuf\FieldOptions\CType
     */
    protected static $STRING_PIECE = null;
    /**
     * @return \google\protobuf\FieldOptions\CType
     */
    public static function STRING()
    {
    }
    /**
     * @return \google\protobuf\FieldOptions\CType
     */
    public static function CORD()
    {
    }
    /**
     * @return \google\protobuf\FieldOptions\CType
     */
    public static function STRING_PIECE()
    {
    }
    /**
     * @param int $value
     * @return \google\protobuf\FieldOptions\CType
     */
    public static function valueOf($value)
    {
    }
}