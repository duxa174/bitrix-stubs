<?php

namespace Protobuf\Binary\Platform;

/**
 * Platform factory
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class PlatformFactory
{
    /**
     * @var \Protobuf\Binary\Platform\NegativeEncoder
     */
    private $negativeEncoder;
    /**
     * Return a NegativeEncoder.
     *
     * @return \Protobuf\Binary\Platform\NegativeEncoder
     */
    public function getNegativeEncoder()
    {
    }
    /**
     * @param string $name
     *
     * @return boolean
     */
    public function isExtensionLoaded($name)
    {
    }
    /**
     * @return boolean
     */
    public function is32Bit()
    {
    }
}