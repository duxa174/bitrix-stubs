<?php

namespace Protobuf;

/**
 * Compute Size Context
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ComputeSizeContext
{
    /**
     * @var \Protobuf\Binary\SizeCalculator
     */
    private $calculator;
    /**
     * @param \Protobuf\Binary\SizeCalculator $calculator
     */
    public function __construct(\Protobuf\Binary\SizeCalculator $calculator)
    {
    }
    /**
     * @return \Protobuf\Binary\SizeCalculator
     */
    public function getSizeCalculator()
    {
    }
}