<?php

namespace Protobuf\Extension;

/**
 * Protobuf extension field
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ExtensionField
{
    /**
     * @var callback
     */
    private $sizeCalculator;
    /**
     * @var callback
     */
    private $writer;
    /**
     * @var callback
     */
    private $reader;
    /**
     * @var string
     */
    private $extendee;
    /**
     * @var string
     */
    private $method;
    /**
     * @var string
     */
    private $name;
    /**
     * @var integer
     */
    private $tag;
    /**
     * @param string   $extendee
     * @param string   $name
     * @param integer  $tag
     * @param callback $reader
     * @param callback $writer
     * @param callback $sizeCalculator
     * @param string   $method
     */
    public function __construct($extendee, $name, $tag, $reader, $writer, $sizeCalculator, $method = null)
    {
    }
    /**
     * @return string
     */
    public function getExtendee()
    {
    }
    /**
     * @return string
     */
    public function getMethod()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return integer
     */
    public function getTag()
    {
    }
    /**
     * @param \Protobuf\ComputeSizeContext $context
     * @param mixed                        $value
     *
     * @return integer
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context, $value)
    {
    }
    /**
     * @param \Protobuf\WriteContext $context
     * @param mixed                  $value
     */
    public function writeTo(\Protobuf\WriteContext $context, $value)
    {
    }
    /**
     * @param \Protobuf\ReadContext $context
     * @param integer               $wire
     *
     * @return mixed
     */
    public function readFrom(\Protobuf\ReadContext $context, $wire)
    {
    }
}