<?php

namespace google\protobuf\php;

/**
 * Protobuf extension : php.Extension
 */
class Extension implements \Protobuf\Extension
{
    /**
     * Extension field : package optional string = 50002
     *
     * @var \Protobuf\Extension
     */
    protected static $package = null;
    /**
     * Extension field : generic_services optional bool = 50003
     *
     * @var \Protobuf\Extension
     */
    protected static $generic_services = null;
    /**
     * Register all extensions
     *
     * @param \Protobuf\Extension\ExtensionRegistry
     */
    public static function registerAllExtensions(\Protobuf\Extension\ExtensionRegistry $registry)
    {
    }
    /**
     * Extension field : package
     *
     * @return \Protobuf\Extension
     */
    public static function package()
    {
    }
    /**
     * Extension field : generic_services
     *
     * @return \Protobuf\Extension
     */
    public static function genericServices()
    {
    }
}