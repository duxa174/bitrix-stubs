<?php

namespace Bitrix\Sender\Integration\Crm\Preset;

/**
 * class Segment
 * @package Bitrix\Sender\Integration\Crm\Preset
 */
class Segment implements \Bitrix\Sender\Preset\Installation\iInstallable
{
    /**
     * Get installable ID.
     *
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Return true if it is installed.
     *
     * @return bool
     */
    public function isInstalled()
    {
    }
    /**
     * Install.
     *
     * @return bool
     * @throws SqlQueryException
     */
    public function install()
    {
    }
    /**
     * Uninstall.
     *
     * @return bool
     */
    public function uninstall()
    {
    }
    private function getSegments()
    {
    }
    private static function convertPresetFields($fields)
    {
    }
    private function getInstalledSegment($code = null)
    {
    }
}