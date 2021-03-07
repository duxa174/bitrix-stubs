<?php

namespace google\protobuf\FileOptions;

/**
 * Protobuf enum : google.protobuf.FileOptions.OptimizeMode
 */
class OptimizeMode extends \Protobuf\Enum
{
    /**
     * SPEED = 1
     */
    const SPEED_VALUE = 1;
    /**
     * CODE_SIZE = 2
     */
    const CODE_SIZE_VALUE = 2;
    /**
     * LITE_RUNTIME = 3
     */
    const LITE_RUNTIME_VALUE = 3;
    /**
     * @var \google\protobuf\FileOptions\OptimizeMode
     */
    protected static $SPEED = null;
    /**
     * @var \google\protobuf\FileOptions\OptimizeMode
     */
    protected static $CODE_SIZE = null;
    /**
     * @var \google\protobuf\FileOptions\OptimizeMode
     */
    protected static $LITE_RUNTIME = null;
    /**
     * @return \google\protobuf\FileOptions\OptimizeMode
     */
    public static function SPEED()
    {
    }
    /**
     * @return \google\protobuf\FileOptions\OptimizeMode
     */
    public static function CODE_SIZE()
    {
    }
    /**
     * @return \google\protobuf\FileOptions\OptimizeMode
     */
    public static function LITE_RUNTIME()
    {
    }
    /**
     * @param int $value
     * @return \google\protobuf\FileOptions\OptimizeMode
     */
    public static function valueOf($value)
    {
    }
}