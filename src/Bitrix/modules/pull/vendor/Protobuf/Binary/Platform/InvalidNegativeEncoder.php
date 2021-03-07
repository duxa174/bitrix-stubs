<?php

namespace Protobuf\Binary\Platform;

/**
 * Invalid platform for negative values
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class InvalidNegativeEncoder implements \Protobuf\Binary\Platform\NegativeEncoder
{
    /**
     * {@inheritdoc}
     */
    public function encodeVarint($varint)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function encodeSFixed64($sFixed64)
    {
    }
}