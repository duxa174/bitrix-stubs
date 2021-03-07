<?php

namespace Bitrix\Main\Session;

final class SessionConfigurationResolver
{
    private const MODE_DEFAULT = 'default';
    private const MODE_SEPARATED = 'separated';
    private const TYPE_FILE = 'file';
    private const TYPE_DATABASE = 'database';
    private const TYPE_REDIS = 'redis';
    private const TYPE_MEMCACHE = 'memcache';
    private const TYPE_ARRAY = 'array';
    private const TYPE_NULL = 'null';
    private const TYPE_CUSTOM_INI = 'save_handler.php.ini';
    /** @var Configuration */
    private $configuration;
    private $sessionConfig;
    /** @var Session */
    private $session;
    /** @var KernelSession */
    private $kernelSession;
    public function __construct(\Bitrix\Main\Config\Configuration $configuration)
    {
    }
    public function resolve() : void
    {
    }
    private function getSessionConfig() : array
    {
    }
    private function buildSessionHandlerByOptions(string $type, array $options = [])
    {
    }
    private function normalizeSessionOptions($options) : array
    {
    }
    public function getSession() : \Bitrix\Main\Session\SessionInterface
    {
    }
    public function getKernelSession() : \Bitrix\Main\Session\SessionInterface
    {
    }
    public function getConfiguration() : \Bitrix\Main\Config\Configuration
    {
    }
}