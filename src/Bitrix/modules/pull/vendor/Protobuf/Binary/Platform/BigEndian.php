<?php

namespace Protobuf\Binary\Platform;

/**
 * Check current architecture
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class BigEndian
{
    /**
     * @var bool
     */
    protected static $is32Bit;
    /**
     * @var integer
     */
    protected static $isBigEndian;
    /**
     * Check if the current architecture is Big Endian.
     *
     * @return bool
     */
    public static function isBigEndian()
    {
    }
    /**
     * @return bool
     */
    public static function is32Bit()
    {
    }
}