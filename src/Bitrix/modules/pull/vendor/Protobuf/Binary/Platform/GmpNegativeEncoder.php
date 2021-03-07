<?php

namespace Protobuf\Binary\Platform;

/**
 * GMP negative values enconding.
 *
 * @author Iván Montes <drslump@pollinimini.net>
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class GmpNegativeEncoder implements \Protobuf\Binary\Platform\NegativeEncoder
{
    /**
     * @var \GMP
     */
    protected $gmp_x00;
    /**
     * @var \GMP
     */
    protected $gmp_x7f;
    /**
     * @var \GMP
     */
    protected $gmp_x80;
    /**
     * @var \GMP
     */
    protected $gmp_xff;
    /**
     * @var \GMP
     */
    protected $gmp_x100;
    /**
     * @var bool
     */
    protected $is32Bit;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
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