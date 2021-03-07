<?php

namespace Bitrix\Sender\Preset\Installation;

/**
 * Class Installer
 * @package Bitrix\Sender\Preset\Installation
 */
class Installer
{
    protected $errors = array();
    protected static $version = 2;
    protected static $versionOptionName = 'sender_preset_version';
    /**
     * Check version.
     *
     * @return bool
     */
    public static function checkVersion()
    {
    }
    /**
     * Return true if it has errors.
     *
     * @return iInstallable[]
     */
    public static function getInstallable()
    {
    }
    /**
     * Install newest.
     * @return bool
     */
    public static function installNewest()
    {
    }
    /**
     * Install.
     * @return bool
     */
    public function install()
    {
    }
    /**
     * Uninstall.
     *
     * @param iInstallable|null $installable Installable.
     */
    public function uninstall(\Bitrix\Sender\Preset\Installation\iInstallable $installable = null)
    {
    }
    /**
     * Update installed version.
     *
     * @param integer|null $version Version
     */
    public static function updateInstalledVersion($version = null)
    {
    }
    protected static function getVersion()
    {
    }
    protected static function getInstalledVersion()
    {
    }
    /**
     * Get errors.
     *
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Return true if it has errors.
     *
     * @return bool
     */
    public function hasErrors()
    {
    }
}