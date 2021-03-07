<?php

namespace Protobuf\Extension;

/**
 * A table of known extensions indexed by extendee and field number
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class ExtensionRegistry
{
    /**
     * @var array
     */
    protected $extensions = [];
    /**
     * Remove all registered extensions
     */
    public function clear()
    {
    }
    /**
     * Adds an element to the registry.
     *
     * @param \Protobuf\Extension\ExtensionField $extension
     */
    public function add(\Protobuf\Extension\ExtensionField $extension)
    {
    }
    /**
     * Find an extension by containing field number
     *
     * @param string  $className
     * @param integer $number
     *
     * @return \Protobuf\Extension\ExtensionField|null
     */
    public function findByNumber($className, $number)
    {
    }
}