<?php

namespace Bitrix\UI\EntitySelector;

final class Configuration
{
    private static $loaded = false;
    private static $entities = [];
    private static $providers = [];
    private static $extensions = [];
    public static function getExtensions() : array
    {
    }
    /**
     * @param string $entityId
     *
     * @param array $options
     *
     * @return BaseProvider|null
     */
    public static function getProvider($entityId, $options = [])
    {
    }
    public static function getEntities()
    {
    }
    private static function load()
    {
    }
    private static function createProvider($moduleId, $className, $options = [])
    {
    }
}