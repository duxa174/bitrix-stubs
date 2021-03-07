<?php

namespace Protobuf;

/**
 * Write context
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class WriteContext
{
    /**
     * @var \Protobuf\ComputeSizeContext
     */
    private $computeSizeContext;
    /**
     * @var \Protobuf\Binary\StreamWriter
     */
    private $writer;
    /**
     * @var \Protobuf\Stream
     */
    private $stream;
    /**
     * @var integer
     */
    private $length;
    /**
     * @param \Protobuf\Stream              $stream
     * @param \Protobuf\Binary\StreamWriter $writer
     * @param \Protobuf\ComputeSizeContext  $computeSizeContext
     */
    public function __construct(\Protobuf\Stream $stream, \Protobuf\Binary\StreamWriter $writer, \Protobuf\ComputeSizeContext $computeSizeContext)
    {
    }
    /**
     * @return \Protobuf\Binary\StreamWriter
     */
    public function getWriter()
    {
    }
    /**
     * @return \Protobuf\Stream
     */
    public function getStream()
    {
    }
    /**
     * @return \Protobuf\ComputeSizeContext
     */
    public function getComputeSizeContext()
    {
    }
}