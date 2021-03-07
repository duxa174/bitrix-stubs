<?php

namespace Protobuf\Binary\Platform;

/**
 * BC math negative values enconding.
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class BcNegativeEncoder implements \Protobuf\Binary\Platform\NegativeEncoder
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